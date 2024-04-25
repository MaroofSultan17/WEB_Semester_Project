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
							<span>Grid</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Grid</a></li>
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Grid options</h4>
							</div>
							<div class="card-body">
								<p>While Bootstrap u ses or for defining most sizes,are used for grid breakpoints and
									container widths. This is because the viewport width is in pixels and does not
									change with the font size. See how aspects of the Bootstrap
									grid system work across multiple devices with a handy table.</p>
								<div class="table-responsive">
									<table class="table table-bordered table-striped" style="min-width: 480px;">
										<thead>
											<tr>
												<th></th>
												<th class="text-center text-black">
													Extra small<br>
													<small class="text-black">&lt;576px</small>
												</th>
												<th class="text-center text-black">
													Small<br>
													<small class="text-black">≥576px</small>
												</th>
												<th class="text-center text-black">
													Medium<br>
													<small class="text-black">≥768px</small>
												</th>
												<th class="text-center text-black">
													Large<br>
													<small class="text-black">≥992px</small>
												</th>
												<th class="text-center text-black">
													Extra large<br>
													<small class="text-black">≥1200px</small>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-nowrap text-black" scope="row">Max container width</th>
												<td>None (auto)</td>
												<td>540px</td>
												<td>720px</td>
												<td>960px</td>
												<td>1140px</td>
											</tr>
											<tr>
												<th class="text-nowrap text-black" scope="row">Class prefix</th>
												<td><code>.col-</code></td>
												<td><code>.col-sm-</code></td>
												<td><code>.col-md-</code></td>
												<td><code>.col-lg-</code></td>
												<td><code>.col-xl-</code></td>
											</tr>
											<tr>
												<th class="text-nowrap text-black" scope="row"># of columns</th>
												<td colspan="5">12</td>
											</tr>
											<tr>
												<th class="text-nowrap text-black" scope="row">Gutter width</th>
												<td colspan="5">24px (12px on each side of a column)</td>
											</tr>
											<tr>
												<th class="text-nowrap text-black" scope="row">Nestable</th>
												<td colspan="5">Yes</td>
											</tr>
											<tr>
												<th class="text-nowrap text-black" scope="row">Column ordering</th>
												<td colspan="5">Yes</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Grid Column</h4>
							</div>
							<div class="card-body">
								<p>Using a single set of grid classes, you can create a default grid system that starts
									out stacked on mobile devices and tablet devices (the extra small to small range)
									before becoming horizontal on desktop (medium) devices. Place grid columns in any
								</p>
								<div class="row">
									<div class="col-lg-12">
										<div class="grid-col mb-4">.col-lg-12</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-11">
										<div class="grid-col mb-4">.col-lg-11</div>
									</div>
									<div class="col-xl-1">
										<div class="grid-col mb-4">.col-lg-01</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-10">
										<div class="grid-col mb-4">.col-lg-10</div>
									</div>
									<div class="col-xl-2">
										<div class="grid-col mb-4">.col-lg-02</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-9">
										<div class="grid-col mb-4">.col-lg-09</div>
									</div>
									<div class="col-xl-3">
										<div class="grid-col mb-4">.col-lg-03</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-8">
										<div class="grid-col mb-4">.col-lg-08</div>
									</div>
									<div class="col-xl-4">
										<div class="grid-col mb-4">.col-lg-04</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-7">
										<div class="grid-col mb-4">.col-lg-07</div>
									</div>
									<div class="col-xl-5">
										<div class="grid-col mb-4">.col-lg-05</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-6">
										<div class="grid-col mb-4">.col-lg-06</div>
									</div>
									<div class="col-xl-6">
										<div class="grid-col mb-4">.col-lg-06</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-5">
										<div class="grid-col mb-4">.col-lg-05</div>
									</div>
									<div class="col-xl-7">
										<div class="grid-col mb-4">.col-lg-07</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-4">
										<div class="grid-col mb-4">.col-lg-04</div>
									</div>
									<div class="col-xl-8">
										<div class="grid-col mb-4">.col-lg-08</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-3">
										<div class="grid-col mb-4">.col-lg-03</div>
									</div>
									<div class="col-xl-9">
										<div class="grid-col mb-4">.col-lg-09</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-2">
										<div class="grid-col mb-4">.col-lg-02</div>
									</div>
									<div class="col-xl-10">
										<div class="grid-col mb-4">.col-lg-10</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xl-1">
										<div class="grid-col mb-4">.col-lg-01</div>
									</div>
									<div class="col-xl-11">
										<div class="grid-col mb-4">.col-lg-11</div>
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


</body>

</html>