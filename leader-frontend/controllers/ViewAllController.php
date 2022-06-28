<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class ViewAllController {
    public static function index(UserSession $userSession) {
        require VIEWALL_VIEWS_DIR . 'index.php';
    }
    public static function fillTable(UserSession $userSession) {
        header('Content-Type: application/json');
        $success = false;
        $error_message = null;
        $all_data = array();
        $patient_ids = array();
        try {
            $SELECT = DB::run("SELECT * FROM patient LEFT JOIN patient_icd ON patient.patient_id=patient_icd.patient_id LEFT JOIN patient_class ON patient.patient_id=patient_class.patient_id");
            if($SELECT != false) {
                while ($rows = $SELECT->fetch(PDO::FETCH_LAZY)) {
                    if (!in_array($rows['patient_id'], $patient_ids)) {
                        $classes = DB::run("SELECT STRING_AGG(code_id,',') AS classes FROM patient_class WHERE patient_id = ?", [$rows['patient_id']]);
                        if ($class_temp = $classes->fetch(PDO::FETCH_LAZY))
                        $class_set = $class_temp['classes'];

                        array_push($all_data, array('patient_id' => $rows['patient_id'], 'file_status' => $rows['file_status'], 'dob' => $rows['dob'], 'icd_code' => $rows['icd_code'], 'code_id' => $class_set));
                        array_push($patient_ids, $rows['patient_id']);
                    }

                }
                $success = true;
            }
        } catch (Exception $e) {
            $message=$e;
        }


        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $all_data);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }
}