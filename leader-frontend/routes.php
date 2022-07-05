<?php
    define('CONFIG_FILE', __DIR__ . '/config.php');
    define('MODELS_DIR', __DIR__ . '/models/');
    define('UTILITIES_DIR', __DIR__ . '/utilities/');
    define('VIEWS_DIR', __DIR__ . '/views/');
    define('NEWENTRY_VIEWS_DIR', __DIR__ . '/views/newentry/');
    define('NEWQUERY_VIEWS_DIR', __DIR__ . '/views/newquery/');
    define('VIEWALL_VIEWS_DIR', __DIR__ . '/views/viewall/');

    include_once __DIR__ . '/controllers/RootController.php';
    include_once __DIR__ . '/controllers/NewEntryController.php';
    include_once __DIR__ . '/controllers/NewQueryController.php';
    include_once __DIR__ . '/controllers/ViewAllController.php';
    include_once __DIR__ . '/controllers/UsersController.php';

    /**
     * @param string $redirect
     * @param false $requires_admin
     * @param string $admin_redirect
     * @return UserSession
     */
    function get_session($redirect = '/login', $requires_admin = false, $admin_redirect = '/'): UserSession {
        $session = UserSession::withSessionID(session_id());
        if (is_null($session))
            header('Location: ' . $redirect);
        else {
            if (is_null($session->getUser()))
                header('Location: /logout');
            else if ($requires_admin && !$session->getUser()->isAdmin())
                header('Location: ' . $admin_redirect);
        }
        return $session;
    }

    $router = new AltoRouter();

    /* RootController routes */
    try {
        $router->map('GET', '/', function() {
            RootController::index(get_session());
        }, 'dashboard');
        $router->map('GET', '/login', function() {
            RootController::login();
        }, 'login');
        $router->map('POST', '/login', function() {
            try {
                RootController::do_login(strtolower($_POST['user']), $_POST['password'], 0);
            } catch (Exception $e) {
                $_SESSION['LOGIN_ERROR'] = $e->getMessage();
                header('Location: /login');
            }
        });
        $router->map('GET', '/logout', function() {
            RootController::logout();
        }, 'logout');
    } catch (Exception $e) {
        die("Failed to create route(s) from RootController section: " . $e->getMessage());
    }

    /* NewEntryController routes */
    try {
        $router->map('GET', '/new-entry', function() {
            NewEntryController::index(get_session());
        }, 'newentry-index');
        $router->map('POST', '/new-entry/add-entry', function() {
            NewEntryController::addEntry(get_session());
        }, 'newentry-addentry');
        $router->map('POST', '/new-entry/add-classification', function() {
            NewEntryController::addClassification(get_session());
        }, 'newentry-addclassification');
        $router->map('POST', '/new-entry/add-surgery', function() {
            NewEntryController::addSurgery(get_session());
        }, 'newentry-addsurgery');
        $router->map('GET', '/new-entry/fill-dropdown', function() {
            NewEntryController::fillClassDropdown(get_session());
        }, 'newentry-fillclassdropdown');
    } catch (Exception $e) {
        die("Failed to create route(s) from NewEntryController section: " . $e->getMessage());
    }

    /* NewQueryController routes */
    try {
        $router->map('GET', '/new-query', function() {
            NewQueryController::index(get_session());
        }, 'newquery-index');
        $router->map('GET', '/new-query/search-table', function() {
            NewQueryController::searchTable(get_session());
        }, 'newquery-searchtable');
    } catch (Exception $e) {
        die("Failed to create route(s) from NewEntryController section: " . $e->getMessage());
    }

    /* ViewAllController routes */
    try {
        $router->map('GET', '/view-all', function() {
            ViewAllController::index(get_session());
        }, 'viewall-index');
        $router->map('GET', '/view-all/fill-table', function() {
            ViewAllController::fillTable(get_session());
        }, 'viewall-filltable');
    } catch (Exception $e) {
        die("Failed to create route(s) from NewEntryController section: " . $e->getMessage());
    }

    try {
        /* UsersController routes */
        $router->map('GET', '/users', function() {
            UsersController::index(get_session("/", true));
        }, 'users-index');
        $router->map('GET', '/users/list', function() {
            UsersController::listForDatatable(get_session("/", true));
        }, 'users-for-datatable');
        $router->map('POST', '/users/submit', function() {
            UsersController::submit(get_session("/", true));
        }, 'users-update');
        $router->map('GET', '/users/getUser', function() {
            UsersController::getUser(get_session());
        }, 'users-get');
        $router->map('GET', '/users/getRoles', function() {
            UsersController::getRoles(get_session());
        }, 'users-roles');
        $router->map('POST', '/users/deleteUser', function() {
            UsersController::deleteUser(get_session("/", true));
        }, 'users-delete');
    } catch (Exception $e) {
        die("Failed to create route(s) from UsersController section: " . $e->getMessage());
    }

    /* DEBUG routes */
    try {
        $router->map('GET', '/info', function() {
            phpinfo();
        });
    } catch (Exception $e) {
        die("Failed to create route(s) from DEBUG section: " . $e->getMessage());
    }

    $match = $router->match();

    // Call closure or throw 404 status
    if ($match && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        // No route was matched
        //header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        $from = $_SERVER['REQUEST_URI'];
        if (strlen($from) > 20)
            $from = substr($from, 0, 20) . '...';
        $_SESSION['FLASH_ERROR'] = "No page exists at {$from}";
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            header('Location: /');
        }
    }