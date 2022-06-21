<?php
/** @var UserSession $userSession */
/** @var string $page */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <title>LEADeR Interface Website</title>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
    
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/css/floating-labels.css">
    <link type="text/css" rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
    <link type="text/css" rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
    <link type="text/css" rel="stylesheet" href="/css/buttons.bootstrap4.min.css">
    <link type="text/css" rel="stylesheet" href="/css/daterangepicker.css">
    <link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/toastify.min.css">
    <link type="text/css" rel="stylesheet" href="/css/global.css">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap-select.css" />
    
</head>
<body>
<nav class="navbar navbar-dark sticky-top navbar-expand-lg flex-md-nowrap p-0">
    <a class="navbar-brand col-2 col-sm-2 col-md-2 mr-0" href="/">LEADeR Interface<br>Website</a>
    <ul class="navbar-nav mr-auto">
    </ul>
<?php if (!is_null($userSession)) : ?>
    <form class="form-inline my-2 my-lg-0 mr-2">
<?php if (!is_null($userSession->getUser())) : ?>
        <span class="responsive-text" id="login-user"><?php echo $userSession->getUser()->getLinkblue(); ?></span>
<?php endif; ?>
        <a class="btn btn-sm btn-primary my-2 my-sm-0 ml-2" href="/logout">Logout</a>
    </form>
<?php endif; ?>
</nav>
<div class="container-fluid">
    <div class="row">
        <?php include_once __DIR__ . '/_menu.php'; ?>

        <main role="main" class="col-12 col-md-11 bg-faded py-3 flex-grow-1">
