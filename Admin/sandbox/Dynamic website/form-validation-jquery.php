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
							<p class="mb-0">Validation</p>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Form Validation</h4>
							</div>
							<div class="card-body">
								<div class="form-validation">
									<form class="needs-validation" novalidate action="#" method="post">
										<div class="row">
											<div class="col-xl-6">
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom01">Username
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom01"
															placeholder="Enter a username.." required>
														<div class="invalid-feedback">
															Please enter a username.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom02">Email <span
															class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom02"
															placeholder="Your valid email.." required>
														<div class="invalid-feedback">
															Please enter a Email.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom03">Password
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="password" class="form-control"
															id="validationCustom03" placeholder="Choose a safe one.."
															required>
														<div class="invalid-feedback">
															Please enter a password.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom04">Suggestions <span
															class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<textarea class="form-control" id="validationCustom04" rows="5"
															placeholder="What would you like to see?"
															required></textarea>
														<div class="invalid-feedback">
															Please enter a Suggestions.
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom05">Best Skill
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<select class="default-select wide form-control"
															id="validationCustom05">
															<option data-display="Select">Please select</option>
															<option value="html">HTML</option>
															<option value="css">CSS</option>
															<option value="javascript">JavaScript</option>
															<option value="angular">Angular</option>
															<option value="angular">React</option>
															<option value="vuejs">Vue.js</option>
															<option value="ruby">Ruby</option>
															<option value="php">PHP</option>
															<option value="asp">ASP.NET</option>
															<option value="python">Python</option>
															<option value="mysql">MySQL</option>
														</select>
														<div class="invalid-feedback">
															Please select a one.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom06">Currency
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom06"
															placeholder="$21.60" required>
														<div class="invalid-feedback">
															Please enter a Currency.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom07">Website
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom07"
															placeholder="http://example.com" required>
														<div class="invalid-feedback">
															Please enter a url.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom08">Phone (US)
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="number" class="form-control"
															id="validationCustom08" placeholder="212-999-0000" required>
														<div class="invalid-feedback">
															Please enter a phone no.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom09">Digits <span
															class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom09"
															placeholder="5" required>
														<div class="invalid-feedback">
															Please enter a digits.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom10">Number <span
															class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom10"
															placeholder="5.0" required>
														<div class="invalid-feedback">
															Please enter a num.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"
														for="validationCustom11">Range [1, 5]
														<span class="text-danger">*</span>
													</label>
													<div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom11"
															placeholder="4" required>
														<div class="invalid-feedback">
															Please select a range.
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<label class="col-lg-4 col-form-label form-label"><a
															href="javascript:void()">Terms &amp; Conditions</a> <span
															class="text-danger">*</span>
													</label>
													<div class="col-lg-8">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value=""
																id="validationCustom12" required>
															<label class="form-check-label" for="validationCustom12">
																Agree to terms and conditions
															</label>
														</div>
													</div>
												</div>
												<div class="mb-3 row">
													<div class="col-lg-8 ms-auto">
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Vertical Forms with icon</h4>
							</div>
							<div class="card-body">
								<div class="basic-form">
									<form class="form-valide-with-icon needs-validation" novalidate>
										<div class="mb-3">
											<label class=" form-label" for="validationCustomUsername">Username</label>
											<div class="input-group">
												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
												<input type="text" class="form-control" id="validationCustomUsername"
													placeholder="Enter a username.." required>
												<div class="invalid-feedback">
													Please Enter a username.
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label class=" form-label" for="dz-password">Password <span
													class="text-danger">*</span></label>
											<div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
												<input type="password" class="form-control" id="dz-password"
													placeholder="Choose a safe one.." required>
												<span class="input-group-text show-pass">
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
												<div class="invalid-feedback">
													Please Enter a username.
												</div>
											</div>
										</div>
										<div class="mb-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value=""
													id="invalidCheck2" required>
												<label class="form-check-label" for="invalidCheck2">
													Check Me out
												</label>
											</div>
										</div>
										<button type="submit" class="btn btn-danger light me-2">Cancel</button>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
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


	<!-- Jquery Validation -->
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	<!-- Form validate init -->
	<script src="js/plugins-init/jquery.validate-init.js"></script>



	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


	<script>
		(function () {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function (form) {
					form.addEventListener('submit', function (event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>
</body>

</html>