<?php
/** @var UserSession $userSession */
$page = 'home';
include_once __DIR__ . '/_header.php';
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h4">Shriners Hospitals Data Registry</h1>
    </div>
    <section class="home">

        <h2 class="title-text">What Would You Like To Do Today?</h2>
        <div class="row">
            <div class="col-md-4 center-home-sects">
                <i class="fa fa-plus-circle"></i><br>
                <h5>New Entry</h5>
            </div>
            <div class="col-md-4 center-home-sects">
                <i class="fas fa-bars"></i><br>
                <h5>View All</h5>
            </div>
            <div class="col-md-4 center-home-sects">
                <i class="fas fa-search"></i><br>
                <h5>Search</h5>
            </div>
        </div>

    </section>

<?php
    include_once __DIR__ . '/_footer.php';
