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
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Ürünler  <button class="fileupload btn btn-info btn-anim" style="border-radius:10px"><a href="{{route('admin.urunekle')}}">ürün Ekle</a></button></h5>

					</div>
					<!-- Breadcrumb -->

					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- Product Row One -->
				<div class="row" style=" display: flex; flex-wrap: wrap;  gap:35px;">
                    @foreach($adminurunler as $index => $adminurun)
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="panel panel-default card-view pa-0 " style="width: 250px">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body pa-0">
                                        <article class="col-item">
                                            <div class="photo" style="height: 200px; overflow: hidden;">
                                                <div class="options">
                                                    <form>
                                                        <a href="#" class="font-18 txt-grey mr-10 pull-left" data-toggle="modal" data-target="#urunduzenleme{{$adminurun->id}}">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                    </form>
                                                    <form action="{{ route('admin.urun.delete', $adminurun->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="background:none; border:none">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset($adminurun->resim) }}" alt="{{ $adminurun->urunadi }}" class="img-responsive" style="width: 100%; height: auto;" />
                                                </a>
                                            </div>
                                            <div class="info">
                                                <h6>{{$adminurun->urunadi}}</h6>
                                                <span class="head-font block text-warning font-16">{{$adminurun->fiyat}}</span>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>




        </div>
        <!-- /Main Content -->

    </div>

<!-- /Kategori Güncelleme -->

@foreach ($adminurunler as $urunn)
<div class="modal fade" id="urunduzenleme{{$urunn->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$urunn->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{$urunn->id}}">Ürün Düzenle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.urun.update', $urunn->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        @if($urunn->resim)
                        <img src="{{ asset($urunn->resim) }}" alt="Current Image" style="width: 100px; height: auto;">
                    @endif
                    <input type="file" name="resim" id="resim{{$urunn->id}}" class="form-control" accept="image/*">
</div>
                    <div class="form-group">
                        <label for="urunadi{{$urunn->id}}">Ürün Adı</label>
                        <input type="text" class="form-control" id="urunadi{{$urunn->id}}" name="urunadi" value="{{$urunn->urunadi}}">
                    </div>
                    <div class="form-group">
                        <label for="fiyat{{$urunn->id}}">Fiyat</label>
                        <input type="text" class="form-control" id="fiyat{{$urunn->id}}" name="fiyat" value="{{$urunn->fiyat}}">
                    </div>
                    <div class="form-group">
                        <label for="aciklama{{$urunn->id}}">Açıklama</label>
                        <input type="text" class="form-control" id="aciklama{{$urunn->id}}" name="aciklama" value="{{$urunn->aciklama}}">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
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
