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
							<span>Modal</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Modal</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Bootstrap Modal</h4>
							</div>
							<div class="card-body">

								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, minima! Eligendi minima
									illum itaque harum aliquam vel, sunt magni dolorem! Cum quaerat est cupiditate saepe
									quidem, fugiat in at magni ad provident distinctio
									eum tempore laboriosam adipisci, tempora cumque ex quis unde voluptatem
									consequuntur. Excepturi quibusdam accusamus deleniti officiis ullam repellendus
									magni unde? Saepe quibusdam vel, ipsum numquam ratione tempore.
									Dolor optio aliquid in velit eaque, sed delectus reprehenderit quam quidem a eum id
									nostrum ullam obcaecati error deleniti modi quasi harum possimus voluptatum repellat
									saepe! Omnis dolor maiores eaque deserunt exercitationem
									incidunt autem et voluptatibus molestias quod explicabo ipsam nam vitae a
									architecto, consectetur quas facilis sed nulla, placeat eum ex, ducimus in. Hic quo
									necessitatibus autem tempora provident!</p>
								<div class="bootstrap-modal">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target="#basicModal">Basic modal</button>
									<!-- Modal -->
									<div class="modal fade" id="basicModal">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">Modal body text goes here.</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>

									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target="#exampleModalLong">Long content Modal</button>
									<!-- Modal -->
									<div class="modal fade" id="exampleModalLong">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
														et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
														dolor auctor.</p>
													<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
														cursus magna, vel scelerisque nisl consectetur et. Donec sed
														odio dui. Donec ullamcorper nulla non metus auctor fringilla.
													</p>
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
														et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
														dolor auctor.</p>
													<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
														cursus magna, vel scelerisque nisl consectetur et. Donec sed
														odio dui. Donec ullamcorper nulla non metus auctor fringilla.
													</p>
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
														et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
														dolor auctor.</p>
													<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
														cursus magna, vel scelerisque nisl consectetur et. Donec sed
														odio dui. Donec ullamcorper nulla non metus auctor fringilla.
													</p>
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
														et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
														dolor auctor.</p>
													<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
														cursus magna, vel scelerisque nisl consectetur et. Donec sed
														odio dui. Donec ullamcorper nulla non metus auctor fringilla.
													</p>
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
														et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
														dolor auctor.</p>
													<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
														cursus magna, vel scelerisque nisl consectetur et. Donec sed
														odio dui. Donec ullamcorper nulla non metus auctor fringilla.
													</p>
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
														et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
														dolor auctor.</p>
													<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
														cursus magna, vel scelerisque nisl consectetur et. Donec sed
														odio dui. Donec ullamcorper nulla non metus auctor fringilla.
													</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target="#exampleModalCenter">Modal centered</button>
									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">
													<p>Cras mattis consectetur purus sit amet fermentum. Cras justo
														odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
														risus, porta ac consectetur ac, vestibulum at eros.</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>

									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target="#exampleModalpopover">Modal with tooltip</button>
									<!-- Modal -->
									<div class="modal fade" id="exampleModalpopover">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">
													<h5>Popover in a modal</h5>
													<p>This <a href="javascript:void(0);" role="button"
															data-bs-container="body" data-bs-toggle="popover"
															class="btn btn-secondary btn-sm popover-test"
															data-bs-title="Popover title"
															data-bs-content="Popover body content is set in this attribute.">button</a>
														triggers a popover on click.</p>
													<hr>
													<h5>Tooltips in a modal</h5>
													<p><a href="javascript:void(0);" class="tooltip-test text-primary"
															data-bs-toggle="tooltip" data-bs-title="Told you!">This
															link</a> and <a href="javascript:void(0);"
															class="tooltip-test text-primary" data-bs-toggle="tooltip"
															data-bs-title="Another one!">that link</a> have tooltips on
														hover.</p>

												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>

									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target="#modalGrid">Grid Inside Modal</button>
									<!-- Modal -->
									<div class="modal fade" id="modalGrid">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">
													<div class="container">
														<div class="row">
															<div class="col-md-4">.col-md-4</div>
															<div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
														</div>
														<div class="row">
															<div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
															<div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
														</div>
														<div class="row">
															<div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
														</div>
														<div class="row">
															<div class="col-sm-9">Level 1: .col-sm-9
																<div class="row">
																	<div class="col-8 col-sm-6">Level 2: .col-8
																		.col-sm-6
																	</div>
																	<div class="col-4 col-sm-6">Level 2: .col-4
																		.col-sm-6
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>

									<!-- Large modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target=".bd-example-modal-lg">Large modal</button>
									<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
										aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">Modal body text goes here.</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>

									<!-- Small modal -->
									<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
										data-bs-target=".bd-example-modal-sm">Small modal</button>
									<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
										aria-hidden="true">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Modal title</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal">
													</button>
												</div>
												<div class="modal-body">Modal body text goes here.</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
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
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
	<script>
		$(function () {
			$('[data-bs-toggle="popover"]').popover()
		})
	</script>
</body>

</html>