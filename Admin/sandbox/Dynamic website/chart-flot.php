<!DOCTYPE html>
<html lang="en">

<head>
	<title>Uena - Django Restaurant Admin Dashboard Template </title>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link class="main-css" href="css/style.css" rel="stylesheet">
</head>

<body>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<div id="main-wrapper">
		<?php require ('./components/nav-header.php'); ?>
		<?php require ('./components/chatbox.php'); ?>
		<?php require ('./components/header.php'); ?>
		<?php require ('./components/sidebar.php'); ?>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row page-titles mx-0">
					<div class="col-sm-6  p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<span>Flot Chart</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Flot</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->


				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Bar Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotBar1" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Bar Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotBar2" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Line Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotLine1" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Line Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotLine3" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Area Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotArea1" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Area Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotArea2" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Realtime Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotRealtime1" class="flot-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Realtime Chart</h4>
									</div>
									<div class="card-body">
										<div id="flotRealtime2" class="flot-chart"></div>
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



	<script src="vendor/flot/jquery.canvaswrapper.js"></script>
	<script src="vendor/flot/jquery.colorhelpers.js"></script>
	<script src="vendor/flot/jquery.flot.js"></script>
	<script src="vendor/flot/jquery.flot.saturated.js"></script>
	<script src="vendor/flot/jquery.flot.browser.js"></script>
	<script src="vendor/flot/jquery.flot.drawSeries.js"></script>
	<script src="vendor/flot/jquery.flot.uiConstants.js"></script>
	<script src="vendor/flot/jquery.flot.categories.js"></script>

	<script src="js/plugins-init/flot-init.js"></script>


	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>



</body>

</html>