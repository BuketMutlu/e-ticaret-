<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Buket Dünyası Admin Panel</title>
	<meta name="description" content="Snoopy is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Snoopy Admin, Snoopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">


	<!-- Toast CSS -->

	<!-- bootstrap-select CSS -->

	<!-- Calendar CSS -->
	<link href="{{asset('../vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="{{asset('distt/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper  theme-1-active pimary-color-blue">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="index.html">

                        <img class="brand-img" src="{{asset('assets/images/logo.jpg')}}" width="40px" height="40px" style="border-radius: 50px;" alt="Buket Dünyası"/>
                        <span class="brand-text" style="color: white">Buket Dünyası</span>
                    </a>
                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>

        </div>
        </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">



        <li>


            <a href="{{route('admin.urun')}}" data-toggle="collapse" data-target="#eom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Ürünler</span></div><div class="pull-right"></div><div class="clearfix"></div></a>


        </li>
        <li>


            <a href="{{route('admin.urunekle')}}" data-toggle="collapse" data-target="#eom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Ürün Ekle</span></div><div class="pull-right"></div><div class="clearfix"></div></a>


        </li>
        <li>


            <a href="{{route('admin.resetpasswordgoster')}}" data-toggle="collapse" data-target="#eom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Şifre Değiştir</span></div><div class="pull-right"></div><div class="clearfix"></div></a>


        </li>
    </ul>
</div>

    <!-- Right Sidebar Menu -->

    <!-- /Right Sidebar Menu -->



    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper"  >
        <div class="container-fluid" >

            <!-- Row -->
            <div class="takvim">
                <div class="panel panel-default card-view"  >
                    <div class="panel-wrapper collapse in" >
                        <div class="panel-body">
                            <div class="calendar-wrap" >
                              <div id="calendar_small" class="small-calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->


        </div>

        <!-- Footer -->

        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{asset('../vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


		<!-- Calender JavaScripts -->
		<script src="{{asset('../vendors/bower_components/moment/min/moment.min.js')}}"></script>

        <script src="{{asset('distt/js/fullcalendar-data.js')}}"></script>

        <script src="{{asset('../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

	<!-- Init JavaScript -->
	<script src="{{asset('distt/js/init.js')}}"></script>

</body>

</html>
