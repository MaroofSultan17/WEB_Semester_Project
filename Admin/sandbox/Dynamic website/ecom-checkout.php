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
							<li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Checkout</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4 order-lg-2 mb-4">
										<h4 class="d-flex justify-content-between align-items-center mb-3">
											<span class="text-black">Your cart</span>
											<span class="badge badge-primary badge-pill">3</span>
										</h4>
										<ul class="list-group mb-3">
											<li class="list-group-item d-flex justify-content-between lh-condensed">
												<div>
													<h6 class="my-0">Product name</h6>
													<small class="text-muted">Brief description</small>
												</div>
												<span class="text-muted">$12</span>
											</li>
											<li class="list-group-item d-flex justify-content-between lh-condensed">
												<div>
													<h6 class="my-0">Second product</h6>
													<small class="text-muted">Brief description</small>
												</div>
												<span class="text-muted">$8</span>
											</li>
											<li class="list-group-item d-flex justify-content-between lh-condensed">
												<div>
													<h6 class="my-0">Third item</h6>
													<small class="text-muted">Brief description</small>
												</div>
												<span class="text-muted">$5</span>
											</li>
											<li class="list-group-item d-flex justify-content-between active">
												<div class="text-white">
													<h6 class="my-0 text-white">Promo code</h6>
													<small>EXAMPLECODE</small>
												</div>
												<span class="text-white">-$5</span>
											</li>
											<li class="list-group-item d-flex justify-content-between">
												<span>Total (USD)</span>
												<strong class="text-black">$20</strong>
											</li>
										</ul>

										<form>

											<div class="input-group">
												<input type="text" class="form-control" placeholder="Promo code">
												<button type="submit" class="btn btn-primary">Redeem</button>
											</div>
										</form>
									</div>
									<div class="col-lg-8 order-lg-1">
										<h4 class="mb-3">Billing address</h4>
										<form class="needs-validation" novalidate="">
											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="firstName" class="form-label">First name</label>
													<input type="text" class="form-control" id="firstName"
														placeholder="First Name" value="" required="">
													<div class="invalid-feedback">
														Valid first name is required.
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label for="lastName" class="form-label">Last name</label>
													<input type="text" class="form-control" id="lastName"
														placeholder="Last Name" value="" required="">
													<div class="invalid-feedback">
														Valid last name is required.
													</div>
												</div>
											</div>

											<div class="mb-3">
												<label for="username" class="form-label">Username</label>
												<div class="input-group">
													<span class="input-group-text">@</span>
													<input type="text" class="form-control" id="username"
														placeholder="Username" required="">
													<div class="invalid-feedback" style="width: 100%;">
														Your username is required.
													</div>
												</div>
											</div>

											<div class="mb-3">
												<label for="email" class="form-label">Email <span
														class="text-muted">(Optional)</span></label>
												<input type="email" class="form-control" id="email"
													placeholder="you@example.com">
												<div class="invalid-feedback">
													Please enter a valid email address for shipping updates.
												</div>
											</div>

											<div class="mb-3">
												<label for="address" class="form-label">Address</label>
												<input type="text" class="form-control" id="address"
													placeholder="1234 Main St" required="">
												<div class="invalid-feedback">
													Please enter your shipping address.
												</div>
											</div>

											<div class="mb-3">
												<label for="address2" class="form-label">Address 2 <span
														class="text-muted">(Optional)</span></label>
												<input type="text" class="form-control" id="address2"
													placeholder="Apartment or suite">
											</div>

											<div class="row">
												<div class="col-md-5 mb-3">
													<label class="form-label">Country</label>
													<select class="default-select form-control wide w-100">
														<option selected>Choose...</option>
														<option value="1">United States</option>
													</select>
													<div class="invalid-feedback">
														Please select a valid country.
													</div>
												</div>
												<div class="col-md-4 mb-3">
													<label class="form-label">State</label>
													<select class="default-select form-control wide w-100">
														<option selected>Choose...</option>
														<option>California</option>
													</select>
													<div class="invalid-feedback">
														Please provide a valid state.
													</div>
												</div>
												<div class="col-md-3 mb-3">
													<label for="zip" class="form-label">Zip</label>
													<input type="text" class="form-control" id="zip" placeholder=""
														required="">
													<div class="invalid-feedback">
														Zip code required.
													</div>
												</div>
											</div>
											<hr class="mb-4">
											<div class="form-check custom-checkbox mb-2">
												<input type="checkbox" class="form-check-input" id="same-address">
												<label class="form-check-label" for="same-address">Shipping address
													is
													the same as
													my billing address</label>
											</div>
											<div class="form-check custom-checkbox mb-2">
												<input type="checkbox" class="form-check-input" id="save-info">
												<label class="form-check-label" for="save-info">Save this
													information
													for next
													time</label>
											</div>
											<hr class="mb-4">

											<h4 class="mb-3">Payment</h4>

											<div class="d-block my-3">
												<div class="form-check custom-radio mb-2">
													<input id="credit" name="paymentMethod" type="radio"
														class="form-check-input" checked="" required="">
													<label class="form-check-label" for="credit">Credit card</label>
												</div>
												<div class="form-check custom-radio mb-2">
													<input id="debit" name="paymentMethod" type="radio"
														class="form-check-input" required="">
													<label class="form-check-label" for="debit">Debit card</label>
												</div>
												<div class="form-check custom-radio mb-2">
													<input id="paypal" name="paymentMethod" type="radio"
														class="form-check-input" required="">
													<label class="form-check-label" for="paypal">Paypal</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="cc-name" class="form-label">Name on card</label>
													<input type="text" class="form-control" id="cc-name" placeholder=""
														required="">
													<small class="text-muted">Full name as displayed on card</small>
													<div class="invalid-feedback">
														Name on card is required
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label for="cc-number" class="form-label">Credit card number</label>
													<input type="text" class="form-control" id="cc-number"
														placeholder="" required="">
													<div class="invalid-feedback">
														Credit card number is required
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 mb-3">
													<label for="cc-expiration" class="form-label">Expiration</label>
													<input type="text" class="form-control" id="cc-expiration"
														placeholder="" required="">
													<div class="invalid-feedback">
														Expiration date required
													</div>
												</div>
												<div class="col-md-3 mb-3">
													<label for="cc-expiration" class="form-label">CVV</label>
													<input type="text" class="form-control" id="cc-cvv" placeholder=""
														required="">
													<div class="invalid-feedback">
														Security code required
													</div>
												</div>
											</div>
											<hr class="mb-4">
											<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to
												checkout</button>
										</form>
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

<!-- Mirrored from uena.dexignzone.com/django/xhtml/ecom-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 04:26:10 GMT -->

</html>