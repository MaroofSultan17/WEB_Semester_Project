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
	<link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Blog</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									<i class="fa-solid fa-filter me-2"></i>Filter
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i
											class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body pb-2">
									<div class="row">
										<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
											<input type="text" class="form-control" id="exampleFormControlInput1"
												placeholder="Title">
										</div>
										<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
											<select class="default-select dashboard-select-2 w-100">
												<option selected>Select Status</option>
												<option value="1">Published</option>
												<option value="2">Draft</option>
												<option value="3">Trash</option>
												<option value="4">Private</option>
												<option value="5">Pending</option>
											</select>
										</div>
										<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
											<input class="form-control" type="text" id="datepicker">
										</div>
										<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
											<button class="btn btn-primary" title="Click here to Search"
												type="button"><i class="fa-solid fa-filter me-1"></i>Filter</button>
											<button class="btn btn-danger light" title="Click here to remove filter"
												type="button">Remove Filter</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<ul class="d-flex align-items-center flex-wrap">
								<li><a href="add-blog.php" class="btn btn-primary ">Add Blog</a></li>
								<li><a href="blog-category.php" class="btn btn-primary mx-1">Blog Category</a></li>
								<li><a href="blog-category.php" class="btn btn-primary mt-sm-0 mt-1">Add Blog
										Category</a></li>
							</ul>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									<i class="fa-solid fa-file-lines me-1"></i>Blogs List
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i
											class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-condensed flip-content">
											<thead>
												<tr>
													<th class="text-black">S.No</th>
													<th class="text-black">Title</th>
													<th class="text-black">Status</th>
													<th class="text-black">Modified</th>
													<th class="text-black text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Title of first blog post entry</td>
													<td>Published</td>
													<td>09 Jan, 2024</td>
													<td class="text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>2</td>
													<td>Why Go For A VFX Course?</td>
													<td>Published</td>
													<td>13 May, 20224</td>
													<td class="text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>3</td>
													<td>Reasons To Choose Animation Courses</td>
													<td>Published</td>
													<td>13 Apr, 2024</td>
													<td class="text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>4</td>
													<td>Blue Screen Vs. Green Screen For VFX</td>
													<td>Published</td>
													<td>13 June, 2024</td>
													<td class="text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>5</td>
													<td>All About Animation</td>
													<td>Published</td>
													<td>13 Apr, 2024</td>
													<td class="text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>

											</tbody>
										</table>
										<div
											class="d-flex align-items-center justify-content-lg-between justify-content-center flex-wrap pt-3">
											<small>Page 1 of 5, showing 2 records out of 8 total, starting on record 1,
												ending on 2</small>
											<nav aria-label="Page navigation example">
												<ul class="pagination my-2 my-md-0">
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);"><i
																class="fa-solid fa-angle-left"></i></a></li>
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link "
															href="javascript:void(0);"><i
																class="fa-solid fa-angle-right"></i></a></li>
												</ul>
											</nav>
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
	<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>

	<script src="js/dashboard/cms.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
	<script src="js/custom.min.js"></script>


	<script>
		$(function () {
			$("#datepicker").datepicker({
				autoclose: true,
				todayHighlight: true
			}).datepicker('update', new Date());

		});

	</script>
</body>

</html>