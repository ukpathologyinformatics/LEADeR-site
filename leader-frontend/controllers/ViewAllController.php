<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';
include_once MODELS_DIR . 'ViewAllModel.php';

class ViewAllController {
    public static function index(UserSession $userSession) {
        require VIEWALL_VIEWS_DIR . 'index.php';
    }
    public static function fillTable(UserSession $userSession) {
        header('Content-Type: application/json');
        $ret = ViewAllClass::fillTable($userSession);
        echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }
}