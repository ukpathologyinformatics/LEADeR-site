<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class NewQueryController {
    public static function index(UserSession $userSession) {
        require NEWQUERY_VIEWS_DIR . 'index.php';
    }
    public static function searchTable(UserSession $userSession) {
        header('Content-Type: application/json');
        $success = false;
        $error_message = null;
        $criteria = $_GET['parameters'];
        $parameters = explode(",", $criteria);
        $all_data = array();
        $patient_ids = array();
        try {
            foreach ($parameters as $parameter) {
                $SELECT = DB::run("SELECT * FROM patient LEFT JOIN patient_icd ON patient.patient_id=patient_icd.patient_id CROSS APPLY OPENJSON(patient.entry) j WHERE j.[key] = ?", [$parameter]);
                if($SELECT != false) {
                     while ($rows = $SELECT->fetch(PDO::FETCH_LAZY)) {
                        if (!in_array($rows['patient_id'], $patient_ids)) {
                            $classes = DB::run("SELECT STRING_AGG(code_id,', ') AS classes FROM patient_class WHERE patient_id = ?", [$rows['patient_id']]);
                            if ($class_temp = $classes->fetch(PDO::FETCH_LAZY))
                            $class_set = $class_temp['classes'];

                            $surgeries = DB::run("SELECT STRING_AGG(surgery_id,', ') AS surgeries FROM patient_surgery WHERE patient_id = ?", [$rows['patient_id']]);
                            if ($surgery_temp = $surgeries->fetch(PDO::FETCH_LAZY))
                            $surgery_set = $surgery_temp['surgeries'];

                            if (is_null($class_set)) {
                                $class_set = "None";
                            }
                            if (is_null($surgery_set)) {
                                $surgery_set = "None";
                            }

                            array_push($all_data, array('patient_id' => $rows['patient_id'], 'file_status' => $rows['file_status'], 'icd_code' => $rows['icd_code'], 'code_id' => $class_set, 'surgery_id' => $surgery_set));
                            array_push($patient_ids, $rows['patient_id']);
                        }

                    }

                }
            }
            $success = true;

        } catch (Exception $e) {
            $message=$e;
        }

        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $all_data);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }
}