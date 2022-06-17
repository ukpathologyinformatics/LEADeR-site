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
            #if ($value != ""){
                $entry[$key] = $value;
            #}
        }
        //var_dump($entry);
        //DB::run("INSERT INTO patient VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$entry["?"], $entry["subject-id"], $entry["start-date"], $entry["end-date"], $entry["file"], $entry["gender"], $entry["race"], $entry["ethnicity"], $entry["dob"], $entry["?"]]);
        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $entry);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

}
