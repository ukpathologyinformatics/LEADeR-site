<?php
/** @var UserSession $userSession */
/** @var string $page */
?>
        <header class="col-12 col-xl-1 bg-light sidebar sidebar-sticky">
            <ul class="flex-row flex-xl-column navbar-nav justify-content-between sidebar-menu sidebar-sticky">
                <li class="nav-item d-none d-xl-inline">
                    <span class="nav-link sidebar-heading pl-0 text-nowrap">Overview</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "home") { echo " active"; } ?>" href="/" data-toggle="tooltip" data-placement="bottom" title="Home Menu">
                        <i class="fa fa-home"></i>
                        <span class="d-none d-xl-inline">Home<?php if (!is_null($page) && $page == "home") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "new-entry") { echo " active"; } ?>" href="/new-entry" data-toggle="tooltip" data-placement="bottom" title="New Entry">
                        <i class="fa fa-plus-circle"></i>
                        <span class="d-none d-xl-inline">New Entry<?php if (!is_null($page) && $page == "new-entry") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "view-all") { echo " active"; } ?>" href="/view-all" data-toggle="tooltip" data-placement="bottom" title="View All">
                        <i class="fas fa-bars"></i>
                        <span class="d-none d-xl-inline">View All<?php if (!is_null($page) && $page == "view-all") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "new-query") { echo " active"; } ?>" href="/new-query" data-toggle="tooltip" data-placement="bottom" title="Search">
                        <i class="fas fa-search"></i>
                        <span class="d-none d-xl-inline">Search<?php if (!is_null($page) && $page == "new-query") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
<?php if($userSession->getUser()->isAdmin()): ?>
                <li class="nav-item d-none d-xl-inline">
                    <span class="nav-link sidebar-heading pl-0 text-nowrap">Administration</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (!is_null($page) && $page == "users") { echo " active"; } ?>" href="/users" data-toggle="tooltip" data-placement="bottom" title="Manage User Admin Settings">
                        <i class="fas fa-users-cog"></i>
                        <span class="d-none d-xl-inline">Users<?php if (!is_null($page) && $page == "users") { echo' <span class="sr-only">(current)</span>'; } ?></span>
                    </a>
                </li>
<?php endif; ?>
            </ul>
        </header>
    
        