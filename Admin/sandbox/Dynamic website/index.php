<?php
include ('helper/config.php');
include ('helper/session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Main Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link class="main-css" href="css/style.css" rel="stylesheet">
</head>

<body>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<div id="main-wrapper">
		<?php require ('./components/nav-header.php'); ?>
		<?php require ('./components/chatbox.php'); ?>
		<?php require ('./components/header.php'); ?>
		<?php require ('./components/sidebar.php'); ?>
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="separator"></div>
										<div class="me-auto">
											<h4 class="card-title mb-2">Daily Target Income</h4>
											<p class="fs-12 mb-0">Lorem ipsum dolor sit</p>
										</div>
									</div>
									<div class="card-body  text-center">
										<div id="radialChart"></div>
										<h3 class="fs-28 text-black font-w500">$749.56</h3>
										<span class="mb-3 d-block">from $1,000</span>
										<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
										</p>
										<a href="post-details.php" class="btn btn-outline-primary">More Details</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-6 col-md-6">
								<div class="card trending-menus">
									<div class="card-header border-0">
										<div class="separator"></div>
										<div class="me-auto">
											<h4 class="text-black fs-20">Daily Trending Menus</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor</p>
										</div>

									</div>
									<div class="card-body px-0">
										<div class="dz-scroll height500 px-4" id="tredingMenus">
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#1</span>
												<div class="me-auto pe-3">
													<a href="post-details.php">
														<h2 class="text-black fs-14 font-w500">Chicken curry special
															with cucumber</h2>
													</a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
													<span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-1.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#2</span>
												<div class="me-auto pe-3">
													<a href="post-details.php">
														<h2 class="text-black fs-14 font-w500">Italiano Pizza With
															Garlic</h2>
													</a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
													<span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-2.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#3</span>
												<div class="me-auto pe-3">
													<a href="post-details.php">
														<h2 class="text-black fs-14 font-w500">Watermelon juice with ice
														</h2>
													</a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
													<span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-3.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3  tr-row align-items-center border-bottom">
												<span class="num">#4</span>
												<div class="me-auto pe-3">
													<a href="post-details.php">
														<h2 class="text-black fs-14 font-w500">Tuna Soup spinach with
															himalaya salt</h2>
													</a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
													<span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-4.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center">
												<span class="num">#5</span>
												<div class="me-auto pe-3">
													<a href="post-details.php">
														<h2 class="text-black fs-14 font-w500">Medium Spicy Spagethi
															Italiano</h2>
													</a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
													<span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-5.jpg" alt="/">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-4 col-xxl-6 col-sm-6">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="me-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28"
													fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M3.10333 12.25H4.66666V19.8333C4.66666 20.6069 4.97395 21.3487 5.52093 21.8957C6.06791 22.4427 6.80978 22.75 7.58333 22.75H8.74999C9.52354 22.75 10.2654 22.4427 10.8124 21.8957C11.3594 21.3487 11.6667 20.6069 11.6667 19.8333V12.25H13.23C13.7436 12.25 14.2362 12.0459 14.5994 11.6827C14.9626 11.3195 15.1667 10.8269 15.1667 10.3133C15.1683 9.94246 15.0608 9.57933 14.8575 9.26914L10.4533 2.41498C10.2072 2.03206 9.86883 1.71709 9.4693 1.49895C9.06977 1.28082 8.62186 1.1665 8.16666 1.1665C7.71146 1.1665 7.26355 1.28082 6.86401 1.49895C6.46448 1.71709 6.12613 2.03206 5.87999 2.41498L1.47583 9.26914C1.27256 9.57933 1.16504 9.94246 1.16666 10.3133C1.16666 10.8269 1.3707 11.3195 1.7339 11.6827C2.09709 12.0459 2.58969 12.25 3.10333 12.25Z"
														fill="#FF720D" />
													<path
														d="M24.8966 15.75H23.3333V8.16667C23.3333 7.39312 23.026 6.65125 22.479 6.10427C21.932 5.55729 21.1902 5.25 20.4166 5.25H19.25C18.4764 5.25 17.7346 5.55729 17.1876 6.10427C16.6406 6.65125 16.3333 7.39312 16.3333 8.16667V15.75H14.77C14.5156 15.75 14.2638 15.8001 14.0288 15.8974C13.7939 15.9947 13.5804 16.1374 13.4005 16.3172C13.2207 16.4971 13.078 16.7106 12.9807 16.9455C12.8834 17.1805 12.8333 17.4323 12.8333 17.6867C12.8317 18.0575 12.9392 18.4206 13.1425 18.7308L17.5466 25.585C17.7928 25.9679 18.1311 26.2829 18.5307 26.501C18.9302 26.7192 19.3781 26.8335 19.8333 26.8335C20.2885 26.8335 20.7364 26.7192 21.1359 26.501C21.5355 26.2829 21.8738 25.9679 22.12 25.585L26.5241 18.7308C26.7274 18.4206 26.8349 18.0575 26.8333 17.6867C26.8333 17.4323 26.7832 17.1805 26.6859 16.9455C26.5886 16.7106 26.4459 16.4971 26.2661 16.3172C26.0862 16.1374 25.8727 15.9947 25.6378 15.8974C25.4028 15.8001 25.151 15.75 24.8966 15.75Z"
														fill="#FF720D" />
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">892 <span
														class="text-success fs-18 font-w500">+2,7%</span></h2>
												<p class="mb-0 text-black font-w500">Orders</p>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart1" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-6 col-sm-6">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="me-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28"
													fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M14.4608 12.0692C17.0158 9.47919 16.835 5.09253 14.0816 2.72419C11.5733 0.56586 7.67079 0.711693 5.32579 3.12086C3.06246 5.44253 2.95163 9.12919 4.87079 11.5442C7.15746 14.4259 11.7716 14.7875 14.4608 12.0692Z"
														fill="#FF720D" />
													<path
														d="M4.08329 26.8334H15.75C17.78 26.8334 18.6958 25.025 18.7191 23.2342C18.7541 20.615 17.7216 17.9259 15.7091 16.1992C12.0866 13.0025 6.55663 13.3409 3.35996 16.9634C1.60996 18.9467 1.16663 21.3559 1.16663 23.9167C1.16663 25.5267 2.47329 26.8334 4.08329 26.8334Z"
														fill="#FF720D" />
													<path
														d="M25.0833 7.58333C25.0891 2.94 19.5999 0.145831 15.8374 2.85833C18.0541 5.6175 18.0541 9.54916 15.8374 12.3083C15.7849 12.3725 16.9983 12.9092 17.0916 12.9442C20.7024 14.4433 25.0774 11.5208 25.0833 7.58333Z"
														fill="#FF720D" />
													<path
														d="M19.25 13.4167C17.8908 13.4167 16.555 13.79 15.3825 14.4842C15.5983 14.3559 16.9808 15.7909 17.15 15.9775C18.8416 17.78 19.8333 20.2592 19.8333 22.75V23.9167C19.8333 24.7508 19.5766 25.5675 19.0983 26.25H23.9166C25.5266 26.25 26.8333 24.9433 26.8333 23.3333C26.8333 21.2625 26.9383 19.2617 25.9175 17.3833C25.0891 15.8609 23.7358 14.6475 22.1375 13.9825C21.2216 13.6092 20.2358 13.4167 19.25 13.4167Z"
														fill="#FF720D" />
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">9,334 <span
														class="text-danger fs-18 font-w500">-0,5%</span></h2>
												<p class="mb-0 text-black font-w500">Customers</p>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart2" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="me-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28"
													fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M23.9167 10.5H4.08335C2.47252 10.5 1.16669 11.8058 1.16669 13.4167V14.5833C1.16669 16.1942 2.47252 17.5 4.08335 17.5H23.9167C25.5275 17.5 26.8334 16.1942 26.8334 14.5833V13.4167C26.8334 11.8058 25.5275 10.5 23.9167 10.5Z"
														fill="#FF720D" />
													<path
														d="M23.9167 19.8334H4.08335C2.47252 19.8334 1.16669 21.1392 1.16669 22.75V23.9167C1.16669 25.5275 2.47252 26.8334 4.08335 26.8334H23.9167C25.5275 26.8334 26.8334 25.5275 26.8334 23.9167V22.75C26.8334 21.1392 25.5275 19.8334 23.9167 19.8334Z"
														fill="#FF720D" />
													<path
														d="M23.9167 1.16669H4.08335C2.47252 1.16669 1.16669 2.47252 1.16669 4.08335V5.25002C1.16669 6.86085 2.47252 8.16669 4.08335 8.16669H23.9167C25.5275 8.16669 26.8334 6.86085 26.8334 5.25002V4.08335C26.8334 2.47252 25.5275 1.16669 23.9167 1.16669Z"
														fill="#FF720D" />
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">524</h2>
												<p class="mb-0 text-black font-w500">Menu</p>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart3" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header pb-0 flex-wrap border-0">
										<div class="separator mb-3"></div>
										<div class="me-auto mb-3">
											<h4 class="text-black fs-20">Customer Map</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
										</div>

										<div class="d-flex mb-3">
											<div
												class="custom-control form-check form-switch toggle-switch text-sm-end me-sm-4 me-2">
												<input type="checkbox" class="form-check-input" id="customSwitch11">
												<label class="form-check-label fs-14 text-black"
													for="customSwitch11">Number</label>
											</div>
											<div
												class="custom-control form-check form-switch toggle-switch text-sm-end me-sm-4 me-2">
												<input type="checkbox" class="form-check-input" id="customSwitch12">
												<label class="form-check-label fs-14 text-black"
													for="customSwitch12">Analytics</label>
											</div>
										</div>
										<div class="card-tabs mb-3">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#Monthly"
														role="tab">
														Monthly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link " data-bs-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">
														Today
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body tab-content pb-0 pt-2">
										<div class="tab-pane fade active show" id="Monthly">
											<div id="customerMap" class="customer-chart"></div>
										</div>
										<div class="tab-pane fade" id="Weekly">
											<div id="customerMap2" class="customer-chart"></div>
										</div>
										<div class="tab-pane fade" id="Today">
											<div id="customerMap3" class="customer-chart"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 flex-wrap pb-0">
										<div class="d-flex mb-3">
											<div class="separator"></div>
											<div class="me-auto">
												<h4 class="text-black fs-20">Recent Order Request</h4>
												<p class="fs-13 mb-0">Lorem ipsum dolor</p>
											</div>
										</div>
										<select class="form-control style-1 default-select mb-3">
											<option>Newest</option>
											<option>Oldest</option>
										</select>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table order-request">
												<tbody class="loadmore-content" id="orderRequestContent">
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87"
																	src="images/card/Untitled-1.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black"
																			href="ecom-product-detail.php">Sweet Cheezy
																			Pizza for Kids Meal (Small Size)</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Peter Parkur</h5>
															<p class="mb-0">South Corner st41256 london</p>
														</td>
														<td>
															<div
																class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
																	$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x3</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-warning"
																	href="javascript:void(0);">PENDING</a>
																<div class="dropdown ms-auto">
																	<a class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
																					height="24"></rect>
																				<circle fill="#000000" cx="12" cy="5"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="12"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="19"
																					r="2"></circle>
																			</g>
																		</svg>
																	</a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Accept order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Reject order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87"
																	src="images/card/Untitled-2.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black"
																			href="ecom-product-detail.php">Tuna soup
																			spinach with himalaya salt</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Jimmy Kueai</h5>
															<p class="mb-0">South Corner St.41256 London</p>
														</td>
														<td>
															<div
																class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
																	$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x3</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-warning"
																	href="javascript:void(0);">PENDING</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
																					height="24"></rect>
																				<circle fill="#000000" cx="12" cy="5"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="12"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="19"
																					r="2"></circle>
																			</g>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Accept order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Reject order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87"
																	src="images/card/Untitled-3.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black"
																			href="ecom-product-detail.php">Extreme
																			Deluxe Pizza Mozarella with Garlic</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Cindy Alexa</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div
																class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
																	$8.2</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-success"
																	href="javascript:void(0);">DELIVERED</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
																					height="24"></rect>
																				<circle fill="#000000" cx="12" cy="5"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="12"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="19"
																					r="2"></circle>
																			</g>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Accept order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Reject order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87"
																	src="images/card/Untitled-1.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black"
																			href="ecom-product-detail.php">Mozarella
																			Pizza With Random Topping</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Cindy Alexa</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div
																class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
																	$8.2</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-danger"
																	href="javascript:void(0);">CANCELED</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
																					height="24"></rect>
																				<circle fill="#000000" cx="12" cy="5"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="12"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="19"
																					r="2"></circle>
																			</g>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Accept order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Reject order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87"
																	src="images/card/Untitled-2.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black"
																			href="ecom-product-detail.php">Tuna soup
																			spinach with himalaya salt</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Jimmy Kueai</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div
																class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">
																	$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-success"
																	href="javascript:void(0);">DELIVERED</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
																					height="24"></rect>
																				<circle fill="#000000" cx="12" cy="5"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="12"
																					r="2"></circle>
																				<circle fill="#000000" cx="12" cy="19"
																					r="2"></circle>
																			</g>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Accept order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			Reject order
																		</a>
																		<a class="dropdown-item text-black"
																			href="javascript:void(0);">
																			View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="card-footer border-0 pt-0 text-center">
												<a href="javascript:void(0);"
													class="btn btn-outline-primary dz-load-more" id="orderRequest"
													rel="ajax/order-request.php">View More</a>
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

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>



</body>

</html>