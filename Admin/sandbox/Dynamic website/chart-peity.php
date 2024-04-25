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
							<span>Peity</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Peity</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="card-title mb-4">Attributes</h4>
										<div class=" row">
											<div class="col-md-2 col-sm-4 col-6">
												<span class="data-attr"
													data-peity='{ "fill": ["rgb(255, 114, 13)", "rgba(255, 114, 13, .5)"], "innerRadius": 10, "radius": 40 }'>1/7</span>
											</div>
											<div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr"
													data-peity='{ "fill": ["rgb(120, 120, 120)", "rgba(120, 120, 120, .5)"], "innerRadius": 14, "radius": 36 }'>2/7</span>
											</div>
											<div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr"
													data-peity='{ "fill": ["rgb(238, 60, 60)", "rgba(238, 60, 60, .5)"], "innerRadius": 16, "radius": 32 }'>3/7</span>
											</div>
											<div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr"
													data-peity='{ "fill": ["rgb(54, 147, 255)", "rgba(54, 147, 255, .5)"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
											</div>
											<div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr"
													data-peity='{ "fill": ["rgb(255, 92, 0)", "rgba(255, 92, 0, .5)"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
											</div>
											<div class="col-md-2 col-sm-4 col-6 mt-3 mt-md-0"><span class="data-attr"
													data-peity='{ "fill": ["#24365c", "rgba(36, 54, 92, .1)"], "innerRadius": 18, "radius": 20 }'>6/7</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-lg-4 col-md-4 pb-4">
										<h4 class="card-title mb-4">Bar Chart</h4>
										<div class="px-4"><span class="bar"
												data-peity='{ "fill": ["rgb(255, 114, 13)", "rgba(255, 114, 13, .5)"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 pb-4">
										<h4 class="card-title mb-4">Bar Chart</h4>
										<div class="px-4"><span class="bar"
												data-peity='{ "fill": ["rgb(0, 0, 128)", "rgb(7, 135, 234)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 pb-4">
										<h4 class="card-title mb-4">Bar Chart</h4>
										<div class="px-4"><span class="bar"
												data-peity='{ "fill": ["rgb(7, 135, 234)", "rgb(0, 0, 128)"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-lg-4 col-md-4 pb-4">
										<h4 class="card-title mb-4">Line Chart</h4>
										<div class="px-4"><span class="peity-line"
												data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 pb-4">
										<h4 class="card-title mb-4">Line Chart</h4>
										<div class="px-4"><span class="peity-line"
												data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 pb-4">
										<h4 class="card-title mb-4">Line Chart</h4>
										<div class="px-4"><span class="peity-line"
												data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Pie 1</h4>
										<div class=""><span class="pie"
												data-peity='{ "fill": ["#F44336", "rgba(244, 67, 54, .1)"]}'>5/8</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Pie 2</h4>
										<div class=""><span class="pie"
												data-peity='{ "fill": ["#34C73B", "rgba(52, 199, 59, .1)"]}'>250/650</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Pie 3</h4>
										<div class=""><span class="pie"
												data-peity='{ "fill": ["#00A2FF", "rgba(0, 162, 255, .1)"]}'>0.52/1.561</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Pie 4</h4>
										<div class=""><span class="pie"
												data-peity='{ "fill": ["#28D6C3 ", "rgba(40, 214, 195, .1)"]}'>1,4</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Pie 5</h4>
										<div class=""><span class="pie"
												data-peity='{ "fill": ["#0000FF", "rgba(0, 0, 255, .1)"]}'>226,134</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Pie 6</h4>
										<div class=""><span class="pie"
												data-peity='{ "fill": ["#DCDCDC", "rgba(220, 220, 220, .1)"]}'>0.52,1.041</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Donut 1</h4>
										<div class=""><span class="donut"
												data-peity='{ "fill": ["rgb(255, 114, 13)", "rgba(255, 114, 13, .5)"]}'>5/8</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Donut 2</h4>
										<div class=""><span class="donut"
												data-peity='{ "fill": ["rgb(120, 120, 120)", "rgba(120, 120, 120, .5)"]}'>250/650</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Donut 3</h4>
										<div class=""><span class="donut"
												data-peity='{ "fill": ["rgb(238, 60, 60)", "rgba(238, 60, 60, .5)"]}'>0.52/1.561</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Donut 4</h4>
										<div class=""><span class="donut"
												data-peity='{ "fill": ["rgb(54, 147, 255)", "rgba(54, 147, 255, .5)", "rgba(54, 147, 255, .3)",]}'>1,4,5</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Donut 5</h4>
										<div class=""><span class="donut"
												data-peity='{ "fill": ["rgb(255, 92, 0)", "rgba(255, 92, 0, .5)"]}'>226,134</span>
										</div>
									</div>
									<div class="col-xl-2 col-sm-4 col-6 mt-4 mt-md-0">
										<h4 class="card-title mb-4">Donut 6</h4>
										<div class=""><span class="donut"
												data-peity='{ "fill": ["#24365c", "rgba(36, 54, 92, .1)"]}'>0.52,1.041</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-lg-3 col-6 pb-4">
										<h4 class="card-title mb-4">Bar Color 1</h4>
										<div><span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
										</div>
									</div>
									<div class="col-lg-3 col-6 pb-4">
										<h4 class="card-title mb-4">Bar Color 2</h4>
										<div><span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
										</div>
									</div>
									<div class="col-lg-3 col-6 pb-4">
										<h4 class="card-title mb-4">Bar Color 3</h4>
										<div><span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
										</div>
									</div>
									<div class="col-lg-3 col-6 pb-4">
										<h4 class="card-title mb-4">Pie Color</h4>
										<div><span class="pie-colours-2">5,3,9,6,5</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										<h4 class="card-title mb-4">Live Update</h4>
										<div class=""><span
												class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>


	<script src="js/plugins-init/piety-init.js"></script>


	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>