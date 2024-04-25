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

	<link href="vendor/fullcalendar/css/main.min.css" rel="stylesheet">
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
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black form-label">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black form-label">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black form-label">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row page-titles mx-0">
					<div class="col-sm-6 p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<p class="mb-0">Your business dashboard template</p>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Calendar</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->


				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="card">
							<div class="card-body">
								<h4 class="card-intro-title">Calendar</h4>

								<div class="">
									<div id="external-events" class="my-3">
										<p>Drag and drop your event or click in the calendar</p>
										<div class="external-event btn-primary light" data-class="bg-primary"><i
												class="fa fa-move"></i><span>New Theme Release</span></div>
										<div class="external-event btn-warning light" data-class="bg-warning"><i
												class="fa fa-move"></i>My Event
										</div>
										<div class="external-event btn-danger light" data-class="bg-danger"><i
												class="fa fa-move"></i>Meet manager</div>
										<div class="external-event btn-info light" data-class="bg-info"><i
												class="fa fa-move"></i>Create New theme</div>
										<div class="external-event btn-dark light" data-class="bg-dark"><i
												class="fa fa-move"></i>Project Launch</div>
										<div class="external-event btn-secondary light" data-class="bg-secondary"><i
												class="fa fa-move"></i>Meeting</div>
									</div>
									<!-- checkbox -->
									<div class="checkbox form-check checkbox-event custom-checkbox pt-3 pb-5">
										<input type="checkbox" class="form-check-input" id="drop-remove">
										<label class="form-check-label" for="drop-remove">Remove After Drop</label>
									</div>
									<a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add-category"
										class="btn btn-primary btn-event w-100">
										<span class="align-middle"><i class="ti-plus me-1"></i></span> Create New
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="card">
							<div class="card-body">
								<div id="calendar" class="app-fullcalendar"></div>
							</div>
						</div>
					</div>
					<!-- BEGIN MODAL -->
					<div class="modal fade none-border" id="event-modal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Add New Event</strong></h4>
								</div>
								<div class="modal-body"></div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default waves-effect"
										data-bs-dismiss="modal">Close</button>
									<button type="button"
										class="btn btn-success save-event waves-effect waves-light">Create
										event</button>
									<button type="button" class="btn btn-danger delete-event waves-effect waves-light"
										data-bs-dismiss="modal">Delete</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal Add Category -->
					<div class="modal fade none-border" id="add-category">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Add a category</strong></h4>
								</div>
								<div class="modal-body">
									<form>
										<div class="row">
											<div class="col-md-6">
												<label class="control-label form-label">Category Name</label>
												<input class="form-control form-white" placeholder="Enter name"
													type="text" name="category-name">
											</div>
											<div class="col-md-6">
												<label class="control-label form-label">Choose Category Color</label>
												<select class="form-control default-select form-white"
													data-placeholder="Choose a color..." name="category-color">
													<option value="success">Success</option>
													<option value="danger">Danger</option>
													<option value="info">Info</option>
													<option value="pink">Pink</option>
													<option value="primary">Primary</option>
													<option value="warning">Warning</option>
												</select>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger light waves-effect"
										data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary waves-effect waves-light save-category"
										data-bs-dismiss="modal">Save</button>
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
	<script src="vendor/moment/moment.min.js"></script>
	<script src="vendor/fullcalendar/js/main.min.js"></script>
	<script src="js/plugins-init/fullcalendar-init.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>