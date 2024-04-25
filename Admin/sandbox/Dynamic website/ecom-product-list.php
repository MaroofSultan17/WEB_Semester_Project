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
	<link rel="stylesheet" type="text/css" href="vendor/star-rating/star-rating-svg.css">
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
							<li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Product List</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-xxl-4 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="row m-b-30">
									<div class="col-md-5 col-xxl-12">
										<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
											<div class="new-arrivals-img-contnent">
												<img class="img-fluid" src="images/product/2.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-md-7 col-xxl-12">
										<div class="new-arrival-content position-relative">
											<h4><a href="ecom-product-detail.php">Double Cheese Pizza</a></h4>
											<div class="comment-review star-rating">
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa-solid fa-star-half-stroke"></i></li>
													<li><i class="fa-solid fa-star-half-stroke"></i></li>
												</ul>
												<span class="review-text fs-14">(34 reviews) / </span><a
													class="product-review" href="javascript:void(0);"
													data-bs-toggle="modal" data-bs-target="#reviewModal">Write a
													review?</a>
												<p class="price">$320.00</p>
											</div>
											<p><span class="text-black">Availability:</span> <span class="item"> In
													stock <i class="fa fa-check-circle text-success"></i></span></p>
											<p><span class="text-black">Product code:</span> <span
													class="item">0405689</span> </p>
											<p><span class="text-black">Brand:</span> <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum
												available, but the majority have suffered alteration in some form, by
												injected humour, or randomised words.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xxl-4 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="row m-b-30">
									<div class="col-md-5 col-xxl-12">
										<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
											<div class="new-arrivals-img-contnent">
												<img class="img-fluid" src="images/product/3.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-md-7 col-xxl-12">
										<div class="new-arrival-content position-relative">
											<h4><a href="ecom-product-detail.php">Paneer Double Cheese Pizza</a></h4>
											<div class="comment-review star-rating">
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa-solid fa-star-half-stroke"></i></li>
													<li><i class="fa-solid fa-star-half-stroke"></i></li>
												</ul>
												<span class="review-text fs-14">(24 reviews) / </span><a
													class="product-review" href="javascript:void(0);"
													data-bs-toggle="modal" data-bs-target="#reviewModal">Write a
													review?</a>
												<p class="price">$325.00</p>
											</div>
											<p><span class="text-black">Availability:</span> <span class="item"> In
													stock <i class="fa fa-check-circle text-success"></i></span></p>
											<p><span class="text-black">Product code:</span> <span
													class="item">0405689</span> </p>
											<p><span class="text-black">Brand:</span> <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum
												available, but the majority have suffered alteration in some form, by
												injected humour, or randomised words.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xxl-4 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="row m-b-30">
									<div class="col-md-5 col-xxl-12">
										<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
											<div class="new-arrivals-img-contnent">
												<img class="img-fluid" src="images/product/4.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-md-7 col-xxl-12">
										<div class="new-arrival-content position-relative">
											<h4><a href="ecom-product-detail.php">Pasta Pizza Delicious</a></h4>
											<div class="comment-review star-rating">
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span class="review-text fs-14">(15 reviews) / </span><a
													class="product-review" href="javascript:void(0);"
													data-bs-toggle="modal" data-bs-target="#reviewModal">Write a
													review?</a>
												<p class="price">$480.00</p>
											</div>
											<p><span class="text-black">Availability:</span> <span class="item"> In
													stock <i class="fa fa-check-circle text-success"></i></span></p>
											<p><span class="text-black">Product code:</span> <span
													class="item">0405689</span> </p>
											<p><span class="text-black">Brand:</span> <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum
												available, but the majority have suffered alteration in some form, by
												injected humour, or randomised words.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xxl-4 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="row m-b-30">
									<div class="col-md-5 col-xxl-12">
										<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
											<div class="new-arrivals-img-contnent">
												<img class="img-fluid" src="images/product/5.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-md-7 col-xxl-12">
										<div class="new-arrival-content position-relative">
											<h4><a href="ecom-product-detail.php">Our Special OTC Pizza</a></h4>
											<div class="comment-review star-rating">
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span class="review-text fs-14">(34 reviews) / </span><a
													class="product-review" href="javascript:void(0);"
													data-bs-toggle="modal" data-bs-target="#reviewModal">Write a
													review?</a>
												<p class="price">$658.00</p>
											</div>
											<p><span class="text-black">Availability:</span> <span class="item"> In
													stock <i class="fa fa-check-circle text-success"></i></span></p>
											<p><span class="text-black">Product code:</span> <span
													class="item">0405689</span> </p>
											<p><span class="text-black">Brand:</span> <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum
												available, but the majority have suffered alteration in some form, by
												injected humour, or randomised words.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xxl-4 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="row m-b-30">
									<div class="col-md-5 col-xxl-12">
										<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
											<div class="new-arrivals-img-contnent">
												<img class="img-fluid" src="images/product/6.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-md-7 col-xxl-12">
										<div class="new-arrival-content position-relative">
											<h4><a href="ecom-product-detail.php">Chilli Pepper Veg Pizza</a></h4>
											<div class="comment-review star-rating">
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span class="review-text fs-14">(34 reviews) / </span><a
													class="product-review" href="javascript:void(0);"
													data-bs-toggle="modal" data-bs-target="#reviewModal">Write a
													review?</a>
												<p class="price">$280.00</p>
											</div>
											<p><span class="text-black">Availability:</span> <span class="item"> In
													stock <i class="fa fa-check-circle text-success"></i></span></p>
											<p><span class="text-black">Product code:</span> <span
													class="item">0405689</span> </p>
											<p><span class="text-black">Brand:</span> <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum
												available, but the majority have suffered alteration in some form, by
												injected humour, or randomised words.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xxl-4 col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="row m-b-30">
									<div class="col-md-5 col-xxl-12">
										<div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
											<div class="new-arrivals-img-contnent">
												<img class="img-fluid" src="images/product/7.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-md-7 col-xxl-12">
										<div class="new-arrival-content position-relative">
											<h4><a href="ecom-product-detail.php">Mixed Fruits Special Pizza</a></h4>
											<div class="comment-review star-rating">
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span class="review-text fs-14">(34 reviews) / </span><a
													class="product-review" href="javascript:void(0);"
													data-bs-toggle="modal" data-bs-target="#reviewModal">Write a
													review?</a>
												<p class="price">$600.00</p>
											</div>
											<p><span class="text-black">Availability:</span> <span class="item"> In
													stock <i class="fa fa-check-circle text-success"></i></span></p>
											<p><span class="text-black">Product code:</span> <span
													class="item">0405689</span> </p>
											<p><span class="text-black">Brand:</span> <span class="item">Lee</span></p>
											<p class="text-content">There are many variations of passages of Lorem Ipsum
												available, but the majority have suffered alteration in some form, by
												injected humour, or randomised words.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal">
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="text-center mb-4">
											<img class="img-fluid rounded" width="78" src="images/avatar/1.jpg"
												alt="DexignZone">
										</div>
										<div class="form-group">
											<div class="rating-widget mb-4 text-center">
												<!-- Rating Stars Box -->
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">RATE</button>
									</form>
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
	<script src="js/custom.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Rating -->
	<script src="vendor/star-rating/jquery.star-rating-svg.js"></script>

	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>