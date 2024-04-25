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
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card bg-transparent shadow-none">
							<div class="card-header flex-wrap border-0 ps-0">
								<div class="table-tabs mb-3">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#AllStatus">
												All Status
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#Published">
												Published
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " data-bs-toggle="tab" href="#Deleted">
												Deleted
											</a>
										</li>
									</ul>
								</div>
								<div class="d-flex flex-wrap align-items-center">
									<a href="javascript:void(0);" class="btn btn-outline-danger me-3 mb-3">DELETE</a>
									<a href="javascript:void(0);" class="btn btn-success me-5 mb-3">PUBLISH</a>
									<select class="form-control style-2 me-3 default-select  mb-3">
										<option>Filter</option>
										<option>Date</option>
									</select>
									<select class="form-control style-2 default-select  mb-3">
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="tab-content" id="Tab">
									<div class="tab-pane fade active show" id="AllStatus">
										<div class="row">
											<div class="col-xl-12">
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4  ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck">
																	<label class="form-check-label"
																		for="gridCheck"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-1.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">James
																		Sitepu</h3>
																	<span class="text-dark fs-14">26/04/2023, 12:42
																		PM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																m</p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600 me-xl-0 me-3">4.2
																	</h2>
																	<div class="star-review2 mb-2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger me-2 fs-14 font-w600">DELETE</a>
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck1">
																	<label class="form-check-label"
																		for="gridCheck1"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-2.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">John Doe
																	</h3>
																	<span class="text-dark fs-14">15/02/2023, 02:42
																		PM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim veniam, quis nostrud exercitation ullamco laboris
																nisi ut aliquip ex ea commodo consequat. </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">3.0</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger me-2 fs-14 font-w600">DELETE</a>
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4 ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck2">
																	<label class="form-check-label"
																		for="gridCheck2"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-3.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">Maria
																		Stan</h3>
																	<span class="text-dark fs-14">15/05/2023, 01:50
																		PM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim veniam, quis nostrud exercitation ullamco laboris
																nisi ut aliquip ex ea commodo consequat. </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.5</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger me-2 fs-14 font-w600">DELETE</a>
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4 ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck3">
																	<label class="form-check-label"
																		for="gridCheck3"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-4.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">Karry
																		Doe</h3>
																	<span class="text-dark fs-14">07/08/2023, 10:42
																		AM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.5</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger me-2 fs-14 font-w600">DELETE</a>
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0 ">
													<div class="row align-items-center py-4 px-4">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck4">
																	<label class="form-check-label"
																		for="gridCheck4"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-5.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">James
																		Sitepu</h3>
																	<span class="text-dark fs-14">20/05/2023, 09:42
																		AM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim veniam, quis nostrud exercitation ullamco laboris
																nisi ut aliquip ex ea commodo consequat. </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.2</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger me-2 fs-14 font-w600">DELETE</a>
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Published">
										<div class="row">
											<div class="col-xl-12">
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck6">
																	<label class="form-check-label"
																		for="gridCheck6"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-1.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">Carry
																		Kondy</h3>
																	<span class="text-dark fs-14">12/06/2023, 08:42
																		AM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																m</p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.2</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0">
													<div class="row align-items-center py-4 px-4 ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck10">
																	<label class="form-check-label"
																		for="gridCheck10"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-2.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">James
																		Sitepu</h3>
																	<span class="text-dark fs-14">22/04/2023, 12:42
																		AM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim veniam, quis nostrud exercitation ullamco laboris
																nisi ut aliquip ex ea commodo consequat. </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">3.0</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-success fs-14 font-w600">PUBLISH</a>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Deleted">
										<div class="row">
											<div class="col-xl-12">
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4 ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck7">
																	<label class="form-check-label"
																		for="gridCheck7"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-3.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">Marry
																		Toe</h3>
																	<span class="text-dark fs-14">18/02/2023, 10:42
																		AM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim veniam, quis nostrud exercitation ullamco laboris
																nisi ut aliquip ex ea commodo consequat. </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.5</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger fs-14 font-w600">DELETE</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0 border-bottom">
													<div class="row align-items-center py-4 px-4 ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck8">
																	<label class="form-check-label"
																		for="gridCheck8"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-4.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">Charlie
																		Koes</h3>
																	<span class="text-dark fs-14">10/07/2023, 09:42
																		AM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.5</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger fs-14 font-w600">DELETE</a>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="card review-table p-0 border-0">
													<div class="row align-items-center py-4 px-4 ">
														<div class="col-xl-4 col-xxl-4 col-lg-5 col-md-12">
															<div class="media align-items-center">
																<div class="form-check custom-checkbox me-2">
																	<input type="checkbox" class="form-check-input"
																		id="gridCheck9">
																	<label class="form-check-label"
																		for="gridCheck9"></label>
																</div>
																<img class="me-3 img-fluid " width="100"
																	src="images/table/Untitled-5.jpg" alt="DexignZone">
																<div class="card-body p-0">
																	<p class="text-primary fs-14 mb-0">#C01234</p>
																	<h3 class="fs-18 text-black font-w600 mb-2">Anina
																		Gonm</h3>
																	<span class="text-dark fs-14">03/05/2023, 01:42
																		PM</span>
																</div>
															</div>
														</div>
														<div class="col-xl-5 col-xxl-4 col-lg-7 col-md-12 mt-3 mt-lg-0">
															<p class="mb-0 text-dark">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua. Ut enim ad
																minim veniam, quis nostrud exercitation ullamco laboris
																nisi ut aliquip ex ea commodo consequat. </p>
														</div>
														<div
															class="col-xl-3 col-xxl-4 col-lg-7 col-md-12 offset-lg-5 offset-xl-0 mt-xl-0 mt-3">
															<div class="row align-items-center gx-4">
																<div
																	class="text-xl-center start-bx col-xl-7 col-sm-9 col-lg-8 col-6">
																	<h2 class="text-black font-w600">4.2</h2>
																	<div class="star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																</div>
																<div class="col-xl-5 col-sm-3 col-lg-4 col-6 text-end">
																	<a href="javascript:void(0);"
																		class="text-danger fs-14 font-w600">DELETE</a>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
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