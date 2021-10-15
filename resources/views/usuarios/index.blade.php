<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assetsAdm/assets/images/iconoo.png">
    <title>ProductivA - Usuarios</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="./assetsAdm/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="./assetsAdm/assets/images/iconoo.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="./assetsAdm/assets/images/iconoo.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="./assetsAdm/assets/images/logooo-text-black.png" alt="homepage" class="dark-logoo" />
                                <!-- Light Logo text -->
                                <img src="./assetsAdm/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="./assetsAdm/assets/images/usuarioN.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Usuario</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- ------------------------------------------------ -->

                        <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        
                        <li class="list-divider"></li>

                        <!-- ------------------------------------------------ -->
                        <li class="nav-small-cap"><span class="hide-menu">Modulos</span></li>
                        <!-- ------------------------------------------------ -->

                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="{{url('usuarios')}}" aria-expanded="false">
                                <i class="fas fa-users"></i>
                                <span class="hide-menu">Usuarios
                                </span>
                            </a>
                        </li>
                        <!-- ------------------------------------------------ -->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('instructores')}}"
                                aria-expanded="false"><i class="fas fa-user-tie"></i><span
                                    class="hide-menu">Instructores</span></a>
                        </li>
                        <!-- ------------------------------------------------ -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="{{url('aprendices')}}" aria-expanded="false">
                                <i class="fas fa-user-graduate"></i>
                                <span class="hide-menu">Aprendices</span>
                            </a>
                        </li>
                        <!-- -------------------------------------------------->
                        
                        <li class="list-divider"></li>

                        <!-- ------------------------------------------------ -->
                        <li class="nav-small-cap"><span class="hide-menu">Componentes</span></li>

                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="ui-cards.html" aria-expanded="false">
                                <i class="far fa-calendar-alt"></i>
                                <span class="hide-menu">Calendario
                                </span>
                            </a>
                        </li>
                        <!-- ------------------------------------------------ -->
                        
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="form-input-grid.html" aria-expanded="false">
                                <i class="fas fa-puzzle-piece"></i>
                                <span class="hide-menu">Fichas
                                </span>
                            </a>
                        </li>
                        <!-- ------------------------------------------------ -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link sidebar-link" href="chart-knob.html" aria-expanded="false">
                                <i class="fas fa-book"></i>
                                <span class="hide-menu">Entregables</span>
                            </a>
                        </li>
                        <!-- ------------------------------------------------ -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="form-inputs.html" aria-expanded="false">
                                <i class="fas fa-video"></i>
                                <span class="hide-menu">Reuniones</span>
                            </a>
                        </li>
                        
                        
                        <!-- -------------------------------------------------->

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Usuario</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>


                    

                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <!--  -->
                  <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h1 class="card-title">Usuarios</h1></center>
                                <div class="table-responsive">

                                  
									<table style="margin-top:1rem;" id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr 
											style="
                                            background:#ffb880;
											aling-text:center;
                                            color:white;
											"
											>
                                                <th ">Nombre</th>
                                                <th>Apellido</th>
                                                <th>Genero</th>
                                                <th>Email-Sena</th>
                                                <th>Estado</th>
                                                <th>Rol</th>
                                                <th>Ver</th>
                                                <th>Editar</th>
												<th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $usuario)
                                                <tr>
                                                   
                                                    <td style="padding-right:20px;">
                                                       {{$usuario->Nombre}}
                                                    </td>
                                                    <td>
                                                        {{$usuario->Apellido}}
                                                    </td>
                                                 
                                                    <td>
                                                        
                                                        @switch($usuario->Genero)
                                                            @case('M')
                                                                <img width="18px"  src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDIzLjE4NCA0MjMuMTg0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MjMuMTg0IDQyMy4xODQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMwMEJCRDM7IiBkPSJNNDA3LjUxLDBIMjY2Ljk3MWMtOC44ODIsMC0xNS42NzMsNi43OTItMTUuNjczLDE1LjY3M3M2Ljc5MiwxNS42NzMsMTUuNjczLDE1LjY3M2gxMDIuOTIyDQoJTDI2NC44ODIsMTM2LjM1OWMtMjguMjEyLTIyLjk4OC02My43MzktMzcuMDk0LTEwMi45MjItMzcuMDk0QzcyLjYyLDk5LjI2NSwwLDE3MS44ODYsMCwyNjEuMjI0czcyLjYyLDE2MS45NTksMTYxLjk1OSwxNjEuOTU5DQoJczE2MS45NTktNzIuNjIsMTYxLjk1OS0xNjEuOTU5YzAtMzkuMTg0LTE0LjEwNi03NC43MS0zNy4wOTQtMTAyLjkyMkwzOTEuODM3LDUzLjI5djEwMi45MjJjMCw4Ljg4Miw2Ljc5MiwxNS42NzMsMTUuNjczLDE1LjY3Mw0KCXMxNS42NzMtNi43OTIsMTUuNjczLTE1LjY3M1YxNS42NzNDNDIzLjE4NCw2Ljc5Miw0MTYuMzkyLDAsNDA3LjUxLDB6IE0xNjEuOTU5LDM5MS44MzdjLTcyLjA5OCwwLTEzMC42MTItNTguNTE0LTEzMC42MTItMTMwLjYxMg0KCXM1OC41MTQtMTMwLjYxMiwxMzAuNjEyLTEzMC42MTJzMTMwLjYxMiw1OC41MTQsMTMwLjYxMiwxMzAuNjEyUzIzNC4wNTcsMzkxLjgzNywxNjEuOTU5LDM5MS44Mzd6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />                            @break
                                                            @case('F')
                                                                <img width="20px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0Q2M0Q3NjsiIGQ9Ik0zMTguODQxLDQwMi44MDFoLTMwLjkwNXY0Ni4zNThoMzAuOTA1YzEyLjgwMSwwLDIzLjE3OS0xMC4zNzgsMjMuMTc5LTIzLjE3OQ0KCVMzMzEuNjQyLDQwMi44MDEsMzE4Ljg0MSw0MDIuODAxeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZGNDE4MTsiIGQ9Ik00MjUuOTgsMTY5Ljk4QzQyNS45OCw3Ni4xMDMsMzQ5Ljg3NywwLDI1NiwwUzg2LjAyLDc2LjEwMyw4Ni4wMiwxNjkuOTgNCgljMCw4Ni4wMTQsNjMuODkxLDE1Ny4wOTMsMTQ2LjgwMSwxNjguNDAxdjY0LjQyaC0zOS42NjJjLTEyLjgwMSwwLTIzLjE3OSwxMC4zNzgtMjMuMTc5LDIzLjE3OXMxMC4zNzgsMjMuMTc5LDIzLjE3OSwyMy4xNzloMzkuNjYyDQoJdjM5LjY2MkMyMzIuODIxLDUwMS42MjIsMjQzLjE5OSw1MTIsMjU2LDUxMmMxMi44MDEsMCwyMy4xNzktMTAuMzc4LDIzLjE3OS0yMy4xNzl2LTM5LjY2Mmg4Ljc1Nw0KCWMxMi44MDEsMCwyMy4xNzktMTAuMzc4LDIzLjE3OS0yMy4xNzlzLTEwLjM3OC0yMy4xNzktMjMuMTc5LTIzLjE3OWgtOC43NTd2LTY0LjQyQzM2Mi4wODksMzI3LjA3Myw0MjUuOTgsMjU1Ljk5NCw0MjUuOTgsMTY5Ljk4eg0KCSBNMjU2LDI5My42MDJjLTY4LjI3NCwwLTEyMy42MjItNTUuMzQ4LTEyMy42MjItMTIzLjYyMlMxODcuNzI2LDQ2LjM1OCwyNTYsNDYuMzU4czEyMy42MjIsNTUuMzQ4LDEyMy42MjIsMTIzLjYyMg0KCVMzMjQuMjc0LDI5My42MDIsMjU2LDI5My42MDJ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />                            @break
                                                            @default
                                    
                                                        @endswitch
                                                    </td>
                                                
                                                    <td>
                                                        {{$usuario->EmailSena}}
                                                    </td>
                                                    
                                                    <td>
                                                  
                                                        @switch($usuario->Estado)
                                                            @case('Activo')
                                                                <a href="{{    url('usuarios/habilitar/'.$usuario->IdUsuario)    }}" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-ok"></span> Activo</a>
                                                                @break
                                                            @case('Inactivo')
                                                                <a href="{{    url('usuarios/habilitar/'.$usuario->IdUsuario)    }}" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> Inactivo</a>
                                                                @break
                                                            @default
                                                                <a href="{{    url('usuarios/habilitar/'.$usuario->IdUsuario)    }}" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-question-sign"></span> Sin estado</a>
                                                        @endswitch
                                                    </td>
                                                    <td>
                                                        @foreach ($usuario->rol()->get() as $rol)
                                                            {{$rol->tipoRol}}
                                                        @endforeach
                                                    </td>
                                    
                                                    <td>
                                                        <form action="{{url('usuarios/'.$usuario->IdUsuario)}}">
                                                        <button style="border: none;"><i style="color: orange;" class="fas fa-eye"></i></button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="{{url('usuarios/'.$usuario->IdUsuario.'/edit')}}">
                                                        <button style="border: none;"><i style="color: orange;" class="fas fa-edit"></i></button>
                                                         </form>
                                                    </td>
													<td>
													<form method="post" action="{{url('usuarios/'.$usuario->IdUsuario)}}">
														@method('DELETE')
														@csrf
														<button style="border:none;"><i style="color:orange;" class="far fa-trash-alt"></i></button>
													</form>
													</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr
											style="
                                            background:#ffb880;
											aling-text:center;
                                            color:white;
											"
											>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Genero</th>
                                                <th>Email-Sena</th>
                                                <th>Estado</th>
                                                <th>Rol</th>
                                                <th>Ver</th>
                                                <th>Editar</th>
												<th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
									
                                    <button type="button" class="btn btn-primary"><a style=" color: white; margin:6rem;"  href="{{url('usuarios/create')}}">+ Usuario</a></button>
                                    <button type="button" class="btn btn-primary"><a style=" color: white; margin:6rem;" href="{{url('aprendices/create')}}">+ Aprendiz</a></button>
                                </div>
                                {{$usuarios->links()}}
                               @if (session('msg') != null)
                                {{session("msg")}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== --> 
        <!--  -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assetsAdm/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assetsAdm/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assetsAdm/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="./assetsAdm/dist/js/app-style-switcher.js"></script>
    <script src="./assetsAdm/dist/js/feather.min.js"></script>
    <script src="./assetsAdm/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./assetsAdm/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./assetsAdm/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="./assetsAdm/assets/extra-libs/c3/d3.min.js"></script>
    <script src="./assetsAdm/assets/extra-libs/c3/c3.min.js"></script>
    <script src="./assetsAdm/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="./assetsAdm/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="./assetsAdm/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="./assetsAdm/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="./assetsAdm/dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="menu.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap');
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Montserrat Alternates', sans-serif;
	}
	body{
		background: url(https://www.xtrafondos.com/wallpapers/montanas-con-nieve-en-el-bosque-3934.jpg);
		background-size: 100vw 100vh;
		background-repeat: no-repeat;
	}
	.capa{
		position: fixed;
		width: 100%;
		height: 100vh;
		background: rgba(0,0,0,0.6);
		z-index: -1;
		top: 0;left: 0;
	}
	.header{
		width: 100%;
		height: 100px;
		position: fixed;
		top: 0;left: 0;
	}
	.container{
		width: 90%;
		max-width: 1200px;
		margin: auto;
	}
	.container .btn-menu, .logo{
		float: left;
		line-height:100px;
	}
	.container .btn-menu label{
		color: #fff;
		font-size: 25px;
		cursor: pointer;
	}
	 h1{
		color: black;
		font-weight: 400;
		font-size: 40px;
		margin-left: 10px;
	}
	.container .menu{
		float: right;
		line-height: 100px;
	}
	.container .menu a{
		display: inline-block;
		padding: 15px;
		line-height: normal;
		text-decoration: none;
		color: #fff;
		transition: all 0.3s ease;
		border-bottom: 2px solid transparent;
		font-size: 15px;
		margin-right: 5px;
	}
	.container .menu a:hover{
		border-bottom: 2px solid #c7c7c7;
		padding-bottom: 5px;
	}
	
	#btn-menu{
		display: none;
	}
	.container-menu{
		position: absolute;
		background: rgba(0,0,0,0.5);
		width: 100%;
		height: 100vh;
		top: 0;left: 0;
		transition: all 500ms ease;
		opacity: 0;
		visibility: hidden;
	}
	#btn-menu:checked ~ .container-menu{
		opacity: 1;
		visibility: visible;
	}
	.cont-menu{
		width: 100%;
		max-width: 250px;
		background: #1c1c1c;
		height: 100vh;
		position: relative;
		transition: all 500ms ease;
		transform: translateX(-100%);
	}
	#btn-menu:checked ~ .container-menu .cont-menu{
		transform: translateX(0%);
	}
	.cont-menu nav{
		transform: translateY(15%);
	}
	.cont-menu nav a{
		display: block;
		text-decoration: none;
		padding: 20px;
		color: #c7c7c7;
		border-left: 5px solid transparent;
		transition: all 400ms ease;
	}
	.cont-menu nav a:hover{
		border-left: 5px solid #c7c7c7;
		background: #1f1f1f;
	}
	.cont-menu label{
		position: absolute;
		right: 5px;
		top: 10px;
		color: #fff;
		cursor: pointer;
		font-size: 18px;
	}
</style>
    <title>Usuarios</title>
</head>
<body>


<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>


<div class="container p-3 my-3 bg-white text-white">
<center><h1>Lista Usuarios</h1></center>
<button type="button" class="btn btn-primary"><a style=" color: white;" href="{{url('usuarios/create')}}">+ Usuario</a></button>
<button type="button" class="btn btn-primary"><a style=" color: white;" href="{{url('aprendices/create')}}">+ Aprendiz</a></button>
<table class="table table-striped">
    <thead >
        <th>Nombres</th>
        <th>Apellido</th>
        <th>Genero</th>
        <th>Email Sena</th>
        <th>Estado</th>
        <th>Rol</th>
        <th>Ver</th>
        <th>Editar</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
              
                <td style="padding-right:20px;">
                   {{$usuario->Nombre}}
                </td>
                <td>
                    {{$usuario->Apellido}}
                </td>
            
                <td>
             
                    @switch($usuario->Genero)
                        @case('M')
                            <img width="18px"  src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDIzLjE4NCA0MjMuMTg0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MjMuMTg0IDQyMy4xODQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiMwMEJCRDM7IiBkPSJNNDA3LjUxLDBIMjY2Ljk3MWMtOC44ODIsMC0xNS42NzMsNi43OTItMTUuNjczLDE1LjY3M3M2Ljc5MiwxNS42NzMsMTUuNjczLDE1LjY3M2gxMDIuOTIyDQoJTDI2NC44ODIsMTM2LjM1OWMtMjguMjEyLTIyLjk4OC02My43MzktMzcuMDk0LTEwMi45MjItMzcuMDk0QzcyLjYyLDk5LjI2NSwwLDE3MS44ODYsMCwyNjEuMjI0czcyLjYyLDE2MS45NTksMTYxLjk1OSwxNjEuOTU5DQoJczE2MS45NTktNzIuNjIsMTYxLjk1OS0xNjEuOTU5YzAtMzkuMTg0LTE0LjEwNi03NC43MS0zNy4wOTQtMTAyLjkyMkwzOTEuODM3LDUzLjI5djEwMi45MjJjMCw4Ljg4Miw2Ljc5MiwxNS42NzMsMTUuNjczLDE1LjY3Mw0KCXMxNS42NzMtNi43OTIsMTUuNjczLTE1LjY3M1YxNS42NzNDNDIzLjE4NCw2Ljc5Miw0MTYuMzkyLDAsNDA3LjUxLDB6IE0xNjEuOTU5LDM5MS44MzdjLTcyLjA5OCwwLTEzMC42MTItNTguNTE0LTEzMC42MTItMTMwLjYxMg0KCXM1OC41MTQtMTMwLjYxMiwxMzAuNjEyLTEzMC42MTJzMTMwLjYxMiw1OC41MTQsMTMwLjYxMiwxMzAuNjEyUzIzNC4wNTcsMzkxLjgzNywxNjEuOTU5LDM5MS44Mzd6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />                            @break
                        @case('F')
                            <img width="20px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0Q2M0Q3NjsiIGQ9Ik0zMTguODQxLDQwMi44MDFoLTMwLjkwNXY0Ni4zNThoMzAuOTA1YzEyLjgwMSwwLDIzLjE3OS0xMC4zNzgsMjMuMTc5LTIzLjE3OQ0KCVMzMzEuNjQyLDQwMi44MDEsMzE4Ljg0MSw0MDIuODAxeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZGNDE4MTsiIGQ9Ik00MjUuOTgsMTY5Ljk4QzQyNS45OCw3Ni4xMDMsMzQ5Ljg3NywwLDI1NiwwUzg2LjAyLDc2LjEwMyw4Ni4wMiwxNjkuOTgNCgljMCw4Ni4wMTQsNjMuODkxLDE1Ny4wOTMsMTQ2LjgwMSwxNjguNDAxdjY0LjQyaC0zOS42NjJjLTEyLjgwMSwwLTIzLjE3OSwxMC4zNzgtMjMuMTc5LDIzLjE3OXMxMC4zNzgsMjMuMTc5LDIzLjE3OSwyMy4xNzloMzkuNjYyDQoJdjM5LjY2MkMyMzIuODIxLDUwMS42MjIsMjQzLjE5OSw1MTIsMjU2LDUxMmMxMi44MDEsMCwyMy4xNzktMTAuMzc4LDIzLjE3OS0yMy4xNzl2LTM5LjY2Mmg4Ljc1Nw0KCWMxMi44MDEsMCwyMy4xNzktMTAuMzc4LDIzLjE3OS0yMy4xNzlzLTEwLjM3OC0yMy4xNzktMjMuMTc5LTIzLjE3OWgtOC43NTd2LTY0LjQyQzM2Mi4wODksMzI3LjA3Myw0MjUuOTgsMjU1Ljk5NCw0MjUuOTgsMTY5Ljk4eg0KCSBNMjU2LDI5My42MDJjLTY4LjI3NCwwLTEyMy42MjItNTUuMzQ4LTEyMy42MjItMTIzLjYyMlMxODcuNzI2LDQ2LjM1OCwyNTYsNDYuMzU4czEyMy42MjIsNTUuMzQ4LDEyMy42MjIsMTIzLjYyMg0KCVMzMjQuMjc0LDI5My42MDIsMjU2LDI5My42MDJ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />                            @break
                        @default

                    @endswitch
                </td>
                
                <td>
                    {{$usuario->EmailSena}}
                </td>
               
                <td>
                    
                    @switch($usuario->Estado)
                        @case('Activo')
                            <a href="{{    url('usuarios/habilitar/'.$usuario->IdUsuario)    }}" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-ok"></span> Activo</a>
                            @break
                        @case('Inactivo')
                            <a href="{{    url('usuarios/habilitar/'.$usuario->IdUsuario)    }}" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> Inactivo</a>
                            @break
                        @default
                            <a href="{{    url('usuarios/habilitar/'.$usuario->IdUsuario)    }}" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-question-sign"></span> Sin estado</a>
                    @endswitch
                </td>
                <td>
                    @foreach ($usuario->rol()->get() as $rol)
                        {{$rol->tipoRol}}
                    @endforeach
                </td>

                <td>
                    <form action="{{url('usuarios/'.$usuario->IdUsuario)}}">
					<button style="border: none;"><i style="color: orange;" class="fas fa-eye"></i></button>
                    </form>
                </td>
                <td>
                    <form action="{{url('usuarios/'.$usuario->IdUsuario.'/edit')}}">
					<button style="border: none;"><i style="color: orange;" class="fas fa-edit"></i></button>
                     </form>
                </td>
                <td>
                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
{{$usuarios->links()}}

@if (session('msg') != null)
    {{session("msg")}}
@endif

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



		</div>
	</header>
	<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="{{ url('usuarios') }}">Usuarios</a>
			<a href="{{ url('aprendices') }}">Aprendices</a>
			<a href="{{ url('fichas') }}">Fichas</a>
			<a href="{{ url('centros') }}">Centros</a>
			<a href="{{ url('entregables') }}">Entregables</a>
			<a href="{{ url('instructores') }}">instructores</a>
            <a href="{{ url('programas') }}">programas</a>
            <a href="{{ url('reunionAprendiz') }}">Reuniones</a>
            <a href="{{ url('Landing') }}">Landing</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

</body>
</html>




 -->
