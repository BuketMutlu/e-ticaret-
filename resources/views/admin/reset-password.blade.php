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



		<!-- Custom CSS -->
		<link href={{asset('distt/css/style.css')}} rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->

        <div class="wrapper  theme-1-active pimary-color-blue">
            <!-- Top Menu Items -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="mobile-only-brand pull-left">
                    <div class="nav-header pull-left">
                        <div class="logo-wrap">
                            <a href="index.html">
                                <img class="brand-img" src="../img/logo.png" alt="brand"/>
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
<div class="page-wrapper pa-0 ma-0 auth-page">
    <div class="container-fluid">
        <!-- Row -->
        <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
                <div class="auth-form  ml-auto mr-auto no-float">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="sp-logo-wrap text-center pa-0 mb-30">
                                <a href="/">
                                    <img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
                                    <span class="brand-text">Buket DÜnyası</span>
                                </a>
                            </div>
                            <div class="mb-30">
                                <h3 class="text-center txt-dark mb-10">Reset Password</h3>
                            </div>
                            <div class="form-wrap">
                                  <!-- Hata ve başarı mesajları -->
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
                                <form action="{{ route('admin.resetpassword') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="old_password">Eski Şifre</label>
                                        <input type="password" class="form-control" name="old_password" required id="old_password" placeholder="Eski şifreyi girin">
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">Yeni Şifre</label>
                                        <input type="password" class="form-control" name="new_password" required id="new_password" placeholder="Yeni şifreyi girin">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Yeni Şifreyi Onaylayın</label>
                                        <input type="password" class="form-control" name="new_password_confirmation" required id="new_password_confirmation" placeholder="Yeni şifreyi tekrar girin">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-warning btn-rounded">Şifreyi Sıfırla</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

        <!-- /Row -->
    </div>

</div>
			<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src={{asset('../vendors/bower_components/jquery/dist/jquery.min.js')}}></script>

		<!-- Bootstrap Core JavaScript -->
		<script src={{asset('../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>



		<!-- Init JavaScript -->
		<script src={{asset('distt/js/init.js')}}></script>
	</body>
</html>
