<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Administrador</title>

    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="assets/css/dashboard/normalize.css">

    <!-- Bootstrap V4.3 -->
    <link rel="stylesheet" href="assets/css/dashboard/bootstrap.min.css">

    <!-- Bootstrap Material Design V4.0 -->
    <link rel="stylesheet" href="assets/css/dashboard/bootstrap-material-design.min.css">

    <!-- Font Awesome V5.9.0 -->
    <link rel="stylesheet" href="assets/css/dashboard/all.css">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="assets/css/dashboard/sweetalert2.min.css">

    <!-- Sweet Alert V8.13.0 JS file-->
    <script src="assets/js/dashboard/sweetalert2.min.js"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="assets/css/dashboard/jquery.mCustomScrollbar.css">

    <!-- General Styles -->
    <link rel="stylesheet" href="assets/css/dashboard/style.css">


</head>

<body>

    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                        Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Roles <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="?c=Roles&a=registrarRoles"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Rol</a>
                                </li>
                                <li>
                                    <a href="?c=Roles&a=consultarRoles"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Roles</a>
                                </li>
                                <li>
                                    <a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Rol</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="?c=Users&a=registrarUsuarios"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
                                </li>
                                <li>
                                    <a href="?c=Users&a=consultarUsuarios"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
                                </li>
                                <li>
                                    <a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                                </li>
                                <li>
                                    <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Items <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="item-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
                                </li>
                                <li>
                                    <a href="item-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
                                </li>
                                <li>
                                    <a href="item-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Préstamos <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo préstamo</a>
                                </li>
                                <li>
                                    <a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de préstamos</a>
                                </li>
                                <li>
                                    <a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar préstamos</a>
                                </li>
                                <li>
                                    <a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Préstamos pendientes</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Page content -->
        <section class="full-box page-content">
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a href="user-update.html">
                    <i class="fas fa-user-cog"></i>
                </a>
                <a href="?c=Logout">
                    <i class="fas fa-power-off"></i>
                </a>
            </nav>