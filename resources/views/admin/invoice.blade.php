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
							<h5 class="txt-dark">Fatura</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Gösterge Paneli</a></li>
								<li><a href="#"><span>Özel Sayfalar</span></a></li>
								<li class="active"><span>Fatura</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Fatura</h6>
									</div>
									<div class="pull-right">
										<h6 class="txt-dark">Sipariş # 12345</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-6">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">Faturalandırıldığı adres:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Fasbook, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(133) 456-7890
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">kargolandı:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Xyz, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(123) 456-7890
												</address>
											</div>
										</div>
										
										<div class="row">
											<div class="col-xs-6">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">Ödeme yöntemi:</span>
													<br>
													Visa ending **** 4242<br>
													jsmith@email.com
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">sipariş tarihi:</span><br>
													March 7, 2018<br><br>
												</address>
											</div>
										</div>
										
										<div class="seprator-block"></div>
										
										<div class="invoice-bill-table">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Öğe</th>
															<th>Fiyat</th>
															<th>Miktar</th>
															<th>Toplamlar</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>BS-200</td>
															<td>$10.99</td>
															<td>1</td>
															<td>$10.99</td>
														</tr>
														<tr>
															<td>BS-400</td>
															<td>$20.00</td>
															<td>3</td>
															<td>$60.00</td>
														</tr>
														<tr>
															<td>BS-1000</td>
															<td>$600.00</td>
															<td>1</td>
															<td>$600.00</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Subtotal</td>
															<td>$670.99</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Shipping</td>
															<td>$15</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Total</td>
															<td>$685.99</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="button-list pull-right">
												<button type="submit" class="btn btn-warning mr-10">
													Ödemeye devam et
												</button>
												<button type="button" class="btn btn-warning btn-outline btn-icon left-icon" onclick="javascript:window.print();"> 
													<i class="fa fa-print"></i><span> Yazdır</span> 
												</button>
											</div>
											<div class="clearfix"></div>
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
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
		
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>
</html>