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
							<span>Progressbar</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Progressbar</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<!-- column -->
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Default Progress bars</h4>
								<p class="mb-0 subtitle">Default progress bar style</p>
							</div>
							<div class="card-body">
								<div class="progress">
									<div class="progress-bar bg-danger" style="width: 60%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- column -->
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Striped Progress bar</h4>
								<p class="mb-0 subtitle">add <code>.progress-bar-striped</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="progress">
									<div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85"
										aria-valuemin="0" aria-valuemax="100" style="width: 85%; height:6px;"
										role="progressbar">
										<span class="sr-only">85% Complete (success)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- column -->
				</div>

				<div class="row">
					<div class="col-xl-4 col-xxl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Colored Progress bar</h4>
								<p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the
									style
								</p>
							</div>
							<div class="card-body">
								<div class="progress mt-3">
									<div class="progress-bar bg-danger" style="width: 60%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-info" style="width: 40%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-success" style="width: 20%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-primary" style="width: 30%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-warning" style="width: 80%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-inverse" style="width: 40%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Column -->
					<div class="col-xl-4 col-xxl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Different bar sizes </h4>
								<p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the
									style
								</p>
							</div>
							<div class="card-body">
								<div class="progress h-auto mt-3">
									<div class="progress-bar bg-danger" style="width: 60%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress h-auto mt-3">
									<div class="progress-bar bg-info" style="width: 40%; height:8px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress h-auto mt-3">
									<div class="progress-bar bg-success" style="width: 20%; height:10px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress h-auto mt-3">
									<div class="progress-bar bg-primary" style="width: 30%; height:12px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress h-auto mt-3">
									<div class="progress-bar bg-warning" style="width: 80%; height:14px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Column -->
					<div class="col-xl-4 col-xxl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Animated Striped bar </h4>
								<p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the
									style
								</p>
							</div>
							<div class="card-body">
								<div class="progress mt-3">
									<div class="progress-bar active progress-bar-striped bg-danger"
										style="width: 60%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-info active progress-bar-striped"
										style="width: 40%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-success active progress-bar-striped"
										style="width: 20%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-primary active progress-bar-striped"
										style="width: 30%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-warning active progress-bar-striped"
										style="width: 80%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Column -->
					<!-- Column -->
					<div class="col-xl-4 col-xxl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Vertical Progress bars </h4>
								<p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="progress progress-vertical">
									<div class="progress-bar bg-danger" style="width:4px; height:60%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-success" style="width:4px; height:60%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-primary" style="width:4px; height:40%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-warning" style="width:4px; height:30%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Column -->
					<!-- Column -->
					<div class="col-xl-4 col-xxl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Vertical Progress From bottom </h4>
								<p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="progress progress-vertical-bottom">
									<div class="progress-bar bg-danger" style="width:4px; height:60%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical-bottom">
									<div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical-bottom">
									<div class="progress-bar bg-success" style="width:4px; height:60%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical-bottom">
									<div class="progress-bar bg-primary" style="width:4px; height:40%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical-bottom">
									<div class="progress-bar bg-warning" style="width:4px; height:30%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Column -->
					<!-- Column -->
					<div class="col-xl-4 col-xxl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Different size Progress bars </h4>
								<p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="progress progress-vertical">
									<div class="progress-bar bg-danger" style="width:4px; height:60%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-info" style="width:6px; height:80%;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-success" style="width:8px; height:60%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-primary" style="width:10px; height:40%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress progress-vertical">
									<div class="progress-bar bg-warning" style="width:14px; height:30%;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Column -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Animated bars </h4>
								<p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="progress mt-3">
									<div class="progress-bar bg-danger progress-animated"
										style="width: 60%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-info progress-animated" style="width: 40%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-success progress-animated"
										style="width: 20%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-primary progress-animated"
										style="width: 30%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-warning progress-animated"
										style="width: 80%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<div class="progress mt-3">
									<div class="progress-bar bg-inverse progress-animated"
										style="width: 40%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- Column -->
					<div class="col-xl-8">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">SKILL BARS </h4>
								<p class="mb-0 subtitle">add <code>.progress-animated</code> to change the style</p>
							</div>
							<div class="card-body">
								<h6>Photoshop
									<span class="pull-right">85%</span>
								</h6>
								<div class="progress ">
									<div class="progress-bar bg-danger progress-animated"
										style="width: 85%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<h6 class="mt-4">Code editor
									<span class="pull-right">90%</span>
								</h6>
								<div class="progress">
									<div class="progress-bar bg-info progress-animated" style="width: 90%; height:6px;"
										role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
								<h6 class="mt-4">Illustrator
									<span class="pull-right">65%</span>
								</h6>
								<div class="progress">
									<div class="progress-bar bg-success progress-animated"
										style="width: 65%; height:6px;" role="progressbar">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Column -->
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
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>