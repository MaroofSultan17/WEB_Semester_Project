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
							<span>Pagination</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Pagination</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Pagination</h4>
								<p class="mb-0 subtitle">Default pagination style</p>
							</div>
							<div class="card-body">
								<nav>
									<ul class="pagination">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>

								<nav>
									<ul class="pagination pagination-sm">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>

								<nav>
									<ul class="pagination pagination-xs">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Pagination Gutter</h4>
								<p class="mb-0 subtitle">add <code>.pagination-gutter</code> to change the style</p>
							</div>
							<div class="card-body">
								<nav>
									<ul class="pagination pagination-gutter">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-sm pagination-gutter">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-xs pagination-gutter">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Pagination Color</h4>
								<p class="mb-0 subtitle">add <code>.pagination-gutter</code> to change the style</p>
							</div>
							<div class="card-body">
								<nav>
									<ul class="pagination pagination-gutter pagination-primary no-bg">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-gutter pagination-danger">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-sm pagination-gutter pagination-info">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-xs pagination-gutter  pagination-warning">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Pagination Circle</h4>
								<p class="mb-0 subtitle">add <code>.pagination-circle</code> to change the style</p>
							</div>
							<div class="card-body">
								<nav>
									<ul class="pagination pagination-circle">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-sm pagination-circle">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
								<nav>
									<ul class="pagination pagination-xs pagination-circle">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-left"></i></a>
										</li>
										<li class="page-item active"><a class="page-link"
												href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="la la-angle-right"></i></a>
										</li>
									</ul>
								</nav>
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
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>