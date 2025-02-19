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
			<div class="page-wrapper" style="width: 1270px;">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg" >
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark" style="margin-left:700px;">ÜRÜN EKLE</h5>
						</div>
						<!-- Breadcrumb -->

						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="{{ route('admin.uruneklepost') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Ürün Hakkında</h6>
                                                <hr class="light-grey-hr"/>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="urunadi">Ürün Adı</label>
                                                            <input type="text" id="urunadi" name="urunadi" class="form-control" placeholder="" required>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!--/span-->
                                                <!-- Row -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Boy</label>
                                                            <select class="form-control" name="boyut" required>
                                                                <option value="">Seçiniz</option>
                                                                <option value="Büyük Boy">Büyük Boy</option>
                                                                <option value="Orta Boy">Orta Boy</option>
                                                                <option value="Küçük Boy">Küçük Boy</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Row -->
                                                <div class="row" style="margin-left:2px">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Özel Günler</label>
                                                            <select class="form-control" name="ozel_gun" required>
                                                                <option value="">Seçiniz</option>
                                                                <option value="Anneler Günü">Anneler Günü</option>
                                                                <option value="Sevgililer Günü">Sevgililer Günü</option>
                                                                <option value="Öğretmenler Günü">Öğretmenler Günü</option>
                                                                <option value="Kadınlar Günü">Kadınlar Günü</option>
                                                                <option value="Doğum Günü">Doğum Günü</option>
                                                                <option value="Yıl Dönümü">Yıl Dönümü</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10">Kategori</label>
                                                            <select class="form-control" name="kategori" required>
                                                                <option value="">Seçiniz</option>
                                                                <option value="gül">Gül</option>
                                                                <option value="lale">Lale</option>
                                                                <option value="orkide">Orkide</option>
                                                                <option value="papatya">Papatya</option>
                                                                <option value="ortanca">Ortanca</option>
                                                                <option value="lidyum">Lidyum</option>
                                                                <option value="kaktüs">Kaktüs</option>
                                                                <option value="teraryum">Teraryum</option>
                                                                <option value="açelya">Açelya</option>
                                                                <option value="nilüfer">Nilüfer</option>
                                                                <option value="akasya">Akasya</option>
                                                                <option value="yasemin">Yasemin</option>
                                                                <option value="aranjman">Aranjman</option>
                                                                <option value="sukilent">Sukilent</option>
                                                                <option value="aleo vera">Aleo Vera</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--/row-->
                                                <div class="row" style="margin-left: 5px">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="fiyat">Fiyat</label>
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-money"></i></div>
                                                                <input type="text" class="form-control" name="fiyat" id="fiyat" placeholder="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="seprator-block"></div>
                                                <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Ürün Açıklaması</h6>
                                                <hr class="light-grey-hr"/>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="aciklama" rows="4" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="seprator-block"></div>
                                                <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>Resim Ekle</h6>
                                                <hr class="light-grey-hr"/>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="resim">Ana Resim</label>

                                                            <input type="file" name="resim" id="resim" class="form-control" accept="image/*" required>
                                                        </div>
                                                        <div class="image-container">
                                                            <img id="displayed-image" src="../img/product-01.jpg" width="270" height="303" alt="Seçilen Resim" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seprator-block"></div>

                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Kaydet</span></button>
                                                    <button type="button" class="btn btn-warning pull-left">İptal Et</button>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

				</div>


			</div>
			<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="{{asset('../vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>


<!-- Bootstrap Core JavaScript -->
<script src="{{asset('../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>



		<!-- Init JavaScript -->
		<script src="{{asset('distt/js/init.js')}}"></script>

	</body>
</html>
