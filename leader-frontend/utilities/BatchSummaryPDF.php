<?php

class BatchSummaryPDF extends FPDF {
    protected $batchReport;

    public function __construct(BatchReport $batchReport) {
        parent::__construct();
        $this->batchReport = $batchReport;
        $this->AliasNbPages();
        $this->SetAutoPageBreak(true, 20);
        $this->AddPage();
        $this->SetFont('Times', '', 12);
    }

    function Header() {
        $this->Image(__DIR__ . '/../img/UKHC_Logo.png', 5, 6, 30);
        $this->SetFont('Arial', 'B', 17);
        $this->Cell(75, 10, str_replace('.json', '', $this->batchReport->getFilename()), 'LT', 0, 'R');
        $this->SetFont('Arial', '', 17);
        $this->Cell(115, 10, "- Exception / Response Report", 'TR', 1, 'L');
        $this->SetFont('Arial', '', 12);
        if (!is_null($this->batchReport->getSignedOutBy())) {
            $this->Cell(70, 8, "Signed out by: ", 'LB', 0, 'R');
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(20, 8, $this->batchReport->getSignedOutBy()->getLinkblue(), 'B', 0, 'C');
            $this->SetFont('Arial', '', 12);
            $this->Cell(10, 8, "at", 'B', 0, 'C');
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 8, $this->batchReport->getSignedOutTimestamp()->format('m/d/Y H:i:s T'), 'RB', 0, 'L');
            $this->SetFont('Arial', '', 12);
        } else {
            $this->Cell(0, 8, "", 'LRB');
        }
        $this->Ln(12);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    function BuildExceptionReport() {
        $batch_exceptions = $this->batchReport->getExceptions();
        foreach ($this->batchReport->getContentAsJson() as $component) {
            $header = $component->header;
            $calibrations = $component->calibrations;
            $qc = $component->qc;
            $blank = $component->blank;
            $outliers = $component->outliers;
            $nes = $component->nes;
            $calibrationExceptions = [];
            $qcExceptions = [];
            // Build blank section (DOES NOT CURRENTLY HAVE EXCEPTIONS)
            // Build NES section (DOES NOT CURRENTLY HAVE EXCEPTIONS)
            // Build NES IS section (DOES NOT CURRENTLY HAVE EXCEPTIONS)
            // Build calibrations section
            $calibration_items = $calibrations->calibration_items;
            for ($i = 0; $i < sizeof($calibration_items); $i++) {
                $calibration_item = $calibration_items[$i];
                if (array_key_exists('Exception_UUID', $calibration_item)) {
                    $exception = $batch_exceptions[$calibration_item->Exception_UUID];
                    $error = substr($exception['exception'], strpos($exception['exception'], ':') + 1) . " - (Actual: " . $calibration_item->concentration . ", Accuracy: " . number_format($calibration_item->accuracy, 2) . "%)";
                    $resolution = $this->getResolution($exception);
                    array_push($calibrationExceptions, ["error" => $error, "resolution" => $resolution]);
                }
            }
            if (array_key_exists('slope_exception', $calibrations)) {
                $exception = $batch_exceptions[$calibrations->slope_exception];
                $error = substr($exception['exception'], strpos($exception['exception'], ':') + 1) . " - Weighted Slope: " . $calibrations->weighted_slope . ", LB: " . number_format($calibrations->slope_lower, 5) . ", UB: " . number_format($calibrations->slope_upper, 5);
                $resolution = $this->getResolution($exception);
                array_push($calibrationExceptions, ["error" => $error, "resolution" => $resolution]);
            }
            // Build qc section
            foreach ($qc as $qc_entry) {
                if (array_key_exists('Exception_UUID', $qc_entry)) {
                    $qc_value = isset($qc_entry->qc_calculated_concentration) ? $qc_entry->qc_calculated_concentration : -1;
                    $low_thresh = isset($qc_entry->qc_daul_cutoff) ? $qc_entry->qc_daul_cutoff : -1;
                    $high_thresh = isset($qc_entry->qc_dauh_cutoff) ? $qc_entry->qc_dauh_cutoff : -1;
                    $exception = $batch_exceptions[$qc_entry->Exception_UUID];
                    $err_dir = "LOW";
                    $err_sign = "<";
                    $err_value = $low_thresh;
                    if ($qc_value > $high_thresh) {
                        $err_dir = "HIGH";
                        $err_sign = ">";
                        $err_value = $high_thresh;
                    }
                    $error = substr($exception['exception'], strpos($exception['exception'], ':') + 1) . " - $qc_entry->qc_name $err_dir WARNING (" . number_format($qc_value, 5) . " $err_sign " . number_format($err_value, 5) . ")";
                    $resolution = $this->getResolution($exception);
                    array_push($qcExceptions, ["error" => $error, "resolution" => $resolution]);
                }
            }
            $totalExceptionCount = sizeof($calibrationExceptions) + sizeof($qcExceptions);
            if ($totalExceptionCount == 0) {
                if ($this->GetPageHeight() - $this->GetY() < 40)
                    $this->AddPage();
                $this->printComponentHeader($header);
                $this->SetFont('Times', 'I', 10);
                $this->Cell(0, 8, "No exceptions for this component", 0, 1);
                $this->SetFont('Times', '', 12);
            } else {
                $minimumHeight = 20 + ((sizeof($calibrationExceptions) > 0) ? 20 : 0) + ((sizeof($qcExceptions) > 0) ? 20 : 0) + $totalExceptionCount * 20;
                if ($this->GetPageHeight() - $this->GetY() < $minimumHeight)
                    $this->AddPage();
                $this->printComponentHeader($header);
                if (sizeof($calibrationExceptions) > 0) {
                    $this->printSubsectionHeader("Calibration Exceptions");
                    foreach ($calibrationExceptions as $exception)
                        $this->printExceptionDetails($exception);
                }
                if (sizeof($qcExceptions) > 0) {
                    $this->printSubsectionHeader("QC Exceptions");
                    foreach ($qcExceptions as $exception)
                        $this->printExceptionDetails($exception);
                }
                $this->Cell(0, 5, "", 0, 1);
            }
        }
    }

    function SendToBrowser() {
        $this->Output('I', $this->getFilename());
    }

    private function getResolution($exception) {
        $resolution = "Unresolved";
        if (!is_null($exception['person']))
            $resolution = "Resolved by " . $exception['person']->getLinkblue() . ": " . $exception['notes'];
        return $resolution;
    }

    private function printComponentHeader($header) {
        // Build component header
        $component = str_replace(' 1', '', $header->component);
        $assay = $header->assay;
        $timestamp = $header->timestamp;
        $date = new DateTime();
        $date->setTimestamp($timestamp / 1000);
        $this->SetFillColor(220);
        $this->SetFont('Times', '', 12);
        $this->Cell(23, 10, 'Component:', 'LTB', 0, 'L', true);
        $this->SetFont('Times', 'B', 12);
        $this->Cell(57, 10, $component, 'TB', 0, 'L', true);
        $this->SetFont('Times', '', 12);
        $this->Cell(15, 10, ' Assay:', 'TB', 0, 'L', true);
        $this->SetFont('Times', 'B', 12);
        $this->Cell(30, 10, $assay, 'TB', 0, 'L', true);
        $this->SetFont('Times', '', 12);
        $this->Cell(0, 10, 'Date: ' . $date->format('m/d/Y H:i:s T'), 'TRB', 1, 'R', true);
    }

    private function printSubsectionHeader($subsection) {
        $this->Cell(0, 1, "", 0, 1);
        $this->SetFillColor(235);
        $this->SetFont('Times', 'B', 10);
        $this->Cell(0, 7, $subsection, 'LTBR', 1, 'C', true);
        $this->SetFont('Times', '', 12);
    }

    private function printExceptionDetails($exception) {
        $this->Cell(0, 1, "", 0, 1);
        $this->Cell(0, 10, $exception['error'], "LTR", 1);
        $this->Cell(5, 8, "", "LB");
        if ($exception['resolution'] == "Unresolved")
            $this->SetFont('Times', 'I', 10);
        else
            $this->SetFont('Times', 'B', 10);
        $this->Cell(0, 8, $exception['resolution'], "RB", 1);
        $this->SetFont('Times', '', 12);
    }

    private function getFilename() {
        //return str_replace('.json', '_', $this->batchReport->getFilename()) . date('m-d-Y_H:i:s') . '.pdf';
        return str_replace('.json', '', $this->batchReport->getFilename()) . '_exception-response-report.pdf';
    }
}