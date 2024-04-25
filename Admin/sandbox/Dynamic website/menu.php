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
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/nestable2/css/jquery.nestable.min.css" rel="stylesheet">
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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Menu</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									<i class="fa fa-list-alt me-1"></i>Menus
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i
											class="fa fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="row align-items-center p-3">
										<div class="col-xl-3 col-xxl-3 mb-xl-0 mb-3">
											<h6 class="mb-0">Select a menu to edit: <span class="text-danger">* </span>
											</h6>
										</div>
										<div class="col-xl-6 col-xxl-5 mb-xl-0 mb-3">
											<select class="form-control default-select dashboard-select-2 h-auto wide">
												<option value="AL">Select Menu</option>
												<option value="WY">India</option>
												<option value="WY">Information</option>
												<option value="WY">New Menu</option>
												<option value="WY">Page Menu</option>
											</select>
										</div>
										<div class="col-xl-3 col-xxl-4">
											<a href="javascript:void(0);" class="btn btn-primary">Select</a>
											<span class="mx-2">or</span>
											<a href="javascript:void(0);" class="text-primary">create new menu</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4">
								<div class="filter cm-content-box box-primary">
									<div class="content-title">
										<div class="cpa">
											Menus
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand SlideToolHeader"><i
													class="fa fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body form excerpt">
										<div class="card-body">
											<div class="filter cm-content-box box-primary border">
												<div class="content-title border-0">
													<div class="cpa">
														page
													</div>
													<div class="tools">
														<a href="javascript:void(0);" class="expand SlideToolHeader"><i
																class="fa fa-angle-down"></i></a>
													</div>
												</div>
												<div class="cm-content-body form excerpt border-top">
													<div class="card-body ItemsCheckboxSec">
														<ul class=" tab-my nav nav-tabs" id="myTab" role="tablist">
															<li class="nav-item" role="presentation">
																<button class="nav-link active" id="Viewall-tab"
																	data-bs-toggle="tab"
																	data-bs-target="#Viewall-tab-pane" type="button"
																	role="tab" aria-controls="Viewall-tab-pane"
																	aria-selected="true">View All</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="Search-tab"
																	data-bs-toggle="tab"
																	data-bs-target="#Search-tab-pane" type="button"
																	role="tab" aria-controls="Search-tab-pane"
																	aria-selected="false">Search</button>
															</li>

														</ul>
														<div class="tab-content" id="myTabContent">
															<div class="tab-pane fade show active" id="Viewall-tab-pane"
																role="tabpanel" aria-labelledby="Viewall-tab"
																tabindex="0">
																<div class="menu-tabs">
																	<div class="form-check mb-2">
																		<input class="form-check-input" type="checkbox"
																			value="" id="flexCheckDefault">
																		<label class="form-check-label"
																			for="flexCheckDefault">
																			Privacy Policy
																		</label>
																	</div>
																	<div class="form-check mb-2">
																		<input class="form-check-input" type="checkbox"
																			value="" id="flexCheckDefault-1">
																		<label class="form-check-label"
																			for="flexCheckDefault-1">
																			Contact Us
																		</label>
																	</div>
																	<div class="form-check mb-2">
																		<input class="form-check-input" type="checkbox"
																			value="" id="flexCheckDefault-2">
																		<label class="form-check-label"
																			for="flexCheckDefault-2">
																			Important Information
																		</label>
																	</div>
																	<div class="form-check mb-2">
																		<input class="form-check-input" type="checkbox"
																			value="" id="flexCheckDefault-3">
																		<label class="form-check-label"
																			for="flexCheckDefault-3">
																			About Us
																		</label>
																	</div>
																	<div class="form-check mb-2">
																		<input class="form-check-input" type="checkbox"
																			value="" id="flexCheckDefault-4">
																		<label class="form-check-label"
																			for="flexCheckDefault-4">
																			Dummy Co
																		</label>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="Search-tab-pane"
																role="tabpanel" aria-labelledby="Search-tab"
																tabindex="0">
																<div class="menu-tabs">
																	<label for="exampleFormControlInput1"
																		class="form-label">Search</label>
																	<input type="text" class="form-control"
																		id="exampleFormControlInput1"
																		placeholder="Enter Page Name">
																</div>
															</div>
															<div class="d-flex align-items-center flex-wrap">

																<a href="javascript:void(0);"
																	class="checkAllInput">Select All</a><span
																	class="mx-2">|</span>
																<a href="javascript:void(0);"
																	class="unCheckAllInput">Deselect All</a>
															</div>
															<a class="btn btn-primary btn-sm dz-menu-btn">Add to
																Menu</a>
														</div>
													</div>

												</div>
											</div>
											<div class="filter cm-content-box box-primary border">
												<div class="content-title border-0">
													<div class="cpa">
														Links
													</div>
													<div class="tools">
														<a href="javascript:void(0);" class="expand SlideToolHeader"><i
																class="fa fa-angle-down"></i></a>
													</div>
												</div>
												<div class="cm-content-body form excerpt border-top">
													<div class="card-body">
														<div class="row align-items-center">
															<div class="col-xl-4">
																<h6>URL</h6>
															</div>
															<div class="col-xl-8">
																<input type="text" class="form-control mb-2"
																	placeholder="">
															</div>
															<div class="col-xl-4">
																<h6 class="mb-xl-0 text-nowrap ">Link Text</h6>
															</div>
															<div class="col-xl-8">
																<input type="text" class="form-control"
																	placeholder="Menu items">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="filter cm-content-box box-primary">
									<div class="content-title flex-wrap">
										<div class="cpa d-flex align-items-center flex-wrap">
											Menu Name
											<input type="text" class="form-control w-auto ms-2"
												placeholder="information">
										</div>
										<button type="button"
											class="btn btn-secondary light ms-sm-auto mb-2 mb-sm-0">Save Menu</button>
									</div>
									<div class="cm-content-body form excerpt rounded-0">
										<div class="card-body">
											<h6 class="mb-0">Menus Structure</h6>
											<p>Add Menus items from the column on the left.</p>
											<div class="col-xl-12">
												<div class="dd" id="nestable">
													<ol class="dd-list accordion" id="accordionExample">
														<!-- <div class="dd-handle"></div> -->

														<li class="accordion-item dd-item menu-ac-item" data-id="1">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i
																		class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
																<button class="accordion-button" type="button"
																	data-bs-toggle="collapse"
																	data-bs-target="#collapseOne" aria-expanded="true"
																	aria-controls="collapseOne">
																	Contact Us
																</button>
															</div>
															<div id="collapseOne" class="accordion-collapse collapse"
																data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<div class="row">
																		<div class="col-xl-12">
																			<form>
																				<div class="mb-3">
																					<label
																						class="form-label">URL</label>
																					<input type="text"
																						class="form-control"
																						placeholder="https://bodyclub.dexignzone.com/xhtml/about-us.php">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Navigation
																						Label</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Contact Us">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Title
																						Attribute</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Contact Us">
																				</div>
																			</form>
																		</div>
																		<div class="d-flex align-items-center">
																			<a
																				href="javascript:void(0);">Remove</a><span
																				class="mx-2">|</span>

																			<a href="javascript:void(0);"
																				data-bs-toggle="collapse"
																				data-bs-target="#collapseOne"
																				aria-expanded="false"
																				aria-controls="collapseOne">
																				Cancel
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="2">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i
																		class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
																<button class="accordion-button collapsed" type="button"
																	data-bs-toggle="collapse"
																	data-bs-target="#collapseTwo" aria-expanded="false"
																	aria-controls="collapseTwo">
																	Privacy Policy
																</button>
															</div>
															<div id="collapseTwo" class="accordion-collapse collapse"
																data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<div class="row">
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Navigation
																						Label</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Privacy Policy">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Title
																						Attribute</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Privacy Policy">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-12">
																			<p class="dz-terms">Original: <a
																					href="javascript:void(0);">Privacy
																					Policy</a></p>
																		</div>
																		<div class="d-flex align-items-center">
																			<a
																				href="javascript:void(0);">Remove</a><span
																				class="mx-2">|</span>
																			<a href="javascript:void(0);"
																				data-bs-toggle="collapse"
																				data-bs-target="#collapseTwo"
																				aria-expanded="false"
																				aria-controls="collapseTwo">
																				Cancel
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="3">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i
																		class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
																<button class="accordion-button collapsed" type="button"
																	data-bs-toggle="collapse"
																	data-bs-target="#collapseThree"
																	aria-expanded="false" aria-controls="collapseThree">
																	Terms and Conditions
																</button>
															</div>
															<div id="collapseThree" class="accordion-collapse collapse"
																data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<div class="row">
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Navigation
																						Label</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Terms and Conditions">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Title
																						Attribute</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Terms and Conditions">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-12">
																			<p class="dz-terms">Original: <a
																					href="javascript:void(0);">Terms and
																					Conditions</a></p>
																		</div>
																		<div class="d-flex align-items-center">
																			<a
																				href="javascript:void(0);">Remove</a><span
																				class="mx-2">|</span>
																			<a href="javascript:void(0);"
																				data-bs-toggle="collapse"
																				data-bs-target="#collapseThree"
																				aria-expanded="false"
																				aria-controls="collapseThree">
																				Cancel
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="4">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i
																		class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
																<button class="accordion-button collapsed" type="button"
																	data-bs-toggle="collapse"
																	data-bs-target="#collapseFour" aria-expanded="false"
																	aria-controls="collapseFour">
																	About Us
																</button>
															</div>
															<div id="collapseFour" class="accordion-collapse collapse"
																data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<div class="row">
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Navigation
																						Label</label>
																					<input type="text"
																						class="form-control"
																						placeholder="About Us">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Title
																						Attribute</label>
																					<input type="text"
																						class="form-control"
																						placeholder="About Us">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-12">
																			<p class="dz-terms">Original: <a
																					href="javascript:void(0);">About
																					Us</a></p>
																		</div>
																		<div class="d-flex align-items-center">
																			<a
																				href="javascript:void(0);">Remove</a><span
																				class="mx-2">|</span>
																			<a href="javascript:void(0);"
																				data-bs-toggle="collapse"
																				data-bs-target="#collapseFour"
																				aria-expanded="false"
																				aria-controls="collapseFour">
																				Cancel
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="accordion-item dd-item menu-ac-item" data-id="5">
															<div class="accordion-header position-relative">
																<div class="move-media dd-handle">
																	<i
																		class="fa-solid fa-arrows-up-down-left-right"></i>
																</div>
																<button class="accordion-button collapsed" type="button"
																	data-bs-toggle="collapse"
																	data-bs-target="#collapseFive" aria-expanded="false"
																	aria-controls="collapseFive">
																	Important Information
																</button>
															</div>
															<div id="collapseFive" class="accordion-collapse collapse"
																data-bs-parent="#accordionExample">
																<div class="accordion-body">
																	<div class="row">
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Navigation
																						Label</label>
																					<input type="text"
																						class="form-control"
																						placeholder="Important Information">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-6">
																			<form>
																				<div class="mb-3">
																					<label class="form-label">Title
																						Attribute</label>
																					<input type="text"
																						class="form-control"
																						placeholder="">
																				</div>
																			</form>
																		</div>
																		<div class="col-xl-12">
																			<p class="dz-terms">Original: <a
																					href="javascript:void(0);">Terms and
																					Conditions</a></p>
																		</div>
																		<div class="d-flex align-items-center">
																			<a
																				href="javascript:void(0);">Remove</a><span
																				class="mx-2">|</span>
																			<a href="javascript:void(0);"
																				data-bs-toggle="collapse"
																				data-bs-target="#collapseFive"
																				aria-expanded="false"
																				aria-controls="collapseFive">
																				Cancel
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
									<div class="filter cm-content-box box-primary style-1 mb-0 border-0">
										<div class="content-title">
											<div class="cpa">
												Delete Menu
											</div>
											<button type="button" class="btn btn-secondary light my-2">Save
												Menu</button>
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
	<script src="vendor/nestable2/js/jquery.nestable.min.js"></script>
	<script src="js/plugins-init/nestable-init.js"></script>
	<script src="js/dashboard/cms.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>



</body>

</html>