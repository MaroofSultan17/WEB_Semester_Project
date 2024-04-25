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
							<span>Email</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Read</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-3 email-left-body">
										<div class="email-left-box generic-width px-0 mb-5">
											<div class="p-0">
												<a href="email-compose.php"
													class="btn btn-primary btn-block">Compose</a>
											</div>
											<div class="mail-list mt-4">
												<a href="email-inbox.php" class="list-group-item active"><i
														class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
														class="badge badge-secondary badge-sm float-end">198</span> </a>
												<a href="javascript:void()" class="list-group-item"><i
														class="fa fa-paper-plane font-18 align-middle me-2"></i>Sent</a>
												<a href="javascript:void()" class="list-group-item"><i
														class="fa fa-star font-18 align-middle me-2"></i>Important <span
														class="badge badge-danger badge-sm text-white float-end">47</span>
												</a>
												<a href="javascript:void()" class="list-group-item"><i
														class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a
													href="javascript:void()" class="list-group-item"><i
														class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
											</div>
											<div class="intro-title">
												<h5>Categories</h5>
											</div>
											<div class="mail-list mt-4">
												<a href="email-inbox.php" class="list-group-item"><span
														class="icon-warning"><i class="fa fa-circle"
															aria-hidden="true"></i></span>
													Work </a>
												<a href="email-inbox.php" class="list-group-item"><span
														class="icon-primary"><i class="fa fa-circle"
															aria-hidden="true"></i></span>
													Private </a>
												<a href="email-inbox.php" class="list-group-item"><span
														class="icon-success"><i class="fa fa-circle"
															aria-hidden="true"></i></span>
													Support </a>
												<a href="email-inbox.php" class="list-group-item"><span
														class="icon-dpink"><i class="fa fa-circle"
															aria-hidden="true"></i></span>
													Social </a>
											</div>
										</div>
									</div>
									<div class="col-xl-9">
										<div class="email-right-box">
											<div class="email-tools-box float-end">
												<i class="fa-solid fa-list-ul"></i>
											</div>
											<div class="right-box-padding">
												<div class="toolbar mb-4" role="toolbar">
													<div class="btn-group mb-1">
														<button type="button" class="btn btn-primary light px-3"><i
																class="fa fa-archive"></i></button>
														<button type="button" class="btn btn-primary light px-3"><i
																class="fa fa-exclamation-circle"></i></button>
														<button type="button" class="btn btn-primary light px-3"><i
																class="fa fa-trash"></i></button>
													</div>
													<div class="btn-group mb-1">
														<button type="button"
															class="btn btn-primary light dropdown-toggle px-3"
															data-bs-toggle="dropdown">
															<i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item"
																href="javascript: void(0);">Social</a>
															<a class="dropdown-item"
																href="javascript: void(0);">Promotions</a>
															<a class="dropdown-item"
																href="javascript: void(0);">Updates</a>
															<a class="dropdown-item"
																href="javascript: void(0);">Forums</a>
														</div>
													</div>
													<div class="btn-group mb-1">
														<button type="button"
															class="btn btn-primary light dropdown-toggle px-3"
															data-bs-toggle="dropdown">
															<i class="fa fa-tag"></i> <b class="caret m-l-5"></b>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item"
																href="javascript: void(0);">Updates</a>
															<a class="dropdown-item"
																href="javascript: void(0);">Social</a>
															<a class="dropdown-item"
																href="javascript: void(0);">Promotions</a>
															<a class="dropdown-item"
																href="javascript: void(0);">Forums</a>
														</div>
													</div>
													<div class="btn-group mb-1">
														<button type="button"
															class="btn btn-primary light dropdown-toggle v"
															data-bs-toggle="dropdown">More <span
																class="caret m-l-5"></span>
														</button>
														<div class="dropdown-menu"> <a class="dropdown-item"
																href="javascript: void(0);">Mark as Unread</a> <a
																class="dropdown-item" href="javascript: void(0);">Add to
																Tasks</a>
															<a class="dropdown-item" href="javascript: void(0);">Add
																Star</a> <a class="dropdown-item"
																href="javascript: void(0);">Mute</a>
														</div>
													</div>
												</div>
												<div class="read-content">
													<div
														class="media pt-3 d-xl-flex d-lg-block d-sm-flex d-block justify-content-between">
														<div class="clearfix mb-3 d-flex align-items-center">
															<img class="me-3 rounded" width="70" height="70" alt="image"
																src="images/avatar/1.jpg">
															<div class="media-body me-2">
																<h5 class="text-primary mb-0 mt-1">Ingredia Nutrisha
																</h5>
																<p class="mb-0">20 May 2020</p>
															</div>
														</div>
														<div class="clearfix mb-3">
															<a href="javascript:void()"
																class="btn btn-primary px-3 my-1 light me-2"><i
																	class="fa fa-reply"></i> </a>
															<a href="javascript:void()"
																class="btn btn-primary px-3 my-1 light me-2"><i
																	class="fa fa-long-arrow-right"></i> </a>
															<a href="javascript:void()"
																class="btn btn-primary px-3 my-1 light me-2"><i
																	class="fa fa-trash"></i></a>
														</div>
													</div>
													<hr>
													<div class="media mb-2 mt-3">
														<div class="media-body"><span class="pull-right">07:23 AM</span>
															<h5 class="my-1 text-primary">A Collection Of Tasty Pizza Is
																Here</h5>
															<p class="read-content-email">
																To: Me, info@example.com</p>
														</div>
													</div>
													<div class="read-content-body">
														<h5 class="mb-4">Hi,Ingredia,</h5>
														<p class="mb-2"><strong class="text-black">Ingredia
																Nutrisha,</strong> A collection of textile samples lay
															spread out on the table - Samsa was a travelling salesman -
															and above it there hung a picture</p>
														<p class="mb-2">Even the all-powerful Pointing has no control
															about the blind texts it is an almost unorthographic life
															One day however a small line of blind text by the name of
															Lorem Ipsum decided to leave for
															the far World of Grammar. Aenean vulputate eleifend tellus.
															Aenean leo ligula, porttitor eu, consequat vitae, eleifend
															ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
															feugiat a, tellus.
														</p>
														<p class="mb-2">Aenean vulputate eleifend tellus. Aenean leo
															ligula, porttitor eu, consequat vitae, eleifend ac, enim.
															Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
															tellus. Phasellus viverra nulla ut
															metus varius laoreet. Quisque rutrum. Aenean imperdiet.
															Etiam ultricies nisi vel augue. Curabitur ullamcorper
															ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas
															tempus, tellus eget condimentum
															rhoncus, sem quam semper libero, sit amet adipiscing sem
															neque sed ipsum. Nam quam nunc, blandit vel, luctus
															pulvinar,</p>
														<h5 class="pt-3 text-black">Kind Regards</h5>
														<p>Mr Smith</p>
														<hr>
													</div>
													<button class="btn btn-primary btn-sm"><i
															class="fa-solid fa-forward me-1"></i>Forward</button>
													<button class="btn btn-secondary btn-sm"><i
															class="fa-solid fa-reply me-1"></i>Reply</button>
													<hr>
													<div class="form-group pt-3 mb-3">
														<textarea name="write-email" id="write-email" cols="30" rows="5"
															class="form-control"
															placeholder="It's really an amazing.I want to know more about it..!"></textarea>
													</div>
												</div>
												<div class="text-end">
													<button class="btn btn-primary " type="button">Send</button>
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
	<script src="js/custom.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


	<script>

		$(".fa.fa-star").click(function () {
			$(this).toggleClass("yellow");
		});

		$(".email-tools-box").on('click', function () {
			$(' .email-left-body ,.email-tools-box').toggleClass("active");
		});
	</script>
</body>

</html>