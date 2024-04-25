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
							<span>Card</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h5 class="card-title">Card title</h5>
							</div>
							<div class="card-body">
								<p class="card-text">He lay on his armour-like back, and if he lifted his head a little
									he could see his brown belly, slightly domed and divided by arches into stiff <br>
									sections. The bedding was hardly able to cover it and seemed ready to
									slide off any moment.
								</p>
							</div>
							<div class="card-footer border-0 pt-0">
								<p class="card-text d-inline">Card footer</p>
								<a href="javascript:void(0);" class="card-link float-end">Card link</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Card title</h5>
							</div>
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text and below as a natural
									lead-in to the additional content. This content is a little <br> bit longer. Some
									quick example text to build the bulk</p>
							</div>
							<div class="card-footer d-sm-flex justify-content-between align-items-center">
								<div class="card-footer-link mb-4 mb-sm-0">
									<p class="card-text text-dark d-inline">Last updated 3 mins ago</p>
								</div>

								<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-center">
							<div class="card-header">
								<h5 class="card-title">Card Title</h5>
							</div>
							<div class="card-body">

								<p class="card-text">This is a wider card with supporting text and below as a natural
									lead-in to the additional content. This content</p>
								<a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
							</div>
							<div class="card-footer">
								<p class="card-text text-dark">Last updateed 3 min ago</p>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-center">
							<div class="card-header">
								<h5 class="card-title">Special title treatment</h5>
							</div>
							<div class="card-body custom-tab-1">
								<ul class="nav nav-tabs card-body-tabs mb-3">
									<li class="nav-item"><a class="nav-link active"
											href="javascript:void(0);">Active</a>
									</li>
									<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Link</a>
									</li>
									<li class="nav-item"><a class="nav-link disabled"
											href="javascript:void(0);">Disabled</a>
									</li>
								</ul>

								<p class="card-text">With supporting text below as a natural lead-in to additional
									content.</p><a href="javascript:void(0);" class="btn btn-primary btn-card">Go
									somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-primary">
							<div class="card-header">
								<h5 class="card-title text-white">Primary card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class="btn bg-white text-primary btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-secondary">
							<div class="card-header">
								<h5 class="card-title text-white">Secondary card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class="btn bg-white text-secondary btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-success">
							<div class="card-header">
								<h5 class="card-title text-white">Success card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class="btn bg-white text-success light btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-danger">
							<div class="card-header">
								<h5 class="card-title text-white">Danger card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class=" btn bg-white text-danger btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-warning">
							<div class="card-header">
								<h5 class="card-title text-white">Warning card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class="btn bg-white text-warning btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-info">
							<div class="card-header">
								<h5 class="card-title text-white">Info card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class="btn bg-white text-info btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">
								Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card bg-light">
							<div class="card-header">
								<h5 class="card-title">Light card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p><a href="javascript:void(0);"
									class="btn btn-dark btn-card">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card text-white bg-dark">
							<div class="card-header">
								<h5 class="card-title text-white">Dark card</h5>
							</div>
							<div class="card-body mb-0">
								<p class="card-text opacity-75">Some quick example text to build on the card title and
									make up the bulk of the card's content.</p>
								<a href="javascript:void(0);" class="btn btn-light btn-card text-dark">Go
									somewhere</a>
							</div>
							<div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/card/1.png" alt="Card image cap">
							<div class="card-header">
								<h5 class="card-title">Card title</h5>
							</div>
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text text-dark">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<img class="card-img-top img-fluid" src="images/card/2.png" alt="Card image cap">
							<div class="card-header">
								<h5 class="card-title">Card title</h5>
							</div>
							<div class="card-body">
								<p class="card-text">He lay on his armour-like back, and if he lifted his head a little
								</p>
							</div>
							<div class="card-footer">
								<p class="card-text d-inline">Card footer</p>
								<a href="javascript:void(0);" class="card-link float-end">Card link</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Card title</h5>
							</div>
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text and below as a natural
									lead-in to the additional content. This content is a little</p>
							</div>
							<img class="card-img-bottom img-fluid" src="images/card/3.png" alt="Card image cap">
							<div class="card-footer">
								<p class="card-text d-inline">Card footer</p>
								<a href="javascript:void(0);" class="card-link float-end">Card link</a>
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