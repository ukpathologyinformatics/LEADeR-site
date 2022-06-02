<?php

require_once __DIR__ . '/../utilities/db.php';
include_once MODELS_DIR . 'User.php';

class ViewAllController {
    public static function index(UserSession $userSession) {
        require VIEWALL_VIEWS_DIR . 'index.php';
    }
}