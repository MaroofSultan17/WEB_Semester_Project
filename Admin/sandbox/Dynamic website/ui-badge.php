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
		<div class="content-body badge-demo">
			<div class="container-fluid">
				<div class="row page-titles mx-0">
					<div class="col-sm-6 p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<span>Badge</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Badge</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Badges Size</h4>
								<p class="mb-0 subtitle">Default Bootstrap Badges</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<span class="badge badge-xs light badge-primary">Primary</span>
									<span class="badge badge-sm light badge-primary">Primary</span>
									<span class="badge light badge-secondary">Secondary</span>
									<span class="badge badge-lg light badge-danger">Danger</span>
									<span class="badge badge-xl light badge-warning">Warning</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Badges Light</h4>
								<p class="mb-0 subtitle">Default Bootstrap Badges</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<span class="badge light badge-primary">Primary</span>
									<span class="badge light badge-secondary">Secondary</span>
									<span class="badge light badge-success">Success</span>
									<span class="badge light badge-danger">Danger</span>
									<span class="badge light badge-warning">Warning</span>
									<span class="badge light badge-info">Info</span>
									<span class="badge light badge-light text-dark">Light</span>
									<span class="badge light badge-dark">Dark</span>
								</div>
								<div class="bootstrap-badge">
									<span class="badge light badge-primary">1</span>
									<span class="badge light badge-secondary">2</span>
									<span class="badge light badge-success">3</span>
									<span class="badge light badge-danger">4</span>
									<span class="badge light badge-warning">5</span>
									<span class="badge light badge-info">6</span>
									<span class="badge light badge-light text-dark">7</span>
									<span class="badge light badge-dark">8</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Badges </h4>
								<p class="mb-0 subtitle">Default Bootstrap Badges</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<span class="badge badge-primary">Primary</span>
									<span class="badge badge-secondary">Secondary</span>
									<span class="badge badge-success">Success</span>
									<span class="badge badge-danger">Danger</span>
									<span class="badge badge-warning">Warning</span>
									<span class="badge badge-info">Info</span>
									<span class="badge badge-light text-dark">Light</span>
									<span class="badge badge-dark">Dark</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Pill Badge </h4>
								<p class="mb-0 subtitle">add <code>.badge-pill</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<span class="badge badge-pill badge-primary">Pill badge</span>
									<span class="badge badge-pill badge-secondary">Pill badge</span>
									<span class="badge badge-pill badge-success">Pill badge</span>
									<span class="badge badge-pill badge-danger">Pill badge</span>
									<span class="badge badge-pill badge-warning">Pill badge</span>
									<span class="badge badge-pill badge-info">Pill badge</span>
									<span class="badge badge-pill badge-light text-dark">Pill badge</span>
									<span class="badge badge-pill badge-dark">Pill badge</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Link Badge </h4>
								<p class="mb-0 subtitle">Link badge add in anchor tag</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-primary">Links</a>
									<a href="javascript:void(0)" class="badge badge-secondary">Links</a>
									<a href="javascript:void(0)" class="badge badge-success">Links</a>
									<a href="javascript:void(0)" class="badge badge-danger">Links</a>
									<a href="javascript:void(0)" class="badge badge-warning">Links</a>
									<a href="javascript:void(0)" class="badge badge-info">Links</a>
									<a href="javascript:void(0)" class="badge badge-light text-dark">Links</a>
									<a href="javascript:void(0)" class="badge badge-dark">Links</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Rounded Badge </h4>
								<p class="mb-0 subtitle">add <code>.badge-rounded</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-rounded badge-primary">Rounded</a>
									<a href="javascript:void(0)" class="badge badge-rounded badge-secondary">Rounded</a>
									<a href="javascript:void(0)" class="badge badge-rounded badge-success">Rounded</a>
									<a href="javascript:void(0)" class="badge badge-rounded badge-danger">Rounded</a>
									<a href="javascript:void(0)" class="badge badge-rounded badge-warning">Rounded</a>
									<a href="javascript:void(0)" class="badge badge-rounded badge-info">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-light text-dark">Rounded</a>
									<a href="javascript:void(0)" class="badge badge-rounded badge-dark">Rounded</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Rounded Outline Badge </h4>
								<p class="mb-0 subtitle">add <code>.badge-rounded</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-primary">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-secondary">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-success">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-danger">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-warning">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-info">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-light">Rounded</a>
									<a href="javascript:void(0)"
										class="badge badge-rounded badge-outline-dark">Rounded</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Outline Circle Badge </h4>
								<p class="mb-0 subtitle">add <code>.badge-circle</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-primary">1</a>
									<a href="javascript:void(0)"
										class="badge badge-circle badge-outline-secondary">2</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-success">3</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-danger">4</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-warning">5</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-info">6</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-light">7</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-outline-dark">8</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Circle Badge </h4>
								<p class="mb-0 subtitle">add <code>.badge-circle</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-circle badge-primary">1</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-secondary">2</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-success">3</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-danger">4</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-warning">5</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-info">6</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-light text-dark">7</a>
									<a href="javascript:void(0)" class="badge badge-circle badge-dark">8</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Outline Badge </h4>
								<p class="mb-0 subtitle">Default bootstrap outline baadge</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-outline-primary">1</a>
									<a href="javascript:void(0)" class="badge badge-outline-secondary">2</a>
									<a href="javascript:void(0)" class="badge badge-outline-success">3</a>
									<a href="javascript:void(0)" class="badge badge-outline-danger">4</a>
									<a href="javascript:void(0)" class="badge badge-outline-warning">5</a>
									<a href="javascript:void(0)" class="badge badge-outline-info">6</a>
									<a href="javascript:void(0)" class="badge badge-outline-light">7</a>
									<a href="javascript:void(0)" class="badge badge-outline-dark">8</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Number Badge </h4>
								<p class="mb-0 subtitle">Default bootstrap outline baadge</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-primary">1</a>
									<a href="javascript:void(0)" class="badge badge-secondary">2</a>
									<a href="javascript:void(0)" class="badge badge-success">3</a>
									<a href="javascript:void(0)" class="badge badge-danger">4</a>
									<a href="javascript:void(0)" class="badge badge-warning">5</a>
									<a href="javascript:void(0)" class="badge badge-info">6</a>
									<a href="javascript:void(0)" class="badge badge-light text-dark">7</a>
									<a href="javascript:void(0)" class="badge badge-dark">8</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Badge Sizes </h4>
								<p class="mb-0 subtitle">add <code>.badge-xs .badge-sm .badge-md .badge-lg
										.badge-xl</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="bootstrap-badge">
									<a href="javascript:void(0)" class="badge badge-xs badge-primary">xs</a>
									<a href="javascript:void(0)" class="badge badge-sm badge-secondary">sm</a>
									<a href="javascript:void(0)" class="badge badge-md badge-success">md</a>
									<a href="javascript:void(0)" class="badge badge-lg badge-danger">lg</a>
									<a href="javascript:void(0)" class="badge badge-xl badge-warning">xl</a>
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