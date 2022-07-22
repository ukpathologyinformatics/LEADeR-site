<?php

require_once __DIR__ . '/../utilities/db.php';
require_once __DIR__ . '/../utilities/UUID.php';
include_once MODELS_DIR . 'User.php';

class NewEntryClass {

    public function __construct() {
    }

    public static function addEntry(UserSession $userSession) {

        $success = false;
        $error_message = null;
        $entry = array();
        foreach($_POST as $key=>$value) {
            if ($value != ""){

//                 if (array_key_exists($key, $entry)) {
//
//                     $entry[$key] = (array) $entry[$key];
//                     array_push($entry[$key], $value);
//                 }
//                 else {
                $entry[$key] = $value;
//                 }

            }
        }
        $info = array_slice($entry, 9);
        $json_info = json_encode($info);

        $submit = DB::run("INSERT INTO patient (file_status, subj_id, first_recorded, last_updated_date, gender, race, ethnicity, dob, entry) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", [$entry["file"], $entry["subject-id"], $entry["start-date"], $entry["end-date"], $entry["gender"], $entry["race"], $entry["ethnicity"], $entry["dob"], $json_info]);
        if ($submit != false) {
            $success = true;
        }
        $stmt = DB::run("SELECT @@IDENTITY AS id");
        if ($id = $stmt->fetch(PDO::FETCH_LAZY))

        $int_id = (int)$id["id"];
        DB::run("INSERT INTO patient_icd (patient_id, icd_code) VALUES (?, ?)", [$int_id, $entry["icd-codes"]]);

        if (array_key_exists('left-classification', $entry)) {
            $codes = explode(",", $entry["left-classification"]);
            foreach ($codes as $class_name) {
                DB::run("INSERT INTO patient_class (patient_id, code_id) VALUES (?, ?)", [$int_id, $class_name]);
            }
        }
        if (array_key_exists('right-classification', $entry)) {
            $codes = explode(",", $entry["right-classification"]);
            foreach ($codes as $class_name) {
                DB::run("INSERT INTO patient_class (patient_id, code_id) VALUES (?, ?)", [$int_id, $class_name]);
            }
        }
        if (array_key_exists('lower-left-classification', $entry)) {
            $codes = explode(",", $entry["lower-left-classification"]);
            foreach ($codes as $class_name) {
                DB::run("INSERT INTO patient_class (patient_id, code_id) VALUES (?, ?)", [$int_id, $class_name]);
            }
        }
        if (array_key_exists('lower-right-classification', $entry)) {
            $codes = explode(",", $entry["lower-right-classification"]);
            foreach ($codes as $class_name) {
                DB::run("INSERT INTO patient_class (patient_id, code_id) VALUES (?, ?)", [$int_id, $class_name]);
            }
        }
        if (array_key_exists('lower-right-surgeries', $entry)) {
            $surgeries = explode("},", $entry["lower-right-surgeries"]);

            $bracket = "}";
            for($i = 0;$i < count($surgeries)-1;$i++) {
                $surgeries[$i] = $surgeries[$i] . $bracket;
            }
            //var_dump($surgeries);
            foreach ($surgeries as $operation) {
                $surgery = json_decode($operation, true);
                $side = $surgery['surg-side'][0];
                //var_dump($surgery);
                //var_dump($surgery["cpt"]);
                DB::run("INSERT INTO patient_surgery (patient_id, surgery_id, surgery_date, surgery_notes, attending_surgeon, age, side) VALUES (?, ?, ?, ?, ?, ?, ?)", [$int_id, $surgery["cpt"], $surgery["surg-date"], $surgery["notes"], $surgery["surgeon"], $surgery["age"], $side]);

            }
            //foreach ($codes as $class_name) {
            //    DB::run("INSERT INTO patient_class (patient_id, code_id) VALUES (?, ?)", [$int_id, $class_name]);
            //}
        }

        if (array_key_exists('lower-left-surgeries', $entry)) {
            $surgeries = explode("},", $entry["lower-left-surgeries"]);

            $bracket = "}";
            for($i = 0;$i < count($surgeries)-1;$i++) {
                $surgeries[$i] = $surgeries[$i] . $bracket;
            }
            //var_dump($surgeries);
            foreach ($surgeries as $operation) {
                $surgery = json_decode($operation, true);
                $side = $surgery['surg-side'][0];
                //var_dump($surgery);
                //var_dump($surgery["cpt"]);
                DB::run("INSERT INTO patient_surgery (patient_id, surgery_id, surgery_date, surgery_notes, attending_surgeon, age, side) VALUES (?, ?, ?, ?, ?, ?, ?)", [$int_id, $surgery["cpt"], $surgery["surg-date"], $surgery["notes"], $surgery["surgeon"], $surgery["age"], $side]);

            }
            //foreach ($codes as $class_name) {
            //    DB::run("INSERT INTO patient_class (patient_id, code_id) VALUES (?, ?)", [$int_id, $class_name]);
            //}
        }

        return array('success' => $success, 'error_message' => $error_message, 'data' => $entry);
    }

    public static function addSurgery(UserSession $userSession) {
        $success = false;
        $error_message = null;
        $surg_name = $_POST['surg_name'];
        $surg_date = $_POST['surg_date'];
        $surgeon = $_POST['surgeon'];
        $age = $_POST['age'];
        $notes = $_POST['notes'];
        $cpt = $_POST['cpt'];
        //$submit = DB::run("INSERT INTO classifications (code_id, class_name, location) VALUES (?, ?, ?)", [$code, $name, $location]);
        //if ($submit != false) {
        //    $success = true;
        //}


        return array('success' => $success, 'error_message' => $error_message);
    }

    public static function addClassification(UserSession $userSession) {
        $success = false;
        $error_message = null;
        $name = $_POST['name'];
        $code = $_POST['code'];
        $location = $_POST['location'];
        $submit = DB::run("INSERT INTO classifications (code_id, class_name, location) VALUES (?, ?, ?)", [$code, $name, $location]);
        if ($submit != false) {
            $success = true;
        }

        return array('success' => $success, 'error_message' => $error_message);
    }

    public static function addOperation(UserSession $userSession) {
        $success = false;
        $error_message = null;
        $name = $_POST['name'];
        $code = $_POST['code'];
        $submit = DB::run("INSERT INTO surgery (CPT_code, surgery_name) VALUES (?, ?)", [$code, $name]);
        if ($submit != false) {
            $success = true;
        }

        return array('success' => $success, 'error_message' => $error_message);
    }

    public static function fillClassDropdown(UserSession $userSession) {
        $success = false;
        $error_message = null;
        $all_data = array();
        try {
            $SELECT = DB::run("SELECT * FROM classifications");
            if($SELECT != false) {
                while ($rows = $SELECT->fetch(PDO::FETCH_LAZY)) {
                    array_push($all_data, array('location' => $rows['location'], 'code_id' => $rows['code_id'], 'class_name' => $rows['class_name']));
                }
                $success = true;
            }
        } catch (Exception $e) {
            $message=$e;
        }


        return array('success' => $success, 'error_message' => $error_message, 'data' => $all_data);
    }

    public static function fillSurgeryDropdown(UserSession $userSession) {
        $success = false;
        $error_message = null;
        $all_data = array();
        try {
            $SELECT = DB::run("SELECT * FROM surgery");
            if($SELECT != false) {
                while ($rows = $SELECT->fetch(PDO::FETCH_LAZY)) {
                    array_push($all_data, array('name' => $rows['surgery_name'], 'code' => $rows['CPT_code']));
                }
                $success = true;
            }
        } catch (Exception $e) {
            $message=$e;
        }


        return array('success' => $success, 'error_message' => $error_message, 'data' => $all_data);
    }
}