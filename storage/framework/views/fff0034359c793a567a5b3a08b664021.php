<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                
                <h3 class="mt-4 text-white">IS</h3>
            </span>
            <span class="logo-lg">
                
                <h3 class="mt-4 text-white">Inventry System</h3>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                
                <h3 class="mt-4 text-white">IS</h3>
            </span>
            <span class="logo-lg">
                
                <h3 class="mt-4 text-white">Inventry System</h3>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>


    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index">
                        <i class="mdi mdi-store"></i> <span>Inventry
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard">
                        <i class="mdi mdi-speedometer"></i> <span>Dashboard
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH D:\MY Projects\WEB\laravel\Inventry_system\grama_sewaka_03\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>