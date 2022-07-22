<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';
include_once MODELS_DIR . 'NewQueryModel.php';

class NewQueryController {
    public static function index(UserSession $userSession) {
        require NEWQUERY_VIEWS_DIR . 'index.php';
    }
    public static function searchTable(UserSession $userSession) {

       header('Content-Type: application/json');
       $ret = SearchTableClass::searchTable($userSession);
       //var_dump($ret);
       echo json_encode((object) array_filter($ret, function($value) { return $value !== null; }));
    }
}