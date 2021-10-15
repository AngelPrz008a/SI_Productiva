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
    <title>Productiva - Aprendices</title>
    <!-- Custom CSS -->
    <link href="./assetsAdm/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="./assetsAdm/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
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
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)" id="bell" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span class="font-12 text-nowrap d-block text-muted">Just
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <select class="custom-select form-control bg-white custom-radius custom-shadow border-0">
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
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="./assetsAdm/assets/images/usuarioN.png" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">Usuario</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card" class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail" class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
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
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('instructores')}}" aria-expanded="false"><i class="fas fa-user-tie"></i><span class="hide-menu">Instructores</span></a>
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
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h1 class="card-title">Aprendices</h1>
                                </center>

                                <div class="container p-3 my-3 bg-white text-white">



                                    <button type="button" class="btn btn-primary"><a style="color:white;" href="{{url('aprendices/create')}}">+ Aprendiz</a></button>
                                    <table class="table table-striped">
                                        <thead style="
                                        background:#ffb880;
                                        color:white;    
                                        ">
                                            <th>Usuario</th>
                                            <th>Ficha</th>
                                            <th>Empresa</th>
                                            <th>Ver</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($aprendices as $aprendiz)
                                            <tr>
                                                <td>
                                                    @foreach ($aprendiz->usuarios()->get() as $usuario)
                                                    {{$usuario->Nombre}}
                                                    {{$usuario->Apellido}}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($aprendiz->fichas()->get() as $ficha)
                                                    {{$ficha->NumeroFicha}}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{$aprendiz->id_empresa}}
                                                </td>
                                                <td>
                                                    <form action="{{url('aprendices/'.$aprendiz->id)}}">
                                                        <button class="btn btn-inverse"><img width="20px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguMTc3LDI0NS45OTVDNTAzLjYwNywyNDAuODk3LDM5My42ODIsMTIxLDI1NiwxMjFTOC4zOTQsMjQwLjg5NywzLjgyMywyNDUuOTk1Yy01LjA5OCw1LjY5OC01LjA5OCwxNC4zMTIsMCwyMC4wMQ0KCQkJQzguMzk0LDI3MS4xMDMsMTE4LjMyLDM5MSwyNTYsMzkxczI0Ny42MDYtMTE5Ljg5NywyNTIuMTc3LTEyNC45OTVDNTEzLjI3NCwyNjAuMzA3LDUxMy4yNzQsMjUxLjY5Myw1MDguMTc3LDI0NS45OTV6IE0yNTYsMzYxDQoJCQljLTU3Ljg5MSwwLTEwNS00Ny4xMDktMTA1LTEwNXM0Ny4xMDktMTA1LDEwNS0xMDVzMTA1LDQ3LjEwOSwxMDUsMTA1UzMxMy44OTEsMzYxLDI1NiwzNjF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNzEsMjI2YzAtMTUuMDksNy40OTEtMjguMzY1LDE4Ljg4Ny0zNi41M0MyNzkuNjYxLDE4NC4yMzUsMjY4LjI1NSwxODEsMjU2LDE4MWMtNDEuMzUzLDAtNzUsMzMuNjQ3LTc1LDc1DQoJCQljMCw0MS4zNTMsMzMuNjQ3LDc1LDc1LDc1YzM3LjAyNCwwLDY3LjY2OC0yNy4wMzQsNzMuNzIyLTYyLjM1OEMyOTkuNTE2LDI3OC4zNjcsMjcxLDI1NS41MjIsMjcxLDIyNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" /></button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{url('aprendices/'.$aprendiz->id.'/edit')}}">
                                                        <button class="btn btn-inverse"><img width="20px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMSIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im00MDUuMzMyMDMxIDI1Ni40ODQzNzVjLTExLjc5Njg3NSAwLTIxLjMzMjAzMSA5LjU1ODU5NC0yMS4zMzIwMzEgMjEuMzMyMDMxdjE3MC42Njc5NjljMCAxMS43NTM5MDYtOS41NTg1OTQgMjEuMzMyMDMxLTIxLjMzMjAzMSAyMS4zMzIwMzFoLTI5OC42Njc5NjljLTExLjc3NzM0NCAwLTIxLjMzMjAzMS05LjU3ODEyNS0yMS4zMzIwMzEtMjEuMzMyMDMxdi0yOTguNjY3OTY5YzAtMTEuNzUzOTA2IDkuNTU0Njg3LTIxLjMzMjAzMSAyMS4zMzIwMzEtMjEuMzMyMDMxaDE3MC42Njc5NjljMTEuNzk2ODc1IDAgMjEuMzMyMDMxLTkuNTU4NTk0IDIxLjMzMjAzMS0yMS4zMzIwMzEgMC0xMS43NzczNDQtOS41MzUxNTYtMjEuMzM1OTM4LTIxLjMzMjAzMS0yMS4zMzU5MzhoLTE3MC42Njc5NjljLTM1LjI4NTE1NiAwLTY0IDI4LjcxNDg0NC02NCA2NHYyOTguNjY3OTY5YzAgMzUuMjg1MTU2IDI4LjcxNDg0NCA2NCA2NCA2NGgyOTguNjY3OTY5YzM1LjI4NTE1NiAwIDY0LTI4LjcxNDg0NCA2NC02NHYtMTcwLjY2Nzk2OWMwLTExLjc5Njg3NS05LjUzOTA2My0yMS4zMzIwMzEtMjEuMzM1OTM4LTIxLjMzMjAzMXptMCAwIi8+PHBhdGggZD0ibTIwMC4wMTk1MzEgMjM3LjA1MDc4MWMtMS40OTIxODcgMS40OTIxODgtMi40OTYwOTMgMy4zOTA2MjUtMi45MjE4NzUgNS40Mzc1bC0xNS4wODIwMzEgNzUuNDM3NWMtLjcwMzEyNSAzLjQ5NjA5NC40MDYyNSA3LjEwMTU2MyAyLjkyMTg3NSA5LjY0MDYyNSAyLjAyNzM0NCAyLjAyNzM0NCA0Ljc1NzgxMiAzLjExMzI4MiA3LjU1NDY4OCAzLjExMzI4Mi42Nzk2ODcgMCAxLjM4NjcxOC0uMDYyNSAyLjA4OTg0My0uMjEwOTM4bDc1LjQxNDA2My0xNS4wODIwMzFjMi4wODk4NDQtLjQyOTY4OCAzLjk4ODI4MS0xLjQyOTY4OCA1LjQ2MDkzNy0yLjkyNTc4MWwxNjguNzg5MDYzLTE2OC43ODkwNjMtNzUuNDE0MDYzLTc1LjQxMDE1NnptMCAwIi8+PHBhdGggZD0ibTQ5Ni4zODI4MTIgMTYuMTAxNTYyYy0yMC43OTY4NzQtMjAuODAwNzgxLTU0LjYzMjgxMi0yMC44MDA3ODEtNzUuNDE0MDYyIDBsLTI5LjUyMzQzOCAyOS41MjM0MzggNzUuNDE0MDYzIDc1LjQxNDA2MiAyOS41MjM0MzctMjkuNTI3MzQzYzEwLjA3MDMxMy0xMC4wNDY4NzUgMTUuNjE3MTg4LTIzLjQ0NTMxMyAxNS42MTcxODgtMzcuNjk1MzEzcy01LjU0Njg3NS0yNy42NDg0MzctMTUuNjE3MTg4LTM3LjcxNDg0NHptMCAwIi8+PC9zdmc+" /></button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="post" action="{{url('aprendices/'.$aprendiz->id)}}">
                                                        @method('DELETE')
                                                        @csrf

                                                        <button class="btn btn-dangel"><img width="20px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnPjxwYXRoIGQ9Im00MjQgNjRoLTg4di0xNmMwLTI2LjUxLTIxLjQ5LTQ4LTQ4LTQ4aC02NGMtMjYuNTEgMC00OCAyMS40OS00OCA0OHYxNmgtODhjLTIyLjA5MSAwLTQwIDE3LjkwOS00MCA0MHYzMmMwIDguODM3IDcuMTYzIDE2IDE2IDE2aDM4NGM4LjgzNyAwIDE2LTcuMTYzIDE2LTE2di0zMmMwLTIyLjA5MS0xNy45MDktNDAtNDAtNDB6bS0yMTYtMTZjMC04LjgyIDcuMTgtMTYgMTYtMTZoNjRjOC44MiAwIDE2IDcuMTggMTYgMTZ2MTZoLTk2eiIvPjxwYXRoIGQ9Im03OC4zNjQgMTg0Yy0yLjg1NSAwLTUuMTMgMi4zODYtNC45OTQgNS4yMzhsMTMuMiAyNzcuMDQyYzEuMjIgMjUuNjQgMjIuMjggNDUuNzIgNDcuOTQgNDUuNzJoMjQyLjk4YzI1LjY2IDAgNDYuNzItMjAuMDggNDcuOTQtNDUuNzJsMTMuMi0yNzcuMDQyYy4xMzYtMi44NTItMi4xMzktNS4yMzgtNC45OTQtNS4yMzh6bTI0MS42MzYgNDBjMC04Ljg0IDcuMTYtMTYgMTYtMTZzMTYgNy4xNiAxNiAxNnYyMDhjMCA4Ljg0LTcuMTYgMTYtMTYgMTZzLTE2LTcuMTYtMTYtMTZ6bS04MCAwYzAtOC44NCA3LjE2LTE2IDE2LTE2czE2IDcuMTYgMTYgMTZ2MjA4YzAgOC44NC03LjE2IDE2LTE2IDE2cy0xNi03LjE2LTE2LTE2em0tODAgMGMwLTguODQgNy4xNi0xNiAxNi0xNnMxNiA3LjE2IDE2IDE2djIwOGMwIDguODQtNy4xNiAxNi0xNiAxNnMtMTYtNy4xNi0xNi0xNnoiLz48L2c+PC9zdmc+" /></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$aprendices->links()}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

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

    <title>Usuarios</title>
</head>
<body>


<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>



<div class ="container p-3 my-3 bg-white text-white">

<center><h1>Lista Aprendices</h1></center>

    <button type="button" class="btn btn-primary"><a style="color:white;" href="{{url('aprendices/create')}}">+ Aprendiz</a></button>
<table class="table table-striped">
    <thead>
        <th>Usuario</th>
        <th>Ficha</th>
        <th>Empresa</th>
        <th>Ver</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        @foreach ($aprendices as $aprendiz)
            <tr>
                <td>
                    @foreach ($aprendiz->usuarios()->get() as $usuario)
                        {{$usuario->Nombre}}
                        {{$usuario->Apellido}}
                    @endforeach
                </td>
                <td>
                    @foreach ($aprendiz->fichas()->get() as $ficha)
                        {{$ficha->NumeroFicha}}
                    @endforeach
                </td>
                <td>
                    {{$aprendiz->id_empresa}}
                </td>
                <td>
                    <form action="{{url('aprendices/'.$aprendiz->id)}}">
                        <button class="btn btn-inverse"><img width="20px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguMTc3LDI0NS45OTVDNTAzLjYwNywyNDAuODk3LDM5My42ODIsMTIxLDI1NiwxMjFTOC4zOTQsMjQwLjg5NywzLjgyMywyNDUuOTk1Yy01LjA5OCw1LjY5OC01LjA5OCwxNC4zMTIsMCwyMC4wMQ0KCQkJQzguMzk0LDI3MS4xMDMsMTE4LjMyLDM5MSwyNTYsMzkxczI0Ny42MDYtMTE5Ljg5NywyNTIuMTc3LTEyNC45OTVDNTEzLjI3NCwyNjAuMzA3LDUxMy4yNzQsMjUxLjY5Myw1MDguMTc3LDI0NS45OTV6IE0yNTYsMzYxDQoJCQljLTU3Ljg5MSwwLTEwNS00Ny4xMDktMTA1LTEwNXM0Ny4xMDktMTA1LDEwNS0xMDVzMTA1LDQ3LjEwOSwxMDUsMTA1UzMxMy44OTEsMzYxLDI1NiwzNjF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNzEsMjI2YzAtMTUuMDksNy40OTEtMjguMzY1LDE4Ljg4Ny0zNi41M0MyNzkuNjYxLDE4NC4yMzUsMjY4LjI1NSwxODEsMjU2LDE4MWMtNDEuMzUzLDAtNzUsMzMuNjQ3LTc1LDc1DQoJCQljMCw0MS4zNTMsMzMuNjQ3LDc1LDc1LDc1YzM3LjAyNCwwLDY3LjY2OC0yNy4wMzQsNzMuNzIyLTYyLjM1OEMyOTkuNTE2LDI3OC4zNjcsMjcxLDI1NS41MjIsMjcxLDIyNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" /></button>
                    </form>
                </td>
                <td>
                    <form action="{{url('aprendices/'.$aprendiz->id.'/edit')}}">
                        <button class="btn btn-inverse"><img width="20px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMSIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im00MDUuMzMyMDMxIDI1Ni40ODQzNzVjLTExLjc5Njg3NSAwLTIxLjMzMjAzMSA5LjU1ODU5NC0yMS4zMzIwMzEgMjEuMzMyMDMxdjE3MC42Njc5NjljMCAxMS43NTM5MDYtOS41NTg1OTQgMjEuMzMyMDMxLTIxLjMzMjAzMSAyMS4zMzIwMzFoLTI5OC42Njc5NjljLTExLjc3NzM0NCAwLTIxLjMzMjAzMS05LjU3ODEyNS0yMS4zMzIwMzEtMjEuMzMyMDMxdi0yOTguNjY3OTY5YzAtMTEuNzUzOTA2IDkuNTU0Njg3LTIxLjMzMjAzMSAyMS4zMzIwMzEtMjEuMzMyMDMxaDE3MC42Njc5NjljMTEuNzk2ODc1IDAgMjEuMzMyMDMxLTkuNTU4NTk0IDIxLjMzMjAzMS0yMS4zMzIwMzEgMC0xMS43NzczNDQtOS41MzUxNTYtMjEuMzM1OTM4LTIxLjMzMjAzMS0yMS4zMzU5MzhoLTE3MC42Njc5NjljLTM1LjI4NTE1NiAwLTY0IDI4LjcxNDg0NC02NCA2NHYyOTguNjY3OTY5YzAgMzUuMjg1MTU2IDI4LjcxNDg0NCA2NCA2NCA2NGgyOTguNjY3OTY5YzM1LjI4NTE1NiAwIDY0LTI4LjcxNDg0NCA2NC02NHYtMTcwLjY2Nzk2OWMwLTExLjc5Njg3NS05LjUzOTA2My0yMS4zMzIwMzEtMjEuMzM1OTM4LTIxLjMzMjAzMXptMCAwIi8+PHBhdGggZD0ibTIwMC4wMTk1MzEgMjM3LjA1MDc4MWMtMS40OTIxODcgMS40OTIxODgtMi40OTYwOTMgMy4zOTA2MjUtMi45MjE4NzUgNS40Mzc1bC0xNS4wODIwMzEgNzUuNDM3NWMtLjcwMzEyNSAzLjQ5NjA5NC40MDYyNSA3LjEwMTU2MyAyLjkyMTg3NSA5LjY0MDYyNSAyLjAyNzM0NCAyLjAyNzM0NCA0Ljc1NzgxMiAzLjExMzI4MiA3LjU1NDY4OCAzLjExMzI4Mi42Nzk2ODcgMCAxLjM4NjcxOC0uMDYyNSAyLjA4OTg0My0uMjEwOTM4bDc1LjQxNDA2My0xNS4wODIwMzFjMi4wODk4NDQtLjQyOTY4OCAzLjk4ODI4MS0xLjQyOTY4OCA1LjQ2MDkzNy0yLjkyNTc4MWwxNjguNzg5MDYzLTE2OC43ODkwNjMtNzUuNDE0MDYzLTc1LjQxMDE1NnptMCAwIi8+PHBhdGggZD0ibTQ5Ni4zODI4MTIgMTYuMTAxNTYyYy0yMC43OTY4NzQtMjAuODAwNzgxLTU0LjYzMjgxMi0yMC44MDA3ODEtNzUuNDE0MDYyIDBsLTI5LjUyMzQzOCAyOS41MjM0MzggNzUuNDE0MDYzIDc1LjQxNDA2MiAyOS41MjM0MzctMjkuNTI3MzQzYzEwLjA3MDMxMy0xMC4wNDY4NzUgMTUuNjE3MTg4LTIzLjQ0NTMxMyAxNS42MTcxODgtMzcuNjk1MzEzcy01LjU0Njg3NS0yNy42NDg0MzctMTUuNjE3MTg4LTM3LjcxNDg0NHptMCAwIi8+PC9zdmc+" /></button>
                     </form>
                </td>
                <td>
                    <form method="post" action="{{url('aprendices/'.$aprendiz->id)}}">
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-dangel"><img width="20px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnPjxwYXRoIGQ9Im00MjQgNjRoLTg4di0xNmMwLTI2LjUxLTIxLjQ5LTQ4LTQ4LTQ4aC02NGMtMjYuNTEgMC00OCAyMS40OS00OCA0OHYxNmgtODhjLTIyLjA5MSAwLTQwIDE3LjkwOS00MCA0MHYzMmMwIDguODM3IDcuMTYzIDE2IDE2IDE2aDM4NGM4LjgzNyAwIDE2LTcuMTYzIDE2LTE2di0zMmMwLTIyLjA5MS0xNy45MDktNDAtNDAtNDB6bS0yMTYtMTZjMC04LjgyIDcuMTgtMTYgMTYtMTZoNjRjOC44MiAwIDE2IDcuMTggMTYgMTZ2MTZoLTk2eiIvPjxwYXRoIGQ9Im03OC4zNjQgMTg0Yy0yLjg1NSAwLTUuMTMgMi4zODYtNC45OTQgNS4yMzhsMTMuMiAyNzcuMDQyYzEuMjIgMjUuNjQgMjIuMjggNDUuNzIgNDcuOTQgNDUuNzJoMjQyLjk4YzI1LjY2IDAgNDYuNzItMjAuMDggNDcuOTQtNDUuNzJsMTMuMi0yNzcuMDQyYy4xMzYtMi44NTItMi4xMzktNS4yMzgtNC45OTQtNS4yMzh6bTI0MS42MzYgNDBjMC04Ljg0IDcuMTYtMTYgMTYtMTZzMTYgNy4xNiAxNiAxNnYyMDhjMCA4Ljg0LTcuMTYgMTYtMTYgMTZzLTE2LTcuMTYtMTYtMTZ6bS04MCAwYzAtOC44NCA3LjE2LTE2IDE2LTE2czE2IDcuMTYgMTYgMTZ2MjA4YzAgOC44NC03LjE2IDE2LTE2IDE2cy0xNi03LjE2LTE2LTE2em0tODAgMGMwLTguODQgNy4xNi0xNiAxNi0xNnMxNiA3LjE2IDE2IDE2djIwOGMwIDguODQtNy4xNiAxNi0xNiAxNnMtMTYtNy4xNi0xNi0xNnoiLz48L2c+PC9zdmc+" /></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$aprendices->links()}}
</div>


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