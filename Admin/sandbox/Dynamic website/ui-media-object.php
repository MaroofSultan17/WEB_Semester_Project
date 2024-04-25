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
							<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Media Object</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Media Object</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<div class="media">
										<img class="me-3 img-fluid rounded" width="60" src="images/avatar/1.jpg"
											alt="DexignZone">
										<div class="media-body">
											<h5 class="mt-0">Media heading</h5>
											<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
												scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate
												at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
												fringilla. Donec lacinia congue felis in faucibus.</p>
										</div>
									</div>
									<div class="media mt-4">
										<img class="me-3 img-fluid rounded" width="60" src="images/avatar/7.jpg"
											alt="DexignZone">
										<div class="media-body">
											<h5 class="mt-0">Media heading</h5>
											<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
												scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate
												at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
												fringilla. Donec lacinia congue felis in faucibus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Nesting</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<div class="media">
										<img class="me-3 rounded" width="60" src="images/avatar/2.jpg" alt="DexignZone">
										<div class="media-body">
											<h5 class="mt-0">Media heading</h5>
											<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
												scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate
												at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
												fringilla. Donec lacinia congue felis in faucibus.</p>

											<div class="media mt-4">
												<a class="pe-3" href="javascript:void(0);">
													<img class="rounded" width="60" src="images/avatar/3.jpg"
														alt="DexignZone">
												</a>
												<div class="media-body">
													<h5 class="mt-0">Media heading</h5>
													<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla
														vel metus scelerisque ante sollicitudin. Cras purus odio,
														vestibulum in vulputate at, tempus viverra turpis. Fusce
														condimentum nunc ac nisi vulputate fringilla. Donec lacinia
														congue felis in faucibus.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Align Top</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<div class="media">
										<img class="align-self-start me-3 rounded" width="60" src="images/avatar/4.jpg"
											alt="DexignZone">
										<div class="media-body">
											<h5 class="mt-0">Top-aligned media</h5>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
												ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
												viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
												Donec lacinia congue felis in faucibus.</p>
											<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
												ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient
												montes, nascetur ridiculus mus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Align Center</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<div class="media">
										<img class="align-self-center me-3 rounded" width="60" src="images/avatar/5.jpg"
											alt="DexignZone">
										<div class="media-body">
											<h5 class="mt-0">Center-aligned media</h5>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
												ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
												viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
												Donec lacinia congue felis in faucibus.</p>
											<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
												ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient
												montes, nascetur ridiculus mus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Align Bottom</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<div class="media">
										<img class="align-self-end me-3 rounded" width="60" src="images/avatar/6.jpg"
											alt="DexignZone">
										<div class="media-body">
											<h5 class="mt-0">Bottom-aligned media</h5>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
												ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
												viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
												Donec lacinia congue felis in faucibus.</p>
											<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
												ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient
												montes, nascetur ridiculus mus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Order</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<div class="media">
										<div class="media-body">
											<h5 class="mt-0">Media object</h5>
											<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
												scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate
												at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
												fringilla. Donec lacinia congue felis in faucibus.</p>
										</div>
										<img class="ms-3 rounded" width="60" src="images/avatar/7.jpg" alt="DexignZone">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Media list</h4>
							</div>
							<div class="card-body">
								<div class="bootstrap-media">
									<ul class="list-unstyled">
										<li class="media">
											<img class="me-3 rounded" width="60" src="images/avatar/8.jpg"
												alt="DexignZone">
											<div class="media-body">
												<h5 class="mt-0">List-based media object</h5>
												<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel
													metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
													vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
													vulputate fringilla. Donec lacinia congue felis in faucibus.
													vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
													vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
											</div>
										</li>
										<li class="media my-4">
											<img class="me-3 rounded" width="60" src="images/avatar/1.jpg"
												alt="DexignZone">
											<div class="media-body">
												<h5 class="mt-0">List-based media object</h5>
												<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel
													metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
													vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
													vulputate fringilla. Donec lacinia congue felis in faucibus.
													vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
													vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
											</div>
										</li>
										<li class="media">
											<img class="me-3 rounded" width="60" src="images/avatar/2.jpg"
												alt="DexignZone">
											<div class="media-body">
												<h5 class="mt-0">List-based media object</h5>
												<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel
													metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
													vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
													vulputate fringilla. Donec lacinia congue felis in faucibus.
													vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
													vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
											</div>
										</li>
									</ul>
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