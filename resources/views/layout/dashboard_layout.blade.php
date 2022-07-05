
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elodis</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <
    <!-- Styles -->
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="/">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>Elodis</span></a></div>
                  
                    <li><a href="/" class="sidebar-sub-toggle"><i class="ti-home"></i> Tableau de bord</a></li>

                    <li class="label">Menu</li>
                    
                    <li><a href="/liste_apprenant"><i class="ti-user"></i> Gestion des apprenants </a></li>
                    <li><a href="/liste_formateur"><i class="ti-user"></i> gestion des formateurs</a></li>
                    <li><a href="/liste_formation"><i class="ti-cup"></i> gestion des formations</a></li>
                    <li><a href="/liste_module"><i class="ti-star"></i> gestion des modules</a></li>
                    <li><a href="#"><i class="ti-layout-tab-window"></i> gestion des sessions</a></li>

                   
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>


                    <div class="float-right">    
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{session()->get('nom_user')}}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Deconnexion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="content-wrap">
    @yield('content')
    </div>

<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->

<script src="assets/js/lib/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- bootstrap -->

<script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
<script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="assets/js/lib/calendar-2/pignose.init.js"></script>


<script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="assets/js/lib/weather/weather-init.js"></script>
<script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
<script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
<script src="assets/js/lib/chartist/chartist.min.js"></script>
<script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
<script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- scripit init-->
<script src="assets/js/dashboard2.js"></script>
</body>

</html>
