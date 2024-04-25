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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Product Detail</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-3 col-lg-6 col-md-12 col-xxl-5 ">
										<!-- Tab panes -->
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
												aria-labelledby="home-tab" tabindex="0">
												<img class="img-fluid rounded " src="images/product/1.jpg" alt="/">
											</div>
											<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
												aria-labelledby="profile-tab" tabindex="0">
												<img class="img-fluid  rounded" src="images/product/2.jpg" alt="/">
											</div>
											<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
												aria-labelledby="contact-tab" tabindex="0">
												<img class="img-fluid rounded" src="images/product/3.jpg" alt="/">
											</div>
											<div class="tab-pane fade" id="end-tab-pane" role="tabpanel"
												aria-labelledby="end-tab" tabindex="0">
												<img class="img-fluid rounded" src="images/product/3.jpg" alt="/">
											</div>

										</div>
										<div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
											<!-- Nav tabs -->

											<ul class="nav nav-tabs slide-item-list mt-3" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<a href="#first" class="nav-link active" id="home-tab"
														data-bs-toggle="tab" data-bs-target="#home-tab-pane" role="tab"
														aria-controls="home-tab-pane" aria-selected="true"><img
															class="img-fluid me-2 rounded" src="images/tab/1.jpg"
															alt="/" width="50"></a>
												</li>
												<li class="nav-item" role="presentation">
													<a href="#second" class="nav-link" id="profile-tab"
														data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
														role="tab" aria-controls="profile-tab-pane"
														aria-selected="false"><img class="img-fluid me-2 rounded"
															src="images/tab/2.jpg" alt="/" width="50"></a>
												</li>
												<li class="nav-item" role="presentation">
													<a href="#third" class="nav-link" id="contact-tab"
														data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
														role="tab" aria-controls="contact-tab-pane"
														aria-selected="false"><img class="img-fluid me-2 rounded"
															src="images/tab/3.jpg" alt="/" width="50"></a>
												</li>
												<li class="nav-item" role="presentation">
													<a href="#for" class="nav-link" id="end-tab" data-bs-toggle="tab"
														data-bs-target="#end-tab-pane" role="tab"
														aria-controls="end-tab-pane" aria-selected="false"><img
															class="img-fluid rounded" src="images/tab/4.jpg" alt="/"
															width="50"></a>
												</li>

											</ul>

										</div>
									</div>
									<!--Tab slider End-->
									<div class="col-xl-9 col-lg-6  col-md-12 col-xxl-7 col-sm-12">
										<div class="product-detail-content">
											<!--Product details-->
											<div class="new-arrival-content pr">
												<h4>Double Sided Cheese Brust Pizza</h4>
												<div class="comment-review star-rating">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa-solid fa-star-half-stroke"></i></li>
														<li><i class="fa-solid fa-star-half-stroke"></i></li>
													</ul>
													<span class="review-text">(34 reviews) / </span><a
														class="product-review" href="#" data-bs-toggle="modal"
														data-bs-target="#reviewModal">Write a review?</a>
												</div>
												<div class="d-table mb-2">
													<p class="price float-left d-block">$325.00</p>
												</div>
												<p>Availability: <span class="item"> In stock <i
															class="fa fa-shopping-basket"></i></span>
												</p>
												<p>Product code: <span class="item">0405689</span> </p>
												<p>Brand: <span class="item">Lee</span></p>
												<p>Product tags:&nbsp;&nbsp;
													<span class="badge badge-success light">Cheese</span>
													<span class="badge badge-success light">Bread</span>
													<span class="badge badge-success light">Garlic</span>
													<span class="badge badge-success light">Vegies</span>
												</p>
												<p class="text-content">There are many variations of passages of Lorem
													Ipsum available, but the majority have suffered alteration in some
													form, by injected humour, or randomised words which don't look even
													slightly believable.
													If you are going to use a passage of Lorem Ipsum, you need to be
													sure there isn't anything embarrassing.</p>
												<div class="d-flex align-items-end flex-wrap mt-4">
													<div class="filtaring-area mb-3 me-3">
														<div class="size-filter">
															<h4 class="m-b-15">Select size</h4>

															<div class="btn-group mb-sm-0 mb-2" role="group"
																aria-label="Basic radio toggle button group">
																<input type="radio" class="form-check-input btn-check"
																	name="btnradio" id="btnradio1" checked="">
																<label
																	class="form-check-label btn btn-outline-primary mb-0"
																	for="btnradio1">XS</label>

																<input type="radio" class="form-check-input btn-check"
																	name="btnradio" id="btnradio2">
																<label
																	class="form-check-label btn btn-outline-primary mb-0"
																	for="btnradio2">SM</label>

																<input type="radio" class="form-check-input btn-check"
																	name="btnradio" id="btnradio3">
																<label
																	class="form-check-label btn btn-outline-primary mb-0"
																	for="btnradio3">MD</label>

																<input type="radio" class="form-check-input btn-check"
																	name="btnradio" id="btnradio4">
																<label
																	class="form-check-label btn btn-outline-primary mb-0"
																	for="btnradio4">LG</label>

																<input type="radio" class="form-check-input btn-check"
																	name="btnradio" id="btnradio5">
																<label
																	class="form-check-label btn btn-outline-primary mb-0"
																	for="btnradio5">XL</label>
															</div>
														</div>
													</div>
													<!--Quantity start-->
													<div class="col-2 px-0  mb-3 me-3">
														<input type="number" name="num"
															class="form-control input-btn input-number" value="1">
													</div>
													<!--Quanatity End-->
													<div class="shopping-cart  mb-3 me-3">
														<a class="btn btn-primary" href="javascript:void(0)"><i
																class="fa fa-shopping-basket me-2"></i>Add
															to cart</a>
													</div>
												</div>
											</div>
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
										<div class="form-group mb-3">
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