<?php

require_once __DIR__ . '/../utilities/db.php';
require_once __DIR__ . '/../utilities/UUID.php';
include_once MODELS_DIR . 'User.php';

class ViewAllClass {

    public function __construct() {
    }

    public static function fillTable(UserSession $userSession) {
        $success = false;
        $error_message = null;
        $all_data = array();
        $patient_ids = array();
        try {
            $SELECT = DB::run("SELECT * FROM patient LEFT JOIN patient_icd ON patient.patient_id=patient_icd.patient_id");
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
                $success = true;
            }
        } catch (Exception $e) {
            $message=$e;
        }


        return array('success' => $success, 'error_message' => $error_message, 'data' => $all_data);
    }
}