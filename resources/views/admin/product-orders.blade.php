<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Snoopy I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Snoopy is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Snoopy Admin, Snoopyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom Fonts -->
    <link href="dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	@extends('sablon')
	@section('icerik')
		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">ürün siparişleri</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="/">Gösterge Paneli</a></li>
						<li><a href="#"><span>Çiçekçilik</span></a></li>
						<li class="active"><span>ürün siparişleri</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body row">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display responsive product-overview mb-30" id="myTable">
												<thead>
													<tr>
														<th>İSim</th>
														<th>Siparis ID</th>
														<th>Fotograf</th>
														<th>ürün</th>
														<th>Miktar</th>
														<th>Tarih</th>
														<th>Durum</th>
														<th>Hareketler</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="txt-dark">Madalyn Sandy</td>
														<td class="txt-dark">#85457898</td>
														<td>
															<img src="../img/chair.jpg" alt="iMac" width="80">
														</td>
														<td>Square Chair</td>
														<td>20</td>
														<td>10-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Evie Ono</td>
														<td class="txt-dark">#85457897</td>
														<td>
															<img src="../img/chair2.jpg" alt="iPhone" width="80">
														</td>
														<td>Semi Circle Chair</td>
														<td>15</td>
														<td>09-10-2016</td>
														<td>
															<span class="label label-warning font-weight-100">Pending</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Masse Sarah</td>
														<td class="txt-dark">#85457896</td>
														<td>
															<img src="../img/chair3.jpg" alt="apple_watch" width="80">
														</td>
														<td>Rounded Chair</td>
														<td>10</td>
														<td>08-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Rascon Sandy</td>
														<td class="txt-dark">#85457895</td>
														<td>
															<img src="../img/chair4.jpg" alt="mac_mouse" width="80">
														</td>
														<td>Wooden chair</td>
														<td>15</td>
														<td>02-10-2016</td>
														<td>
															<span class="label label-default font-weight-100">Failed</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Mitsuko Heid</td>
														<td class="txt-dark">#85457894</td>
														<td>
															<img src="../img/chair.jpg" alt="iMac" width="80">
														</td>
														<td>Rounded Chair</td>
														<td>20</td>
														<td>08-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Jonnie Metoyer</td>
														<td class="txt-dark">#85457893</td>
														<td>
															<img src="../img/chair2.jpg" alt="iPhone" width="80">
														</td>
														<td>Wooden Chair</td>
														<td>24</td>
														<td>06-10-2016</td>
														<td>
															<span class="label label-warning font-weight-100">Pending</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Ezequiel Merideth</td>
														<td class="txt-dark">#85457892</td>
														<td>
															<img src="../img/chair3.jpg" alt="apple_watch" width="80">
														</td>
														<td>Square Chair</td>
														<td>30</td>
														<td>05-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Angelic Lauver</td>
														<td class="txt-dark">#85457891</td>
														<td>
															<img src="../img/chair4.jpg" alt="mac_mouse" width="80">
														</td>
														<td>Semi Circle Chair</td>
														<td>28</td>
														<td>01-10-2016</td>
														<td>
															<span class="label label-default font-weight-100">Failed</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
												</tbody>
											</table>
										</div>
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
	@endsection
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/productorders-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>
