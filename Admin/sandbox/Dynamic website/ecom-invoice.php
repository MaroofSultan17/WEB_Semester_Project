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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Invoice</a></li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">

						<div class="card mt-3">
							<div class="card-header"> Invoice <strong>01/01/2023</strong> <span class="float-right">
									<strong>Status:</strong> Pending</span> </div>
							<div class="card-body">
								<div class="row mb-5">
									<div class="mt-4 col-xl-3 col-lg-6 col-sm-6">
										<h6>From:</h6>
										<div> <strong>Webz Poland</strong> </div>
										<div>Madalinskiego 8</div>
										<div>71-101 Szczecin, Poland</div>
										<div>Email: info@webz.com.pl</div>
										<div>Phone: +48 444 666 3333</div>
									</div>
									<div class="mt-4 col-xl-3 col-lg-6 col-sm-6">
										<h6>To:</h6>
										<div> <strong>Bob Mart</strong> </div>
										<div>Attn: Daniel Marek</div>
										<div>43-190 Mikolow, Poland</div>
										<div>Email: marek@daniel.com</div>
										<div>Phone: +48 123 456 789</div>
									</div>
									<div
										class="mt-4 col-xl-6 col-lg-12 col-sm-12 d-flex justify-content-xl-end justify-content-lg-center justify-content-md-center justify-content-xs-start">
										<div class="row align-items-center">
											<div class="col-sm-9">
												<a href="index.php" class="brand-logo justify-content-start p-0 mb-3">
													<svg class="logo-abbr" width="64" height="64" viewBox="0 0 64 64"
														fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="64" height="64" rx="2" fill="#FFF0E4"
															class="svg-logo-rect"></rect>
														<path class="svg-logo-path"
															d="M31.5785 19.6842C31.5785 22.0351 30.765 26.0526 29.1379 31.7368C27.5109 37.386 26.6973 41 26.6973 42.5789C26.6973 44.1228 27.378 44.8947 28.7395 44.8947C30.1341 44.8947 32.0268 43.8246 34.4176 41.6842C34.5172 39.8947 34.7995 37.7544 35.2644 35.2632C36.659 27.4386 38.3525 21.7719 40.3448 18.2632C42.3372 14.7544 44.6616 13 47.318 13C48.8787 13 50.0409 13.4912 50.8046 14.4737C51.6015 15.4211 52 16.6842 52 18.2632C52 23.2456 48.7791 29.9474 42.3372 38.3684C42.2375 39.7368 42.1877 41.1228 42.1877 42.5263C42.1877 45.4386 42.6526 46.8947 43.5824 46.8947C44.1469 46.8947 44.6284 46.8246 45.0268 46.6842L45.7739 48.6842C43.7152 50.2281 41.6564 51 39.5977 51C36.6092 51 34.8991 49.1579 34.4674 45.4737C30.4828 49.1579 27.0792 51 24.2567 51C22.5632 51 21.1852 50.4561 20.1226 49.3684C19.0932 48.2456 18.5785 46.6316 18.5785 44.5263C18.5785 43.2982 18.9604 41.3158 19.7241 38.5789C20.5211 35.807 20.9859 34.1754 21.1188 33.6842C15.7063 31.3333 13 28.0702 13 23.8947C13 21.0175 14.2618 18.4912 16.7854 16.3158C19.3091 14.1053 22.1149 13 25.2031 13C29.4534 13 31.5785 15.2281 31.5785 19.6842ZM22.0651 29.8947C23.2273 25.614 23.8084 22.4211 23.8084 20.3158C23.8084 18.2105 23.0945 17.1579 21.6667 17.1579C20.272 17.1579 18.9936 17.8246 17.8314 19.1579C16.6692 20.4912 16.0881 21.9649 16.0881 23.5789C16.0881 25.1579 16.6692 26.4912 17.8314 27.5789C18.9936 28.6316 20.4049 29.4035 22.0651 29.8947ZM49.0115 18.1579C49.0115 17.2105 48.6794 16.7368 48.0153 16.7368C46.5543 16.7368 44.8774 22.0702 42.9847 32.7368C44.4789 30.6667 45.857 28.193 47.1188 25.3158C48.3806 22.4035 49.0115 20.0175 49.0115 18.1579Z"
															fill="#FF720D"></path>
													</svg>
													<div class="brand-title">Uena</div>
												</a>
												<span>Please send exact amount: <strong class="d-block">0.15050000
														BTC</strong>
													<strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
												<small class="text-muted">Current exchange rate 1BTC = $6590 USD</small>
											</div>
											<div class="col-sm-3 mt-3"> <img src="images/qr.png"
													class="img-fluid width110" alt="/"> </div>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Item</th>
												<th>Description</th>
												<th class="right">Unit Cost</th>
												<th class="center">Qty</th>
												<th class="right">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">1</td>
												<td class="left strong">Origin License</td>
												<td class="left">Extended License</td>
												<td class="right">$999,00</td>
												<td class="center">1</td>
												<td class="right">$999,00</td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td class="left">Custom Services</td>
												<td class="left">Instalation and Customization (cost per hour)</td>
												<td class="right">$150,00</td>
												<td class="center">20</td>
												<td class="right">$3.000,00</td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td class="left">Hosting</td>
												<td class="left">1 year subcription</td>
												<td class="right">$499,00</td>
												<td class="center">1</td>
												<td class="right">$499,00</td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td class="left">Platinum Support</td>
												<td class="left">1 year subcription 24/7</td>
												<td class="right">$3.999,00</td>
												<td class="center">1</td>
												<td class="right">$3.999,00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-lg-4 col-sm-5"> </div>
									<div class="col-lg-4 col-sm-5 ms-auto">
										<table class="table table-clear">
											<tbody>
												<tr>
													<td class="left"><strong class="text-black">Subtotal</strong></td>
													<td class="right">$8.497,00</td>
												</tr>
												<tr>
													<td class="left"><strong class="text-black">Discount (20%)</strong>
													</td>
													<td class="right">$1,699,40</td>
												</tr>
												<tr>
													<td class="left"><strong class="text-black">VAT (10%)</strong></td>
													<td class="right">$679,76</td>
												</tr>
												<tr>
													<td class="left"><strong class="text-black">Total</strong></td>
													<td class="right"><strong class="text-black">$7.477,36</strong><br>
														<strong class="text-black">0.15050000 BTC</strong>
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
	<script src="js/custom.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>


	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


</body>

</html>