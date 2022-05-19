<?php
/** @var UserSession $userSession */
/** @var string $page */
?>
        <header class="col-12 col-md-1 bg-light sidebar sidebar-sticky">
            <ul class="flex-row flex-md-column navbar-nav justify-content-between sidebar-menu sidebar-sticky">
                <li class="nav-item d-none d-md-inline">
                    <span class="nav-link sidebar-heading pl-0 text-nowrap">Overview</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "home") { echo " active"; } ?>" href="/" data-toggle="tooltip" data-placement="bottom" title="Dashboard Overview">
                        <i class="fa fa-desktop"></i>
                        <span class="d-none d-md-inline">Dashboard<?php if (!is_null($page) && $page == "home") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "new-entry") { echo " active"; } ?>" href="/page1" data-toggle="tooltip" data-placement="bottom" title="New Entry">
                        <i class="fa fa-plus-circle"></i>
                        <span class="d-none d-md-inline">New Entry<?php if (!is_null($page) && $page == "new-entry") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "new-query") { echo " active"; } ?>" href="/page1" data-toggle="tooltip" data-placement="bottom" title="New Query">
                        <i class="fas fa-search"></i>
                        <span class="d-none d-md-inline">New Query<?php if (!is_null($page) && $page == "new-query") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
<?php if($userSession->getUser()->isAdmin()): ?>
                <li class="nav-item d-none d-md-inline">
                    <span class="nav-link sidebar-heading pl-0 text-nowrap">Administration</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "users") { echo " active"; } ?>" href="/users" data-toggle="tooltip" data-placement="bottom" title="Manage User Admin Settings">
                        <i class="fas fa-users-cog"></i>
                        <span class="d-none d-md-inline">Users<?php if (!is_null($page) && $page == "users") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
<?php endif; ?>
            </ul>
        </header>
    
        