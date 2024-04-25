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
	<!-- Form step -->
	<link href="vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
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
							<p class="mb-0">Your business dashboard template</p>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Form Wizard</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Form step</h4>
							</div>
							<div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service">
												<span>1</span>
											</a></li>
										<li><a class="nav-link" href="#wizard_Time">
												<span>2</span>
											</a></li>
										<li><a class="nav-link" href="#wizard_Details">
												<span>3</span>
											</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
												<span>4</span>
											</a></li>
									</ul>
									<div class="tab-content">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">First Name <span
																class="text-danger">*</span></label>
														<input type="text" name="firstName" class="form-control"
															placeholder="Parsley" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Last Name <span
																class="text-danger">*</span></label>
														<input type="text" name="lastName" class="form-control"
															placeholder="Montana" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Email Address <span
																class="text-danger">*</span></label>
														<input type="email" class="form-control" id="inputGroupPrepend2"
															aria-describedby="inputGroupPrepend2"
															placeholder="example@example.com.com" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Phone Number <span
																class="text-danger">*</span></label>
														<input type="number" name="phoneNumber" class="form-control"
															placeholder="(+1)408-657-9007" required>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="form-group mb-3">
														<label class=" form-label">Where are you from <span
																class="text-danger">*</span></label>
														<input type="text" name="place" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Company Name <span
																class="text-danger">*</span></label>
														<input type="text" name="firstName" class="form-control"
															placeholder="Cellophane Square" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Company Email Address <span
																class="text-danger">*</span></label>
														<input type="email" class="form-control" id="emial1"
															placeholder="example@example.com.com" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Company Phone Number <span
																class="text-danger">*</span></label>
														<input type="number" name="phoneNumber" class="form-control"
															placeholder="(+1)408-657-9007" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group mb-3">
														<label class=" form-label">Your position in Company <span
																class="text-danger">*</span></label>
														<input type="text" name="place" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row align-items-center">
												<div class="col-sm-4 mb-2">
													<span>Monday <span class="text-danger">*</span></span>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="9.00" type="number"
															name="input1" id="input1">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="6.00" type="number"
															name="input2" id="input2">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4 mb-2">
													<span>Tuesday <span class="text-danger">*</span></span>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="9.00" type="number"
															name="input3" id="input3">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="6.00" type="number"
															name="input4" id="input4">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4 mb-2">
													<span>Wednesday <span class="text-danger">*</span></span>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="9.00" type="number"
															name="input5" id="input5">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="6.00" type="number"
															name="input6" id="input6">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4 mb-2">
													<span>Thrusday <span class="text-danger">*</span></span>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="9.00" type="number"
															name="input7" id="input7">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="6.00" type="number"
															name="input8" id="input8">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4 mb-2">
													<span>Friday <span class="text-danger">*</span></span>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="9.00" type="number"
															name="input9" id="input9">
													</div>
												</div>
												<div class="col-6 col-sm-4 mb-2">
													<div class="form-group mb-3">
														<input class="form-control" value="6.00" type="number"
															name="input10" id="input10">
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row emial-setup">
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group mb-3">
														<label for="mailclient11" class="mailclinet mailclinet-gmail">
															<input type="radio" name="emailclient" id="mailclient11">
															<span class="mail-icon">
																<i class="mdi mdi-google-plus" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Gmail</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group mb-3">
														<label for="mailclient12" class="mailclinet mailclinet-office">
															<input type="radio" name="emailclient" id="mailclient12">
															<span class="mail-icon">
																<i class="mdi mdi-office" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Office</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group mb-3">
														<label for="mailclient13" class="mailclinet mailclinet-drive">
															<input type="radio" name="emailclient" id="mailclient13">
															<span class="mail-icon">
																<i class="mdi mdi-google-drive" aria-hidden="true"></i>
															</span>
															<span class="mail-text">I'm using Drive</span>
														</label>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-6">
													<div class="form-group mb-3">
														<label for="mailclient14" class="mailclinet mailclinet-another">
															<input type="radio" name="emailclient" id="mailclient14">
															<span class="mail-icon">
																<i class="fa fa-question-circle" aria-hidden="true"></i>
															</span>
															<span class="mail-text">Another Service</span>
														</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<div class="skip-email text-center">
														<p>Or if want skip this step entirely and setup it later</p>
														<a href="javascript:void(0)">Skip step</a>
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




	<script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	<!-- Form validate init -->
	<script src="js/plugins-init/jquery.validate-init.js"></script>


	<!-- Form Steps -->
	<script src="vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>

	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


	<script>
		$(document).ready(function () {
			// SmartWizard initialize
			$('#smartwizard').smartWizard();
		});
	</script>

</body>


</html>