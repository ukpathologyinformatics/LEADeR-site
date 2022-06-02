<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class NewQueryController {
    public static function index(UserSession $userSession) {
        require NEWQUERY_VIEWS_DIR . 'index.php';
    }
}