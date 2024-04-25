<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Title -->
	<title>Uena - Django Restaurant Admin Dashboard Template </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">

	<meta name="keywords"
		content="	admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard">
	<meta name="description"
		content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">

	<meta property="og:title" content="Uena - Django Restaurant Admin Dashboard Template">
	<meta property="og:description"
		content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<!-- Daterange picker -->
	<link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Clockpicker -->
	<link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
	<!-- asColorpicker -->
	<link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
	<!-- Material color picker -->
	<link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	<!-- Pick date -->
	<link rel="stylesheet" href="vendor/pickadate/themes/default.css">
	<link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link class="main-css" href="css/style.css" rel="stylesheet">

</head>

<body>

	<!--*******************
		Preloader start
	********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->


	<!--**********************************
		Main wrapper start
	***********************************-->
	<div id="main-wrapper">
		<?php require ('./components/nav-header.php'); ?>
		<?php require ('./components/chatbox.php'); ?>
		<?php require ('./components/header.php'); ?>
		<?php require ('./components/sidebar.php'); ?>

		<!--**********************************
			Content body start
		***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="row page-titles mx-0">
					<div class="col-sm-6 p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<span>Pickers</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Pickers</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-9">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Date Picker</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-4 mb-3">
										<div class="example">
											<label class="form-label">Date Range Pick</label>
											<input class="form-control input-daterange-datepicker" type="text"
												name="daterange" value="01/01/2015 - 01/31/2015">
										</div>
									</div>
									<div class="col-xl-4 mb-3">
										<div class="example">
											<label class="form-label">Date Range With Time</label>
											<input type="text" class="form-control input-daterange-timepicker"
												name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
										</div>
									</div>
									<div class="col-xl-4">
										<div class="example">
											<label class="form-label">Limit Selectable Dates</label>
											<input class="form-control input-limit-datepicker" type="text"
												name="daterange" value="06/01/2015 - 06/07/2015">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<!-- Card -->
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Pick-Date picker</h4>
							</div>
							<div class="card-body">
								<label class="form-label">Default picker</label>
								<input name="datepicker" class="datepicker-default form-control" id="datepicker">
							</div>
						</div>
						<!-- Card -->
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Time picker</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
										<label class="form-label">Default Clock Picker</label>
										<div class="input-group clockpicker">
											<input type="text" class="form-control" value="09:30"><span
												class="input-group-text"><i class="far fa-clock"></i></span>
										</div>
									</div>
									<div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
										<label class="form-label">Auto btn-close Clock Picker</label>
										<div class="input-group clockpicker" data-placement="bottom" data-align="top"
											data-autobtn-close="true">
											<input type="text" class="form-control" value="13:14">
											<span class="input-group-text"><i class="far fa-clock"></i></span>
										</div>
									</div>
									<div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
										<label class="form-label">Now time</label>
										<div class="input-group">
											<input class="form-control" id="single-input" value="" placeholder="Now">
											<button type="button" id="check-minutes"
												class="btn waves-effect waves-light btn-ft btn-success">Check the
												minutes</button>
										</div>
									</div>
									<div class="col-md-6 col-xl-3 col-xxl-6">
										<label class="form-label">Left Placement</label>
										<div class="input-group clockpicker" data-placement="left" data-align="top"
											data-autobtn-close="true">
											<input type="text" class="form-control" value="13:14">
											<span class="input-group-text"><i class="far fa-clock"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Material Date picker</h4>
							</div>
							<div class="card-body">
								<div class="row form-material">
									<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
										<label class="form-label">Default Material Date Picker</label>
										<input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
									</div>
									<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
										<label class="form-label">Default Material Date Timepicker</label>
										<input type="text" id="date-format" class="form-control"
											placeholder="Saturday 24 June 2017 - 21:44">
									</div>
									<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
										<label class="form-label">Time Picker</label>
										<input class="form-control" id="timepicker" placeholder="Check time">
									</div>
									<div class="col-xl-3 col-xxl-6 col-md-6">
										<label class="form-label">Min Date set</label>
										<input type="text" class="form-control" placeholder="set min date"
											id="min-date">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Color Picker</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-4 col-lg-6 mb-3">
										<div class="example">
											<label class="form-label me-2">Simple mode</label>
											<input type="text" class="as_colorpicker form-control" value="#7ab2fa">
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 mb-3">
										<div class="example">
											<label class="form-label me-2">Complex mode</label>
											<input type="text" class="complex-colorpicker form-control" value="#fa7a7a">
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 mb-3">
										<div class="example">
											<label class="form-label me-2">Gradiant mode</label>
											<input type="text" class="gradient-colorpicker form-control"
												value="#bee0ab">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->


		<!--**********************************
			Footer start
		***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/"
						target="_blank">DexignZone</a> 2024</p>
			</div>
		</div>
		<!--**********************************
			Footer end
		***********************************-->

		<!--**********************************
		   Support ticket button start
		***********************************-->

		<!--**********************************
		   Support ticket button end
		***********************************-->


	</div>
	<!--**********************************
		Main wrapper end
	***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="js/custom.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>



	<!-- Daterangepicker -->
	<!-- momment js is must -->
	<script src="vendor/moment/moment.min.js"></script>
	<script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- clockpicker -->
	<script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
	<!-- asColorPicker -->
	<script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
	<script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
	<script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
	<!-- Material color picker -->
	<script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
	<!-- pickdate -->
	<script src="vendor/pickadate/picker.js"></script>
	<script src="vendor/pickadate/picker.time.js"></script>
	<script src="vendor/pickadate/picker.date.js"></script>



	<!-- Daterangepicker -->
	<script src="js/plugins-init/bs-daterange-picker-init.js"></script>
	<!-- Clockpicker init -->
	<script src="js/plugins-init/clock-picker-init.js"></script>
	<!-- asColorPicker init -->
	<script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
	<!-- Material color picker init -->
	<script src="js/plugins-init/material-date-picker-init.js"></script>
	<!-- Pickdate -->
	<script src="js/plugins-init/pickadate-init.js"></script>



	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>