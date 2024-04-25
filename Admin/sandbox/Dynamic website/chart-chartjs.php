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
							<p class="mb-0">Your business dashboard template</p>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">ChartJS</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->

				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Basic Bar Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="barChart_1"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Gradient Bar Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="barChart_2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Stalked Bar Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="barChart_3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Basic Line Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="lineChart_1"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Gradient Line Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="lineChart_2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Dual Line Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="lineChart_3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Basic Area Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="areaChart_1"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Gradinet Area Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="areaChart_2"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Dual Area Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="areaChart_3"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Radar Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="radar_chart"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Pie Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="pie_chart"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Doughnut Chart</h4>
									</div>
									<div class="card-body">
										<div class="chart-point">
											<div class="check-point-area">
												<canvas id="doughnut_chart"></canvas>
											</div>
											<ul class="chart-point-list">
												<li><i class="fa fa-circle text-primary me-1"></i> 40% Tickets</li>
												<li><i class="fa fa-circle text-success me-1"></i> 35% Events</li>
												<li><i class="fa fa-circle text-warning me-1"></i> 25% Other</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Polar Chart</h4>
									</div>
									<div class="card-body">
										<canvas id="polar_chart"></canvas>
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
	<script src="js/custom.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>




	<!-- Chart ChartJS plugin files -->
	<script src="https://uena.dexignzone.com/xhtml/page-error-404.php"></script>
	<script src="js/plugins-init/chartjs-init.js"></script>



	<script src="js/deznav-init.js"></script>


</body>

</html>