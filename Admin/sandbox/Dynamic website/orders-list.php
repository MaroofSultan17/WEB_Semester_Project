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
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
							<div class="card-header flex-wrap border-0 p-0 justify-content-start">
								<div class="table-tabs me-2 mb-3 me-auto">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#AllStatus"
												aria-expanded="false">
												All Status
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#NewOrder"
												aria-expanded="false">
												New Order
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link " data-bs-toggle="tab" href="#OnProgress"
												aria-expanded="false">
												On Progress
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#Delivered"
												aria-expanded="false">
												Delivered
											</a>
										</li>
									</ul>
								</div>
								<select class="form-control style-2 me-3 mb-3 default-select ">
									<option>Filter</option>
									<option>Date</option>
								</select>
								<select class="form-control style-2 mb-3 default-select ">
									<option>Newest</option>
									<option>Oldest</option>
								</select>
							</div>
							<div class="card-body p-0">
								<div class="tab-content" id="Tab">
									<div class="tab-pane fade active show" id="AllStatus">
										<div class="table-responsive rounded table-hover">
											<table
												class="table text-black card-table mb-4 table-responsive-lg dataTablesCard"
												id="dataTable1">
												<thead>
													<tr class="thead-primary">
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer Name</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status Order</th>
														<th style="background-image:none;"></th>
													</tr>
												</thead>
												<tbody>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552356</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Rendy Greenlee</td>
														<td>32 The Green London</td>
														<td>$44.99</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552388</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Jessica Wong</td>
														<td>11 Church Road London</td>
														<td>$24.17</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552323</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Veronica</td>
														<td>21 King Street London</td>
														<td>$74.92</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552322</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Samantha Bake</td>
														<td>79 The Drive London</td>
														<td>$22.18</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552358</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>David Horison</td>
														<td>981 St. John’s Road London</td>
														<td>$24.17</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552311</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Olivia Shine</td>
														<td>35 Station Road London</td>
														<td>$82.46</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552351</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>James WItcwicky</td>
														<td>Corner Street 5th London</td>
														<td>$164.52</td>
														<td>
															<a class="btn text-danger bgl-danger"
																href="javascript:void(0);">CANCELED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552349</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Roberto Carlo</td>
														<td>544 Manor Road London</td>
														<td>$34.41</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552397</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Franky Sihotang</td>
														<td>6 The Avenue London</td>
														<td>$45.86</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552397</td>
														<td>26 March 2020, 12:42 AM</td>
														<td>Franky Sihotang</td>
														<td>6 The Avenue London</td>
														<td>$45.86</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="NewOrder">
										<div class="table-responsive rounded table-hover">
											<table
												class="table text-black card-table  mb-4 table-responsive-lg dataTablesCard"
												id="dataTable2">
												<thead class="bg-primary">
													<tr>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer Name</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status Order</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="OnProgress">
										<div class="table-responsive rounded table-hover">
											<table
												class="table text-black card-table  mb-4 table-responsive-lg dataTablesCard"
												id="dataTable3">
												<thead class="bg-primary">
													<tr>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer Name</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status Order</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-warning bgl-warning"
																href="javascript:void(0);">PENDING</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="Delivered">
										<div class="table-responsive rounded table-hover">
											<table
												class="table text-black card-table  mb-4 table-responsive-lg dataTablesCard"
												id="dataTable4">
												<thead class="bg-primary">
													<tr>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer Name</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status Order</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
													<tr class="alert alert-dismissible border-0">
														<td>#5552375</td>
														<td>26 March 2020, 02:12 AM</td>
														<td>Emilia Johanson</td>
														<td>67 St. John’s Road London</td>
														<td>$251.16</td>
														<td>
															<a class="btn text-success bgl-success"
																href="javascript:void(0);">DELIVERED</a>
														</td>
														<td>
															<div class="dropdown">
																<a class="btn-link" href="javascript:void(0)"
																	data-bs-toggle="dropdown" aria-expanded="false">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24">
																			</rect>
																			<circle fill="#000000" cx="12" cy="5" r="2">
																			</circle>
																			<circle fill="#000000" cx="12" cy="12"
																				r="2"></circle>
																			<circle fill="#000000" cx="12" cy="19"
																				r="2"></circle>
																		</g>
																	</svg>
																</a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item text-info"
																		href="javascript:void(0);">Accept Order</a>
																	<a href="javascript:void(0);" data-dismiss="alert"
																		aria-label="Close"
																		class="dropdown-item text-danger">Reject
																		Order</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
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

	</div>
	<!--**********************************
		   Support ticket button end
		***********************************-->


	<!--**********************************
		Main wrapper end
	***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>