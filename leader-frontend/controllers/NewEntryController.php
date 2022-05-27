<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class NewEntryController {
    public static function index(UserSession $userSession) {
        require NEWENTRY_VIEWS_DIR . 'index.php';
    }

    public static function addLowerEntry(UserSession $userSession) {
        header('Content-Type: application/json');

        $success = false;
        $error_message = null;
        $non_empty_elems = array();
        foreach($_POST as $key=>$value) {
            if ($value != ""){
                $non_empty_elems[$key] = $value;
            }
        }

        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $non_empty_elems);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function addUpperEntry(UserSession $userSession) {
        header('Content-Type: application/json');

        $success = false;
        $error_message = null;
        $non_empty_elems = array();
        foreach($_POST as $key=>$value) {
            if ($value != ""){
                $non_empty_elems[$key] = $value;
            }
        }

        $ret = array('success' => $success, 'error_message' => $error_message, 'data' => $non_empty_elems);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }
}