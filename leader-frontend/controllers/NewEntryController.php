<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';
include_once MODELS_DIR . 'NewEntryModel.php';


class NewEntryController {
    public static function index(UserSession $userSession) {
        require NEWENTRY_VIEWS_DIR . 'index.php';
    }

    public static function addEntry(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = NewEntryClass::addEntry($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function addSurgery(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = NewEntryClass::addSurgery($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function addClassification(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = NewEntryClass::addClassification($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function addOperation(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = NewEntryClass::addOperation($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function fillClassDropdown(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = NewEntryClass::fillClassDropdown($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

    public static function fillSurgeryDropdown(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = NewEntryClass::fillSurgeryDropdown($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }

}
