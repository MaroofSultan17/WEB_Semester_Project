<?php
include ('helper/config.php');
include ('helper/session.php');
include ('libraries/variables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Analytics | <?php echo constant('siteTitle'); ?> </title>
	<?php require ('./components/links.php'); ?>
</head>

<body>
	<?php require ('./components/preloader.php'); ?>
	<div id="main-wrapper">
		<?php require ('./components/nav-header.php'); ?>
		<?php require ('./components/chatbox.php'); ?>
		<?php require ('./components/header.php'); ?>
		<?php require ('./components/sidebar.php'); ?>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-12">
						<div class="row">
							<div class="col-xl-12 col-xxl-6 col-md-6">
								<div class="card trending-menus pb-3">
									<div class="card-header border-0">
										<div class="separator"></div>
										<div class="me-auto">
											<h4 class="text-black fs-20 mb-1">Daily Trending Menus</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body pt-0 height550 dz-scroll" id="trendingMenus">
										<div class="d-flex pb-3 mb-3 tr-row align-items-center">
											<span class="num">#1</span>
											<div class="me-auto pe-3">
												<a href="post-details.php">
													<h2 class="text-black fs-14 font-w500">Chicken curry special with
														cucumber</h2>
												</a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
												<span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/Untitled-1.jpg" alt="/">
										</div>
										<div class="d-flex pb-3 mb-3 tr-row align-items-center">
											<span class="num">#2</span>
											<div class="me-auto pe-3">
												<a href="post-details.php">
													<h2 class="text-black fs-14 font-w500">Italiano Pizza With Garlic
													</h2>
												</a>
												<span class="text-black font-w600 d-inline-block me-3">$5.6 </span>
												<span class="fs-14">Order 89x</span>
											</div>
											<img src="images/menu/Untitled-2.jpg" alt="/">
										</div>
										<div class="d-flex pb-3 mb-3 tr-row align-items-center">
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
										<div class="d-flex pb-3 mb-3  tr-row align-items-center">
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
										<div class="d-flex pb-3 mb-3 tr-row align-items-center">
											<span class="num">#6</span>
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
										<div class="d-flex tr-row align-items-center">
											<span class="num">#7</span>
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
							<div class="col-xl-12 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0">
										<div class="separator"></div>
										<div class="me-auto">
											<h4 class="text-black fs-20  mb-1">Best seler menus</h4>
											<p class="fs-14 mb-0"> Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="height550 dz-scroll loadmore-content" id="sellerMenusContent">
										<div class="card-body border-bottom pt-0">
											<div class="media mb-3">
												<img src="images/card/Untitled-7.jpg" style="width:100%" alt="/">
											</div>
											<div class="info">
												<h5 class="text-black mb-3"><a href="ecom-product-detail.php"
														class="text-black">Medium Spicy Pizza with Kemangi Leaf</a></h5>
												<div class="d-flex justify-content-between align-items-center">
													<h4 class="font-w600 mb-0 text-black">$6.53</h4>
													<div class="d-flex align-items-center">
														<svg class="me-2 card-ico" width="24" height="24"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M20.8401 4.60999C20.3294 4.099 19.7229 3.69364 19.0555 3.41708C18.388 3.14052 17.6726 2.99817 16.9501 2.99817C16.2276 2.99817 15.5122 3.14052 14.8448 3.41708C14.1773 3.69364 13.5709 4.099 13.0601 4.60999L12.0001 5.66999L10.9401 4.60999C9.90843 3.5783 8.50915 2.9987 7.05012 2.9987C5.59109 2.9987 4.19181 3.5783 3.16012 4.60999C2.12843 5.64169 1.54883 7.04096 1.54883 8.49999C1.54883 9.95903 2.12843 11.3583 3.16012 12.39L4.22012 13.45L12.0001 21.23L19.7801 13.45L20.8401 12.39C21.3511 11.8792 21.7565 11.2728 22.033 10.6053C22.3096 9.93789 22.4519 9.22248 22.4519 8.49999C22.4519 7.77751 22.3096 7.0621 22.033 6.39464C21.7565 5.72718 21.3511 5.12075 20.8401 4.60999Z"
																fill="#FF720D" />
														</svg>
														<h6 class="text-black mb-0">256k</h6>
													</div>
													<div class="d-flex align-items-center">
														<h6 class="text-black mb-0">6,723</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body border-bottom">
											<div class="media mb-3">
												<img src="images/card/Untitled-8.jpg" style="width:100%;" alt="/">
											</div>
											<div class="info">
												<h5 class="text-black mb-3"><a href="ecom-product-detail.php"
														class="text-black">Medium Spicy Pizza with Kemangi Leaf</a></h5>
												<div class="d-flex justify-content-between align-items-center">
													<h4 class="font-w600 mb-0 text-black">$6.53</h4>
													<div class="d-flex align-items-center">
														<svg class="me-2 card-ico" width="24" height="24"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M20.8401 4.60999C20.3294 4.099 19.7229 3.69364 19.0555 3.41708C18.388 3.14052 17.6726 2.99817 16.9501 2.99817C16.2276 2.99817 15.5122 3.14052 14.8448 3.41708C14.1773 3.69364 13.5709 4.099 13.0601 4.60999L12.0001 5.66999L10.9401 4.60999C9.90843 3.5783 8.50915 2.9987 7.05012 2.9987C5.59109 2.9987 4.19181 3.5783 3.16012 4.60999C2.12843 5.64169 1.54883 7.04096 1.54883 8.49999C1.54883 9.95903 2.12843 11.3583 3.16012 12.39L4.22012 13.45L12.0001 21.23L19.7801 13.45L20.8401 12.39C21.3511 11.8792 21.7565 11.2728 22.033 10.6053C22.3096 9.93789 22.4519 9.22248 22.4519 8.49999C22.4519 7.77751 22.3096 7.0621 22.033 6.39464C21.7565 5.72718 21.3511 5.12075 20.8401 4.60999Z"
																fill="#FF720D" />
														</svg>
														<h6 class="text-black mb-0">256k</h6>
													</div>
													<div class="d-flex align-items-center">
														<h6 class="text-black mb-0">6,723</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body border-bottom">
											<div class="media mb-3">
												<img src="images/card/Untitled-9.jpg" style="width:100%;" alt="/">
											</div>
											<div class="info">
												<h5 class="text-black mb-3"><a href="ecom-product-detail.php"
														class="text-black">Pizza Meal for Kids (Small size)</a></h5>
												<div class="d-flex justify-content-between align-items-center">
													<h4 class="font-w600 mb-0 text-black">$6.53</h4>
													<div class="d-flex align-items-center">
														<svg class="me-2 card-ico" width="24" height="24"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M20.8401 4.60999C20.3294 4.099 19.7229 3.69364 19.0555 3.41708C18.388 3.14052 17.6726 2.99817 16.9501 2.99817C16.2276 2.99817 15.5122 3.14052 14.8448 3.41708C14.1773 3.69364 13.5709 4.099 13.0601 4.60999L12.0001 5.66999L10.9401 4.60999C9.90843 3.5783 8.50915 2.9987 7.05012 2.9987C5.59109 2.9987 4.19181 3.5783 3.16012 4.60999C2.12843 5.64169 1.54883 7.04096 1.54883 8.49999C1.54883 9.95903 2.12843 11.3583 3.16012 12.39L4.22012 13.45L12.0001 21.23L19.7801 13.45L20.8401 12.39C21.3511 11.8792 21.7565 11.2728 22.033 10.6053C22.3096 9.93789 22.4519 9.22248 22.4519 8.49999C22.4519 7.77751 22.3096 7.0621 22.033 6.39464C21.7565 5.72718 21.3511 5.12075 20.8401 4.60999Z"
																fill="#FF720D" />
														</svg>
														<h6 class="text-black mb-0">256k</h6>
													</div>
													<div class="d-flex align-items-center">
														<h6 class="text-black mb-0">6,723</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 text-center">
										<a href="javascript:void(0);" class="btn-link dz-load-more" id="sellerMenus"
											rel="ajax/seller-menus.php">View More &gt;&gt;</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-12">
						<div class="row">
							<div class="col-xl-4 col-xxl-5 col-md-6">
								<div class="card pb-3">
									<div class="card-header border-0">
										<div class="separator"></div>
										<div class="me-auto">
											<h4 class="text-black fs-20  mb-1">Loyal Customers</h4>
											<p class="fs-14 mb-0"> Lorem ipsum dolor</p>
										</div>
									</div>
									<div class="card-body height370 loyalCustomers-list py-0 dz-scroll"
										id="loyalCustomers">
										<div class="media align-items-center mb-sm-4 mb-3">
											<img class="me-3 rounded" src="images/profile/Untitled-10.jpg" width="73"
												alt="/">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:void(0);"
														class="text-black">Alexzander Queqe</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">651</strong>
													Times order</small>
											</div>
										</div>
										<div class="media align-items-center mb-sm-4 mb-3">
											<img class="me-3 rounded" src="images/profile/Untitled-11.jpg" width="73"
												alt="/">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:void(0);"
														class="text-black">Bella Simatupang</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">356</strong>
													Times order</small>
											</div>
										</div>
										<div class="media align-items-center mb-sm-4 mb-3">
											<img class="me-3 rounded" src="images/profile/Untitled-12.jpg" width="73"
												alt="/">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:void(0);"
														class="text-black">Jordi Alaba</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">125</strong>
													Times order</small>
											</div>
										</div>
										<div class="media align-items-center mb-sm-4 mb-3">
											<img class="me-3 rounded" src="images/profile/Untitled-13.jpg" width="73"
												alt="/">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:void(0);"
														class="text-black">Kevin Jamet</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">78</strong>
													Times order</small>
											</div>
										</div>
										<div class="media align-items-center mb-sm-4 mb-3">
											<img class="me-3 rounded" src="images/profile/Untitled-11.jpg" width="73"
												alt="/">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:void(0);"
														class="text-black">Bella Simatupang</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">356</strong>
													Times order</small>
											</div>
										</div>
										<div class="media align-items-center">
											<img class="me-3 rounded" src="images/profile/Untitled-12.jpg" width="73"
												alt="/">
											<div class="media-body">
												<h5 class="text-black"><a href="javascript:void(0);"
														class="text-black">Jordi Alaba</a></h5>
												<small class="text-primary mb-0"><strong class="font-w600">125</strong>
													Times order</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-xxl-7 col-md-6">
								<div class="card">
									<div class="card-header border-0 flex-wrap pb-0">
										<div class="d-flex mb-3">
											<div class="separator"></div>
											<div class="me-auto">
												<h4 class="card-title mb-1">Sales Summary</h4>
												<p class="fs-14 mb-0">Lorem ipsum dolor sit amet,consecteture</p>
											</div>
										</div>
										<select class="form-control style-1 default-select mb-3">
											<option>Monthly</option>
											<option>Weekly</option>
											<option>Daily</option>
										</select>
									</div>
									<div class="card-body pb-0 pt-2">
										<div id="chartTimeline" class="timeline-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0 flex-wrap">
										<div class="d-flex mb-3">
											<div class="separator"></div>
											<div class="me-auto">
												<h4 class="card-title mb-1">Most Favorites Items</h4>
												<p class="fs-14 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
											</div>
										</div>
										<div class="card-action card-tabs mb-3">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab"
														href="#all-categories">
														All Categories
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#main-course">
														Main Course
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#pizza">
														Pizza
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#drink">
														Drink
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#dessert">
														Dessert
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#more">
														More
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body most-favourite-items pb-0">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="all-categories">
												<div class="row">
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-10.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Mozarella Pizza
																		with Random Topping</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-12.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Watermelon Juice
																		with Ice</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">75%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-13.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Chicken Kebab
																		from Turkish with Garlic</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>3/8</span>
																<small class="fs-14 text-black">35%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-14.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Medium Spicy
																		Pizza with Kemangi Leaf</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Orange Juice
																		Special Smoothy with Sugar</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>2/8</span>
																<small class="fs-14 text-black">21%</small>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="main-course">
												<div class="row">
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-10.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Mozarella Pizza
																		with Random Topping</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-12.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Watermelon Juice
																		with Ice</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">75%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-12.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Watermelon Juice
																		with Ice</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">75%</small>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="pizza">
												<div class="row">
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-10.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Mozarella Pizza
																		with Random Topping</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media  favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-12.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Watermelon Juice
																		with Ice</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">75%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-12.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Watermelon Juice
																		with Ice</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">75%</small>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="drink">
												<div class="row">
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-10.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Mozarella Pizza
																		with Random Topping</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="tab-pane fade" id="dessert">
												<div class="row">
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-10.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Mozarella Pizza
																		with Random Topping</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-12.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Watermelon Juice
																		with Ice</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">75%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="more">
												<div class="row">
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-10.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Mozarella Pizza
																		with Random Topping</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>6/8</span>
																<small class="fs-14 text-black">85%</small>
															</div>
														</div>
													</div>
													<div class="col-xl-6 pb-3 mb-3 border-bottom">
														<div class="media favourite-item-list">
															<img class="rounded me-3 food-img"
																src="images/card/Untitled-11.jpg" width="125" alt="/">
															<div class="media-body">
																<h5 class="mb-sm-4 mb-3"><a class="text-black"
																		href="ecom-product-detail.php">Extreme Deluxe
																		Pizza Super With Mozarella</a></h5>
																<div class="d-flex mb-2">
																	<svg class="me-2 card-ico" width="15" height="15"
																		viewBox="0 0 15 15" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="2.04545" height="15" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="4.09082" y="4.0909" width="2.04545"
																			height="10.9091" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="8.18164" y="10.2273" width="2.04545"
																			height="4.77273" rx="1.02273"
																			fill="#FF720D" />
																		<rect x="12.2725" y="2.04546" width="2.04545"
																			height="12.9545" rx="1.02273"
																			fill="#FF720D" />
																	</svg>
																	<span class="fs-14 text-black"><strong
																			class="me-1">2,441</strong> Total
																		Sales</span>
																</div>
																<div class="d-flex align-items-center flex-wrap fs-12">
																	<div class="mb-2 star-review2">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star op5"></i>
																		<i class="fa fa-star op5"></i>
																	</div>
																	<span class="ms-3 text-dark mb-2">(454
																		revies)</span>
																</div>
															</div>
															<div class="d-inline-block relative donut-chart-sale">
																<span class="donut"
																	data-peity='{ "fill": ["rgb(255, 114, 13,1)", "rgba(236, 236, 236, 1)"],   "innerRadius": 28, "radius": 10}'>4/9</span>
																<small class="fs-14 text-black">45%</small>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
										<div class="card-footer border-0 text-center pb-3 pt-0">
											<a href="javascript:;" class="btn-link">View More &gt;&gt;</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-8 col-xxl-6 col-md-6">
										<div class="card">
											<div class="card-header flex-wrap border-0 pb-0">
												<div class="mb-3 d-flex">
													<div class="separator"></div>
													<div class="me-auto">
														<h4 class="card-title mb-1">Revenue</h4>
														<p class="fs-14 mb-0">Lorem ipsum dolor sit amet,consecteture
														</p>
													</div>
												</div>
												<select class="form-control style-1 default-select mb-3">
													<option>Monthly</option>
													<option>Weekly</option>
													<option>Daily</option>
												</select>
											</div>
											<div class="card-body pb-0 pt-2">
												<div id="revenueMap"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-xxl-6 col-md-6">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<div class="separator"></div>
												<div class="me-auto">
													<h4 class="text-black fs-20">Customer Map</h4>
													<p class="fs-13 mb-0 text-black">Lorem ipsum dolor</p>
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="customerMapkm" class="customer-chart"></div>
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
		<?php require ('./components/footer.php'); ?>
	</div>
	<?php require ('./components/script.php'); ?>
</body>

</html>