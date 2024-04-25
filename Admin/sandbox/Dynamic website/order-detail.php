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
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
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
				<div class="d-flex mb-3 mb-lg-4 align-items-center">
					<div class="me-auto d-none d-lg-block">
						<div class="d-flex flex-wrap align-items-center">
							<h3 class="text-black font-w600 mb-0 fs-22 me-5">#INV-0012456</h3>
							<div class="d-flex">
								<a class="mb-0 text-black font-w500 fs-18" href="javascript:void(0);">Orders / </a>
								<a class="mb-0 font-w400 fs-18 ms-2" href="javascript:void(0);"> Order Detaills </a>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center">
						<a href="javascript:void(0);" class="btn btn-outline-danger text-nowrap rounded-0 me-3 ">Cancel
							Order</a>
						<div class="dropdown">
							<div class="btn btn-success dropdown-toggle d-block text-white rounded-0"
								data-bs-toggle="dropdown">
								<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M14.7576 15.8041H16.5252C16.4832 16.2551 16.1031 16.6094 15.6414 16.6094C15.1797 16.6094 14.7995 16.2551 14.7576 15.8041ZM8.32598 16.6094C8.78766 16.6094 9.16781 16.2551 9.20977 15.8041H7.4422C7.48411 16.2551 7.86427 16.6094 8.32598 16.6094ZM6.11719 14.6791H13.0004V8.56444V7.39064H6.11719V14.6791ZM24 12C24 18.6168 18.6168 24 12 24C5.38317 24 0 18.6168 0 12C0 5.38317 5.38317 0 12 0C18.6168 0 24 5.38317 24 12ZM19.0078 11.7096C19.0078 11.5545 18.9782 11.4095 18.9172 11.2662L17.844 8.73923C17.6538 8.29134 17.2027 8.00194 16.695 8.00194H14.1254V6.82814C14.1254 6.5175 13.8735 6.26564 13.5629 6.26564H5.55469C5.24405 6.26564 4.99219 6.5175 4.99219 6.82814V15.2416C4.99219 15.5523 5.24405 15.8041 5.55469 15.8041H6.31509C6.35873 16.8758 7.24378 17.7344 8.32598 17.7344C9.40819 17.7344 10.2932 16.8758 10.3369 15.8041H13.6305C13.6741 16.8758 14.5592 17.7344 15.6414 17.7344C16.7236 17.7344 17.6086 16.8758 17.6523 15.8041H18.4453C18.756 15.8041 19.0078 15.5523 19.0078 15.2416V11.7096ZM16.8086 9.17906C16.7923 9.14067 16.7392 9.12694 16.695 9.12694H14.1254V14.6791H17.8828V11.7096C17.8828 11.709 17.8828 11.7087 17.8829 11.7086C17.8825 11.7077 17.8822 11.7069 17.8818 11.706L16.8086 9.17906Z"
										fill="white" />
								</svg>
								Delivered
							</div>
							<div class="dropdown-menu dropdown-menu-left">
								<a class="dropdown-item" href="javascript:void(0);">A To Z List</a>
								<a class="dropdown-item" href="javascript:void(0);">Z To A List</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="text-center order-media">
											<img src="images/profile/Untitled-2.jpg" alt="/">
											<div>
												<h4 class="text-black mb-3 font-w600">Soleh Anderson</h4>
												<a href="javascript:void(0);"
													class="btn btn-outline-primary btn-sm">Customer</a>
											</div>
										</div>
									</div>
									<div class="card-body border-bottom">
										<div class="media align-items-center">
											<svg class="me-4" width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M22.9993 17.4712V20.7831C23.0006 21.0906 22.9375 21.3949 22.814 21.6766C22.6906 21.9583 22.5096 22.2112 22.2826 22.419C22.0556 22.6269 21.7876 22.7851 21.4958 22.8836C21.2039 22.9821 20.8947 23.0187 20.5879 22.991C17.1841 22.6219 13.9145 21.4611 11.0418 19.6019C8.36914 17.9069 6.10319 15.6455 4.40487 12.9781C2.53545 10.0981 1.37207 6.81909 1.00898 3.40674C0.981336 3.10146 1.01769 2.79378 1.11572 2.50329C1.21376 2.2128 1.37132 1.94586 1.57839 1.71947C1.78546 1.49308 2.03749 1.31221 2.31843 1.18836C2.59938 1.06451 2.90309 1.0004 3.21023 1.00011H6.52869C7.06551 0.994834 7.58594 1.18456 7.99297 1.53391C8.4 1.88326 8.66586 2.36841 8.74099 2.89892C8.88106 3.9588 9.14081 4.99946 9.5153 6.00106C9.66413 6.39619 9.69634 6.82562 9.60812 7.23847C9.51989 7.65131 9.31494 8.03026 9.01753 8.33042L7.61272 9.73245C9.18739 12.4963 11.4803 14.7847 14.2496 16.3562L15.6545 14.9542C15.9552 14.6574 16.3349 14.4528 16.7486 14.3648C17.1622 14.2767 17.5925 14.3089 17.9884 14.4574C18.992 14.8312 20.0348 15.0904 21.0967 15.2302C21.6341 15.3058 22.1248 15.576 22.4756 15.9892C22.8264 16.4024 23.0128 16.9298 22.9993 17.4712Z"
													stroke="#566069" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round"></path>
											</svg>
											<h4 class="mb-0 text-black">+51 5125 626 77</h4>
										</div>
									</div>
									<div class="card-body border-bottom">
										<div class="media align-items-center">
											<svg class="me-4" width="24" height="24" viewBox="0 0 32 32" fill="none"
												xmlns="http://www.w3.org/2000/svg" style="min-width: 24px;">
												<path
													d="M28 13.3333C28 22.6667 16 30.6667 16 30.6667C16 30.6667 4 22.6667 4 13.3333C4 10.1507 5.26428 7.09848 7.51472 4.84805C9.76516 2.59761 12.8174 1.33333 16 1.33333C19.1826 1.33333 22.2348 2.59761 24.4853 4.84805C26.7357 7.09848 28 10.1507 28 13.3333Z"
													stroke="#3E4954" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round"></path>
												<path
													d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33333 16 9.33333C13.7909 9.33333 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z"
													stroke="#3E4954" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round"></path>
											</svg>
											<h4 class="mb-0 text-black lh-base">Long Horn St. Avenue 351636 London</h4>
										</div>
									</div>
									<div class="card-body">
										<h4 class="text-black font-weight-bold mb-3 wspace-no">Note Order</h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's.</p>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="text-black font-w600">Delivery Guy</h4>
									</div>
									<div class="card-body">
										<div class="text-center order-media">
											<img src="images/profile/Untitled-1.jpg" alt="/">
											<div>
												<h4 class="mb-1 font-w600">Soleh Anderson</h4>
												<span class="fs-14 font-w400">Join since June 20, 2012</span>
											</div>
										</div>
										<div class="order-social">
											<ul class="d-flex justify-content-center">
												<li><a href="javascript:void(0);"><i class="las la-phone"></i></a></li>
												<li><a href="javascript:void(0);"><i class="las la-map-marker"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body p-0">
										<div class="table-responsive order-list">
											<table class="table items-table">
												<thead class="thead-primary">
													<tr>
														<th class="text-black font-w500 fs-20">Items</th>
														<th style="width:10%;" class="text-black font-w500 fs-20">Qty
														</th>
														<th style="width:10%;" class="text-black font-w500 fs-20">Price
														</th>
														<th
															class="my-0 text-black font-w500 fs-20 wspace-no d-md-none d-lg-table-cell">
															Total Price</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="media">
																<a href="ecom-product-detail.php"><img
																		class="me-3 img-fluid rounded"
																		src="images/card/Untitled-6.jpg"
																		alt="DexignZone"></a>
																<div class="media-body">
																	<small class="mt-0 mb-1 font-w500"><a
																			class="text-primary"
																			href="javascript:void(0);">MAIN
																			COURSE</a></small>
																	<h5 class="mt-0 mb-2 mb-sm-3"><a class="text-black"
																			href="ecom-product-detail.php">Chicken curry
																			special with cucumber</a></h5>
																	<div class="star-review d-flex fs-14">
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-gray"></i>
																		<i class="fa fa-star text-gray"></i>
																		<span class="ms-3 text-dark">(454 revies)</span>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<h4 class="my-0  font-w600">1x</h4>
														</td>
														<td>
															<h4 class="my-0  font-w600">$4.12</h4>
														</td>
														<td class="d-md-none d-lg-table-cell">
															<h4 class="my-0  font-w600">$4.12</h4>
														</td>
														<td>
															<a href="javascript:void(0);"
																class="ti-close fs-28 text-danger las la-times-circle"></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<a href="ecom-product-detail.php"><img
																		class="me-3 img-fluid rounded"
																		src="images/card/Untitled-4.jpg"
																		alt="DexignZone"></a>
																<div class="media-body">
																	<small class="mt-0 mb-1 font-w500"><a
																			class="text-primary"
																			href="javascript:void(0);">MAIN
																			COURSE</a></small>
																	<h5 class="mt-0 text-black  mb-2 mb-sm-3"><a
																			class="text-black"
																			href="ecom-product-detail.php">Watermelon
																			juice with ice</a></h5>
																	<div class="star-review d-flex fs-14">
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-gray"></i>
																		<i class="fa fa-star text-gray"></i>
																		<span class="ms-3 text-dark">(454 revies)</span>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<h4 class="my-0 font-w600">3x</h4>
														</td>
														<td>
															<h4 class="my-0 font-w600">$14.99</h4>
														</td>
														<td class="d-md-none d-lg-table-cell">
															<h4 class="my-0  font-w600">$44.97</h4>
														</td>
														<td>
															<a href="javascript:void(0);"
																class="ti-close fs-28 text-danger las la-times-circle"></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<a href="ecom-product-detail.php"><img
																		class="me-3 img-fluid rounded"
																		src="images/card/Untitled-5.jpg"
																		alt="DexignZone"></a>
																<div class="media-body">
																	<small class="mt-0 mb-1 font-w500"><a
																			class="text-primary"
																			href="javascript:void(0);">MAIN
																			COURSE</a></small>
																	<h5 class="mt-0 text-black  mb-2 mb-sm-3"><a
																			class="text-black"
																			href="ecom-product-detail.php">Italiano
																			pizza with garlic</a></h5>
																	<div class="star-review d-flex fs-14">
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-orange"></i>
																		<i class="fa fa-star text-gray"></i>
																		<i class="fa fa-star text-gray"></i>
																		<span class="ms-3 text-dark">(454 revies)</span>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<h4 class="my-0  font-w600">1x</h4>
														</td>
														<td>
															<h4 class="my-0  font-w600">$15.44</h4>
														</td>
														<td class="d-md-none d-lg-table-cell">
															<h4 class="my-0  font-w600">$15.44</h4>
														</td>
														<td>
															<a href="javascript:void(0);"
																class="ti-close fs-28 text-danger las la-times-circle"></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="widget-timeline-icon">
										<ul class="timeline">
											<li>
												<div class="icon bg-primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<h4 class="mb-2 mt-0">Order Created</h4>
													<p class="fs-14 mb-0 ">Thu, 21 Jul 2020, 11:49 AM</p>
												</a>
											</li>
											<li>
												<div class="icon bg-primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<h4 class="mb-2 mt-0">Payment Success</h4>
													<p class="fs-14 mb-0 ">Fri, 22 Jul 2020, 10:44 AM</p>
												</a>
											</li>
											<li class="border-success">
												<div class="icon bg-primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<h4 class="mb-2 mt-0">On Delivery</h4>
													<p class="fs-14 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
												</a>
											</li>
											<li>
												<div class="icon bg-success"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<h4 class="mb-2 mt-0">Order Delivered</h4>
													<p class="fs-14 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-6 col-xxl-12">
										<div class="card map-card">
											<div class="card-header">
												<div>
													<h4 class="text-black font-w600 mb-0">Track Orders</h4>
													<span class="fs-12 text-black">Lorem ipsum dolor sit</span>
												</div>
											</div>
											<div class="card-body">
												<img src="images/map.jpg" alt="/">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-xxl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="text-black font-w600">Customer Favourite</h4>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-6">
														<div class="text-center p-3">
															<div
																class="d-inline-block position-relative donut-chart-sale mb-2">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 201, 12,1)", "rgba(239, 239, 239, 1)"],   "innerRadius": 42, "radius": 10}'>5/8</span>
																<small class="text-black">66%</small>
															</div>
															<h4 class="fs-18 font-w600 text-black mb-0">Food</h4>
															<span class="fs-14 d-block">45 menus</span>
														</div>
													</div>
													<div class="col-6">
														<div class="text-center p-3">
															<div
																class="d-inline-block position-relative donut-chart-sale mb-2">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(0,164,174,1)", "rgba(239, 239, 239, 1)"],   "innerRadius": 42, "radius": 10}'>3/8</span>
																<small class="text-black">31%</small>
															</div>
															<h4 class="fs-18 font-w600 text-black mb-0">Drink</h4>
															<span class="fs-14 d-block">21 menus</span>
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
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<script src="js/plugins-init/piety-init.js"></script>
	<script src="js/dashboard/order-detail.js"></script>
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>



</body>

</html>