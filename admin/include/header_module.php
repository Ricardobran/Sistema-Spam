
<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="logo-area">
                        <a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
                    </div>        
                </div>
                <?php 
session_start();
    if (strlen($_SESSION['bsspa']!=0)) {

?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                    <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                    <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                        <div class="hd-mg-tt">
                            <h2>Usuario</h2>
                        </div>
                        <hr>
                        <div class="hd-message-info hd-task-info">
                            <div class="lead-content">
                                <p><a href="logout.php">Cerrar Sesión</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
        </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
<?php 
session_start();
    if (strlen($_SESSION['bsspa']!=0)) {

?>

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="index.php">Home</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#"><i class="notika-icon notika-house"></i>Páginas</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                       <li><a href="contact.php">Contacto</a>
                                </li>
                                <li><a href="about-us.php">Acerca de</a>
                                </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#"><i class="notika-icon notika-app"></i> Servicios</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="list_services.php">Servicios Ofertados</a>
                                </li>
                                <li><a href="add_service.php">Añadir Servicio</a>
                                </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#"><i class="notika-icon notika-edit"></i> Citas</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                         <li><a href="list_appointments.php">Todas las citas</a>
                                </li>
                                <li><a href="pending_appointments.php">Aceptar cita</a>
                                </li>
                                <li><a href="accepted_appointments.php">Citas aceptadas</a>
                                </li>
                                <li><a href="rejected_appointments.php">Citas rechazadas</a>
                                </li>
                                <li><a href="search_appointment.php">Buscar citas</a>
                                </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#"><i class="notika-icon notika-bar-chart"></i> Clientes</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="customer-list.php">Lista de clientes</a>
                                </li>
                                <li><a href="add-customer.php">Agregar cliente</a>
                                </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#"><i class="notika-icon notika-form"></i> Reportes</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="report_bills.php">Facturas por fecha</a>
                                </li>
                                <li><a href="report_sales.php">Reporte de ventas</a>
                                </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#"><i class="notika-icon notika-windows"></i> Facturas</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="invoices.php">Listado de facturas</a>
                                </li>
                                <li><a href="search-invoices.php">Buscar facturas</a>
                                </li>
                                    </ul>
                                </li>                                                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li ><a href="index.php"><i class="notika-icon notika-house"></i>Home</a>
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i>Páginas</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-app"></i> Servicios</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Citas</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Clientes</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Reportes</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Facturas</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.php">Contacto</a>
                                </li>
                                <li><a href="about-us.php">Acerca de</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="list_services.php">Servicios Ofertados</a>
                                </li>
                                <li><a href="add_service.php">Añadir Servicio</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="list_appointments.php">Todas las citas</a>
                                </li>
                                <li><a href="pending_appointments.php">Aceptar cita</a>
                                </li>
                                <li><a href="accepted_appointments.php">Citas aceptadas</a>
                                </li>
                                <li><a href="rejected_appointments.php">Citas rechazadas</a>
                                </li>
                                <li><a href="search_appointment.php">Buscar citas</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="customer-list.php">Lista de clientes</a>
                                </li>
                                <li><a href="add-customer.php">Agregar cliente</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="report_bills.php">Facturas por fecha</a>
                                </li>
                                <li><a href="report_sales.php">Reporte de ventas</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="invoices.php">Listado de facturas</a>
                                </li>
                                <li><a href="search-invoices.php">Buscar facturas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
