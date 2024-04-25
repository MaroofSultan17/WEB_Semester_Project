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
		<div class="content-body btn-page">
			<div class="container-fluid">
				<div class="row page-titles mx-0">
					<div class="col-sm-6 p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<span>Buttons</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Buttons</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Buttons</h4>
								<p class="mb-0 subtitle">Default button style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary">Primary</button>
								<button type="button" class="btn btn-secondary">Secondary</button>
								<button type="button" class="btn btn-success">Success</button>
								<button type="button" class="btn btn-danger">Danger</button>
								<button type="button" class="btn btn-warning">Warning</button>
								<button type="button" class="btn btn-info">Info</button>
								<button type="button" class="btn btn-light">Light</button>
								<button type="button" class="btn btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Buttons</h4>
								<p class="mb-0 subtitle">Button Light style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn light btn-primary">Primary</button>
								<button type="button" class="btn light btn-secondary">Secondary</button>
								<button type="button" class="btn light btn-success">Success</button>
								<button type="button" class="btn light btn-danger">Danger</button>
								<button type="button" class="btn light btn-warning">Warning</button>
								<button type="button" class="btn light btn-info">Info</button>
								<button type="button" class="btn light btn-light">Light</button>
								<button type="button" class="btn light btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Outline Buttons</h4>
								<p class="mb-0 subtitle">Default outline button style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-outline-primary">Primary</button>
								<button type="button" class="btn btn-outline-secondary">Secondary</button>
								<button type="button" class="btn btn-outline-success">Success</button>
								<button type="button" class="btn btn-outline-danger">Danger</button>
								<button type="button" class="btn btn-outline-warning">Warning</button>
								<button type="button" class="btn btn-outline-info">Info</button>
								<button type="button" class="btn btn-outline-light">Light</button>
								<button type="button" class="btn btn-outline-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button Sizes</h4>
								<p class="mb-0 subtitle">add <code>.btn-lg .btn-sm .btn-xs</code> to change the style
								</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary btn-lg">Large Button</button>
								<button type="button" class="btn btn-primary">Default Button</button>
								<button type="button" class="btn btn-primary btn-sm">Small Button</button>
								<button type="button" class="btn btn-primary btn-xs">Extra Small Button</button>
								<button type="button" class="btn btn-primary btn-xxs">Extra Small Button</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Outline Button Sizes</h4>
								<p class="mb-0 subtitle">add <code>.btn-lg .btn-sm .btn-xs</code> to change the style
								</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-outline-primary btn-lg">Large button</button>
								<button type="button" class="btn btn-outline-primary">Default button</button>
								<button type="button" class="btn btn-outline-primary btn-md">Small button</button>
								<button type="button" class="btn btn-outline-primary btn-sm">Small button</button>
								<button type="button" class="btn btn-outline-primary btn-xs">Extra small button</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Rounded Buttons</h4>
								<p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
							</div>
							<div class="card-body">
								<!-- <h4 class="card-title"></h4> -->
								<button type="button" class="btn btn-rounded btn-primary">Primary</button>
								<button type="button" class="btn btn-rounded btn-secondary">Secondary</button>
								<button type="button" class="btn btn-rounded btn-success">Success</button>
								<button type="button" class="btn btn-rounded btn-danger">Danger</button>
								<button type="button" class="btn btn-rounded btn-warning">Warning</button>
								<button type="button" class="btn btn-rounded btn-info">Info</button>
								<button type="button" class="btn btn-rounded btn-light">Light</button>
								<button type="button" class="btn btn-rounded btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Rounded outline Buttons</h4>
								<p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
							</div>
							<div class="card-body">
								<div class="rounded-button">
									<button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
									<button type="button"
										class="btn btn-rounded btn-outline-secondary">Secondary</button>
									<button type="button" class="btn btn-rounded btn-outline-success">Success</button>
									<button type="button" class="btn btn-rounded btn-outline-danger">Danger</button>
									<button type="button" class="btn btn-rounded btn-outline-warning">Warning</button>
									<button type="button" class="btn btn-rounded btn-outline-info">Info</button>
									<button type="button" class="btn btn-rounded btn-outline-light">Light</button>
									<button type="button" class="btn btn-rounded btn-outline-dark">Dark</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button Right icons</h4>
								<p class="mb-0 subtitle">add <code>.btn-icon-end</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary">Add to cart <span class="btn-icon-end"><i
											class="fa fa-shopping-cart"></i></span>
								</button>
								<button type="button" class="btn btn-info">Add to wishlist <span class="btn-icon-end"><i
											class="fa fa-heart"></i></span>
								</button>
								<button type="button" class="btn btn-danger">Remove <span class="btn-icon-end"><i
											class="fa fa-close"></i></span>
								</button>
								<button type="button" class="btn btn-secondary">Sent message <span
										class="btn-icon-end"><i class="fa fa-envelope"></i></span>
								</button>
								<button type="button" class="btn btn-warning">Add bookmark <span class="btn-icon-end"><i
											class="fa fa-star"></i></span>
								</button>
								<button type="button" class="btn btn-success">Success <span class="btn-icon-end"><i
											class="fa fa-check"></i></span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Button Left icons</h4>
								<p class="mb-0 subtitle">add <code>.btn-icon-start</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-rounded btn-primary"><span
										class="btn-icon-start text-primary"><i class="fa fa-shopping-cart"></i>
									</span>Buy</button>
								<button type="button" class="btn btn-rounded btn-info"><span
										class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
									</span>Add</button>
								<button type="button" class="btn btn-rounded btn-danger"><span
										class="btn-icon-start text-danger"><i class="fa fa-envelope color-danger"></i>
									</span>Email</button>
								<button type="button" class="btn btn-rounded btn-secondary"><span
										class="btn-icon-start text-secondary"><i
											class="fa fa-share-alt color-secondary"></i> </span>Share</button>
								<button type="button" class="btn btn-rounded btn-warning"><span
										class="btn-icon-start text-warning"><i class="fa fa-download color-warning"></i>
									</span>Download</button>
								<button type="button" class="btn btn-rounded btn-success"><span
										class="btn-icon-start text-success"><i class="fa fa-upload color-success"></i>
									</span>Upload</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Square Buttons</h4>
								<p class="mb-0 subtitle">add <code>.btn-square</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn  btn-square btn-primary">Primary</button>
								<button type="button" class="btn  btn-square btn-secondary">Secondary</button>
								<button type="button" class="btn  btn-square btn-success">Success</button>
								<button type="button" class="btn  btn-square btn-danger">Danger</button>
								<button type="button" class="btn  btn-square btn-warning">Warning</button>
								<button type="button" class="btn  btn-square btn-info">Info</button>
								<button type="button" class="btn  btn-square btn-light">Light</button>
								<button type="button" class="btn  btn-square btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Square Outline Buttons</h4>
								<p class="mb-0 subtitle">add <code>.btn-square</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-square btn-outline-primary">Primary</button>
								<button type="button" class="btn btn-square btn-outline-secondary">Secondary</button>
								<button type="button" class="btn btn-square btn-outline-success">Success</button>
								<button type="button" class="btn btn-square btn-outline-danger">Danger</button>
								<button type="button" class="btn btn-square btn-outline-warning">Warning</button>
								<button type="button" class="btn btn-square btn-outline-info">Info</button>
								<button type="button" class="btn btn-square btn-outline-light">Light</button>
								<button type="button" class="btn btn-square btn-outline-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Rounded Button</h4>
								<p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-rounded btn-primary">Primary</button>
								<button type="button" class="btn btn-rounded btn-secondary">Secondary</button>
								<button type="button" class="btn btn-rounded btn-success">Success</button>
								<button type="button" class="btn btn-rounded btn-danger">Danger</button>
								<button type="button" class="btn btn-rounded btn-warning">Warning</button>
								<button type="button" class="btn btn-rounded btn-info">Info</button>
								<button type="button" class="btn btn-rounded btn-light">Light</button>
								<button type="button" class="btn btn-rounded btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Rounded outline Buttons</h4>
								<p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
								<button type="button" class="btn btn-rounded btn-outline-secondary">Secondary</button>
								<button type="button" class="btn btn-rounded btn-outline-success">Success</button>
								<button type="button" class="btn btn-rounded btn-outline-danger">Danger</button>
								<button type="button" class="btn btn-rounded btn-outline-warning">Warning</button>
								<button type="button" class="btn btn-rounded btn-outline-info">Info</button>
								<button type="button" class="btn btn-rounded btn-outline-light">Light</button>
								<button type="button" class="btn btn-rounded btn-outline-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Dropdown Button</h4>
								<p class="mb-0 subtitle">Default dropdown button style</p>
							</div>
							<div class="card-body">
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-primary dropdown-toggle"
										data-bs-toggle="dropdown">Primary</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
									</div>
								</div>
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-secondary dropdown-toggle"
										data-bs-toggle="dropdown">Secondary</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
									</div>
								</div>
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-success dropdown-toggle"
										data-bs-toggle="dropdown">Success</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
									</div>
								</div>
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-warning dropdown-toggle"
										data-bs-toggle="dropdown">Warning</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
									</div>
								</div>
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-danger dropdown-toggle"
										data-bs-toggle="dropdown">Danger</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
										<a class="dropdown-item" href="javascript:void()">Dropdown link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Buttons Transparent</h4>
								<p class="mb-0 subtitle">Button transparent style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn tp-btn btn-primary">Primary</button>
								<button type="button" class="btn tp-btn btn-secondary">Secondary</button>
								<button type="button" class="btn tp-btn btn-success">Success</button>
								<button type="button" class="btn tp-btn btn-danger">Danger</button>
								<button type="button" class="btn tp-btn btn-warning">Warning</button>
								<button type="button" class="btn tp-btn btn-info">Info</button>
								<button type="button" class="btn tp-btn btn-light">Light</button>
								<button type="button" class="btn tp-btn btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Buttons Transparent Light</h4>
								<p class="mb-0 subtitle">Button transparent light style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn tp-btn-light btn-primary">Primary</button>
								<button type="button" class="btn tp-btn-light btn-secondary">Secondary</button>
								<button type="button" class="btn tp-btn-light btn-success">Success</button>
								<button type="button" class="btn tp-btn-light btn-danger">Danger</button>
								<button type="button" class="btn tp-btn-light btn-warning">Warning</button>
								<button type="button" class="btn tp-btn-light btn-info">Info</button>
								<button type="button" class="btn tp-btn-light btn-light">Light</button>
								<button type="button" class="btn tp-btn-light btn-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Disabled Button</h4>
								<p class="mb-0 subtitle">add <code>disabled="disabled"</code> to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-rounded btn-primary"
									disabled="disabled">Primary</button>
								<button type="button" class="btn btn-rounded btn-secondary"
									disabled="disabled">Secondary</button>
								<button type="button" class="btn btn-rounded btn-success"
									disabled="disabled">Success</button>
								<button type="button" class="btn btn-rounded btn-danger"
									disabled="disabled">Danger</button>
								<button type="button" class="btn btn-rounded btn-warning"
									disabled="disabled">Warning</button>
								<button type="button" class="btn btn-rounded btn-info" disabled="disabled">Info</button>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header d-block">
								<h4 class="card-title">Socia icon Buttons with Name</h4>
								<p class="mb-0 subtitle">add <code>.btn-facebook, .btn-twitter, .btn-youtube...</code>
									to change the style</p>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-facebook">Facebook <span class="btn-icon-end"><i
											class="fa-brands fa-facebook-f"></i></span>
								</button>
								<button type="button" class="btn btn-twitter">Twitter <span class="btn-icon-end"><i
											class="fa-brands fa-twitter"></i></span>
								</button>
								<button type="button" class="btn btn-youtube">Youtube <span class="btn-icon-end"><i
											class="fa-brands fa-youtube"></i></span>
								</button>
								<button type="button" class="btn btn-instagram">Instagram <span class="btn-icon-end"><i
											class="fa-brands fa-instagram"></i></span>
								</button>
								<button type="button" class="btn btn-pinterest">Pinterest <span class="btn-icon-end"><i
											class="fa-brands fa-square-pinterest"></i></span>
								</button>
								<button type="button" class="btn btn-linkedin">Linkedin <span class="btn-icon-end"><i
											class="fa-brands fa-linkedin-in"></i></span>
								</button>
								<button type="button" class="btn btn-google-plus">Google + <span class="btn-icon-end"><i
											class="fa-brands fa-google-plus-g"></i></span>
								</button>
								<button type="button" class="btn btn-google">Google <span class="btn-icon-end"><i
											class="fa-brands fa-google"></i></span>
								</button>
								<button type="button" class="btn btn-snapchat">Snapchat <span class="btn-icon-end"><i
											class="fa-brands fa-snapchat"></i></span>
								</button>
								<button type="button" class="btn btn-whatsapp">Whatsapp <span class="btn-icon-end"><i
											class="fa-brands fa-whatsapp"></i></span>
								</button>
								<button type="button" class="btn btn-tumblr">Tumblr <span class="btn-icon-end"><i
											class="fa-brands fa-tumblr"></i></span>
								</button>
								<button type="button" class="btn btn-reddit">Reddit <span class="btn-icon-end"><i
											class="fa-brands fa-reddit"></i></span>
								</button>
								<button type="button" class="btn btn-spotify">Spotify <span class="btn-icon-end"><i
											class="fa-brands fa-spotify"></i></span>
								</button>
								<button type="button" class="btn btn-yahoo">Yahoo <span class="btn-icon-end"><i
											class="fa-brands fa-yahoo"></i></span>
								</button>
								<button type="button" class="btn btn-dribbble">Dribbble <span class="btn-icon-end"><i
											class="fa-brands fa-dribbble"></i></span>
								</button>
								<button type="button" class="btn btn-skype">Skype <span class="btn-icon-end"><i
											class="fa-brands fa-skype"></i></span>
								</button>
								<button type="button" class="btn btn-quora">Quora <span class="btn-icon-end"><i
											class="fa-brands fa-quora"></i></span>
								</button>
								<button type="button" class="btn btn-vimeo">Vimeo <span class="btn-icon-end"><i
											class="fa-brands fa-vimeo-v"></i></span>
								</button>
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