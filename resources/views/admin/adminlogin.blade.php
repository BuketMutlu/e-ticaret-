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
		<link href="{{asset('../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>



		<!-- Custom CSS -->
		<link href="{{asset('distt/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->


			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="/">
						<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
						<span class="brand-text">Snoopy</span>
					</a>
				</div>

				<div class="clearfix"></div>
			</header>


			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Snoopy'de oturum açın</h3>
											<h6 class="text-center nonecase-font txt-grey">Aşağıya bilgilerinizi girin</h6>
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
										</div>
										<div class="form-wrap">
                                            <form  method="POST" action="{{ route('admin.login.post') }}">
                                                @csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email Adresi</label>
													<input type="email" class="form-control" name="email" required="" id="email" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Şifre</label>
													<div class="clearfix"></div>
													<input type="password" class="form-control" name="password" required="" id="password" placeholder="Enter pwd">
												</div>


												<div class="form-group text-center">
													<button type="submit" class="btn btn-warning  btn-rounded">Giriş Yap</button>
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

			<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="{{asset('../vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>


		<!-- Init JavaScript -->
		<script src="{{asset('distt/js/init.js')}}"></script>
	</body>
</html>
