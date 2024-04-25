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
	<link href="vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
	<link href="vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
	<link href="vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">
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
							<span>lightGallery</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Plugins</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Light Gallery</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Light Gallery</h4>
							</div>
							<div class="card-body pb-1">
								<div id="lightgallery" class="row">
									<a href="images/big/img1.jpg" data-src="images/big/img1.jpg"
										class=" lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img1.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img2.jpg" data-src="images/big/img2.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img2.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img3.jpg" data-src="images/big/img3.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img3.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img4.jpg" data-src="images/big/img4.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img4.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img5.jpg" data-src="images/big/img5.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img5.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img6.jpg" data-src="images/big/img6.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img6.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img7.jpg" data-src="images/big/img7.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img7.jpg" style="width:100%;" alt="/">
									</a>
									<a href="images/big/img8.jpg" data-src="images/big/img8.jpg"
										class="lg-item col-lg-3 col-md-6 mb-4">
										<img src="images/big/img8.jpg" style="width:100%;" alt="/">
									</a>
								</div>
							</div>
						</div>
						<!-- /# card -->
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
	<script src="vendor/lightgallery/dist/lightgallery.min.js"></script>
	<script src="vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
	<script src="vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>


</html>