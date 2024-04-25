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
	<link rel="stylesheet" href="vendor/select2/css/select2.min.css">
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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Email</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<a href="email-template.php" class="btn btn-primary mb-4">List Email Template</a>
					</div>
					<div class="col-xl-12">
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									<i class="fa-solid fa-envelope me-1"></i>Add Email Template
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i
											class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6">
											<form>
												<div class="mb-3">
													<label class="form-label">Title</label>
													<input type="text" class="form-control">
													<div class="form-text">Title should be meaning full like :
														registration email, forgot password email.</div>
												</div>
												<div class="mb-3">
													<label class="form-label">Description</label>
													<textarea class="form-control" rows="5"></textarea>
													<div class="form-text">Decribe about this email template. </div>
												</div>
											</form>
										</div>
										<div class="col-xl-6">
											<div class="mb-3">
												<label class="form-label">Slug</label>
												<input class="form-control" type="text" placeholder="Slug"
													aria-label="Disabled input example" disabled>
												<div class="form-text">slug will use for url. can't edited.</div>
											</div>
											<label class="form-label">placeholder</label>
											<div class="new-scroll">
												<div class="d-grid mb-3">
													<h6 class="mb-0">User Configuration</h6>
													<span>#USERNAME#: Username can display with this placeholder.</span>
													<span>#USERNAME#: Username can display with this placeholder.</span>
													<span>#LASTNAME#: Lastname can display with this placeholder.</span>
													<span>#TELEPHONE#: Contact number can display with this
														placeholder.</span>
													<span>#PASSWORD#: password can display with this placeholder.</span>
													<span>#SITENAME#: Site name can display with this
														placeholder.</span>
												</div>
												<div class="d-grid mb-3">
													<h6 class="mb-0">Config Configuration</h6>
													<span>#SITENAME#: Site name can display with this
														placeholder.</span>
													<span>#ADMINEMAIL#: Admin email can display with this
														placeholder.</span>
													<span>#SUPPORTEMAIL#: Support email can display with this
														placeholder.</span>
													<span>#SITEADDRESS#: Site address can display with this
														placeholder.</span>
												</div>
												<div class="d-grid mb-3">
													<h6>Generate Configuration</h6>
													<span>#ACTIVATIONLINK#: Activation link can display with this
														placeholder.</span>
													<span>#SITELOGO#: Site logo can display with this
														placeholder.</span>
													<span>#LOGINLINK#: Login link can display with this
														placeholder.</span>
													<span>#REGESTERLINK#: Registration link can display with this
														placeholder.</span>
													<span>#REGESTERLINK#: Registration link can display with this
														placeholder.</span>
												</div>
												<div class="d-grid mb-3">
													<h6>Contact Configuration</h6>
													<span>#NAME#: Contact user name can display with this
														placeholder.</span>
													<span>#EMAIL#: Contact user email can display with this
														placeholder.</span>
													<span>#MESSAGE#: Contact user message can display with this
														placeholder.</span>
												</div>
												<div class="d-grid mb-3">
													<h6>Subscribe Configuration</h6>
													<span>#USERNAME#: Subscribe user email can display with this
														placeholder.</span>
												</div>
												<div class="d-grid mb-3">
													<h6>Order Configuration</h6>
													<span>#STATUS#: Order Status can display with this
														placeholder.</span>
													<span>#FIRSTNAME#: User first name can display with this
														placeholder.</span>
													<span>#LASTNAME#: User last name can display with this
														placeholder.</span>
													<span>#MESSAGE#: Delivery details or expected deliery date. This
														message will deliver to customer.</span>
													<span>#ID#: Order number can display with this placeholder.</span>
												</div>
											</div>

										</div>
										<div class="col-xl-12">
											<label class="form-label mt-3 mt-xl-0">Email Template</label>
											<div class="custom-ekeditor mb-3">
												<div id="ckeditor"></div>
											</div>
											<div class="form-text mb-3">This design will show in recieved email and
												place holders will replace with dynamic content.</div>
										</div>
										<p>Status</p>
										<ul class="d-flex mb-3">
											<li>
												<div class="form-check mb-2"><input class="form-check-input"
														type="checkbox" value="" id="flexCheckDefault"> <label
														class="form-check-label" for="flexCheckDefault"></label></div>
											</li>
											<li>Active status template will use in email sending only.</li>
										</ul>
										<div class="text-end">
											<button type="button" class="btn btn-primary">Save EmailTemplate</button>
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
	<!-- Ck-editor -->
	<script src="vendor/ckeditor/ckeditor.js"></script>

	<script src="vendor/select2/js/select2.full.min.js"></script>
	<script src="js/plugins-init/select2-init.js"></script>

	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/cms.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>



</body>

</html>