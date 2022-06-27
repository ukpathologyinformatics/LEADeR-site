<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';



class NewEntryController {
    public static function index(UserSession $userSession) {
        require NEWENTRY_VIEWS_DIR . 'index.php';
    }

    public static function addEntry(UserSession $userSession) {
        header('Content-Type: application/json');

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
        if ($submit > 0) {
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

        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $entry);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function addClassification(UserSession $userSession) {
        header('Content-Type: application/json');
        $success = false;
        $error_message = null;
        $name = $_POST['name'];
        $code = $_POST['code'];
        $location = $_POST['location'];
        $submit = DB::run("INSERT INTO classifications (code_id, class_name, location) VALUES (?, ?, ?)", [$code, $name, $location]);
        if ($submit > 0) {
            $success = true;
        }

        $ret = array('success' => $success, 'error_message' => $error_message);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function fillClassDropdown(UserSession $userSession) {
        header('Content-Type: application/json');
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


        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $all_data);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

}
