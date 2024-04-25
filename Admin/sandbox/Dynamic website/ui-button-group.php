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
							<span>Button Group</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Button Group</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button group</h4>
								<p class="mb-0 subtitle">Default Button group style</p>
							</div>
							<div class="card-body">
								<div class="btn-group">
									<button type="button" class="btn btn-primary">Left</button>
									<button type="button" class="btn btn-primary">Middle</button>
									<button type="button" class="btn btn-primary">Right</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button toolbar</h4>
								<p class="mb-0 subtitle">Default Button toolbar style</p>
							</div>
							<div class="card-body">
								<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
									<div class="btn-group me-2 mb-2" role="group" aria-label="First group">
										<button type="button" class="btn btn-primary">1</button>
										<button type="button" class="btn btn-primary">2</button>
										<button type="button" class="btn btn-primary">3</button>
										<button type="button" class="btn btn-primary">4</button>
									</div>
									<div class="btn-group me-2 mb-2" role="group" aria-label="Second group">
										<button type="button" class="btn btn-secondary">5</button>
										<button type="button" class="btn btn-secondary">6</button>
										<button type="button" class="btn btn-secondary">7</button>
									</div>
									<div class="btn-group mb-2" role="group" aria-label="Third group">
										<button type="button" class="btn btn-info">8</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button Sizing</h4>
								<p class="mb-0 subtitle">Default button size style</p>
							</div>
							<div class="card-body">
								<div class="btn-group mb-2 btn-group-lg">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
								<div class="btn-group mb-2">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
								<div class="btn-group mb-2 btn-group-sm">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button Nesting</h4>
								<p class="mb-0 subtitle">Default button nesting style</p>
							</div>
							<div class="card-body">
								<div class="btn-group">
									<button type="button" class="btn btn-primary">1</button>
									<button type="button" class="btn btn-primary">2</button>
									<div class="btn-group">
										<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
											data-bs-toggle="dropdown">Dropdown</button>
										<div class="dropdown-menu"><a class="dropdown-item"
												href="javascript:void()">Dropdown link</a>
											<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Vertical variation</h4>
								<p class="mb-0 subtitle">Default button vertical variation style</p>
							</div>
							<div class="card-body">
								<div class="btn-group-vertical">
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Vertical dropdown variation</h4>
								<p class="mb-0 subtitle">Default button vertical variation style</p>
							</div>
							<div class="card-body">
								<div aria-label="Vertical button group" role="group" class="btn-group-vertical">
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
									<div role="group" class="btn-group">
										<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
											type="button">Dropdown</button>
										<div class="dropdown-menu"><a href="javascript:void()"
												class="dropdown-item">Dropdown link</a>
											<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
										</div>
									</div>
									<button class="btn btn-primary" type="button">Button</button>
									<button class="btn btn-primary" type="button">Button</button>
									<div role="group" class="btn-group">
										<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
											type="button">Dropdown</button>
										<div class="dropdown-menu"><a href="javascript:void()"
												class="dropdown-item">Dropdown link</a>
											<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
										</div>
									</div>
									<div role="group" class="btn-group">
										<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
											type="button">Dropdown</button>
										<div class="dropdown-menu"><a href="javascript:void()"
												class="dropdown-item">Dropdown link</a>
											<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
										</div>
									</div>
									<div role="group" class="btn-group">
										<button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
											type="button">Dropdown</button>
										<div class="dropdown-menu"><a href="javascript:void()"
												class="dropdown-item">Dropdown link</a>
											<a href="javascript:void()" class="dropdown-item">Dropdown link</a>
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
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>