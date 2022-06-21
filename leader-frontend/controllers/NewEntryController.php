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
            #var_dump($key);
            if ($value != ""){
                $entry[$key] = $value;
            }
        }
        #var_dump($entry);

        $info = array_slice($entry, 9);
        $json_info = json_encode($info);

        DB::run("INSERT INTO patient (file_status, subj_id, first_recorded, last_updated_date, gender, race, ethnicity, dob, entry) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", [$entry["file"], $entry["subject-id"], $entry["start-date"], $entry["end-date"], $entry["gender"], $entry["race"], $entry["ethnicity"], $entry["dob"], $json_info]);
        $id = DB::run("SELECT SCOPE_IDENTITY() AS id");
        var_dump($id);
        DB::run("INSERT INTO patient_icd (patient_id, icd_code) VALUES (?, ?)", [$id, $entry["icd-codes"]]);
        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $entry);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

}
