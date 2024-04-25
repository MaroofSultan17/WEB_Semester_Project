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
	<!-- Datatable -->
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
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
							<span>CMS</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Category</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-4">
								<div class="filter cm-content-box box-primary">
									<div class="content-title">
										<div class="cpa">
											Add Blog Category
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand SlideToolHeader"><i
													class="fa fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body  form excerpt">
										<div class="card-body">
											<div class="mb-3">
												<label class="form-label">Name</label>
												<input type="text" class="form-control" placeholder="Name">
											</div>
											<div class="mb-3">
												<label class="form-label">Slug</label>
												<input type="text" class="form-control" placeholder="Slug">
											</div>
											<div class="mb-3">
												<label for="exampleFormControlTextarea1" class="form-label">Example
													textarea</label>
												<textarea class="form-control" id="exampleFormControlTextarea1"
													rows="8"></textarea>
											</div>
											<div>
												<button type="button" class="btn btn-primary">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="filter cm-content-box box-primary">
									<div class="content-title">
										<div class="cpa">
											Blog List
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand SlideToolHeader"><i
													class="fa fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body publish-content form excerpt">
										<div class="card-body">
											<div class="table-responsive">
												<table
													class="table table-bordered table-striped verticle-middle table-responsive-sm">
													<thead>
														<tr>
															<th scope="col" class="text-black">S.No</th>
															<th scope="col" class="text-black">name</th>
															<th scope="col" class="text-black text-end">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Beauty</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>

														</tr>
														<tr>
															<td>2</td>
															<td>Fashion</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Lifestyle</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>


														</tr>
														<tr>
															<td>4</td>
															<td>Food</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Beauty</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>6</td>
															<td>Fashion</td>
															<td class="text-end">
																<div>
																	<a href="javascript:void(0);">Edit</a>
																	<span>|</span>
																	<a href="javascript:void(0);">Up</a>
																	<span>|</span>
																	<a href="javascript:void(0);">down</a>
																	<span>|</span>
																	<a href="javascript:void(0);">delete</a>
																	<span>|</span>
																</div>
															</td>
														</tr>
														<tr>
															<td>7</td>
															<td>Lifestyle</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>8</td>
															<td>Food</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>9</td>
															<td>Lifestyle</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>10</td>
															<td>Food</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>11</td>
															<td>Fashion</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

															</td>
														</tr>
														<tr>
															<td>12</td>
															<td>Lifestyle</td>
															<td class="text-end">

																<a href="javascript:void(0);">Edit</a>
																<span>|</span>
																<a href="javascript:void(0);">Up</a>
																<span>|</span>
																<a href="javascript:void(0);">down</a>
																<span>|</span>
																<a href="javascript:void(0);">delete</a>
																<span>|</span>

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

	<!-- Dashboard 1 -->
	<script src="js/dashboard/cms.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>




</body>

</html>