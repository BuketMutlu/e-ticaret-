<!-- Preloader -->
<div class="preloader-it">
	<div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper box-layout theme-2-active pimary-color-blue">
	<!-- Top Menu Items -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="mobile-only-brand pull-left">
			<div class="nav-header pull-left">
				<div class="logo-wrap">
					<a href="index.html">
						<img class="brand-img" src="../img/logo.png" alt="brand"/>
						<span class="brand-text">Snoopy</span>
					</a>
				</div>
			</div>
			<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left " href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
			<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view " href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
			<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more "></i></a>
			<form id="search_form" role="search" class="top-nav-search collapse pull-right ">
				<div class="input-group">
					<input type="text" name="example-input1-group2" class="form-control " placeholder="Search">
					<span class="input-group-btn">
					<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
					</span>
				</div>
			</form>
		</div>
		<div id="mobile_only_nav" class="mobile-only-nav pull-right">
			<ul class="nav navbar-right top-nav pull-right">


				<li class="dropdown auth-drp">
					<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                   <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
                                <a  href="{{route('admin.login')}}"><i class="zmdi zmdi-account"></i><span>Çıkış Yap</span></a>
							</li>
						</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- /Top Menu Items -->
</div>

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

		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
