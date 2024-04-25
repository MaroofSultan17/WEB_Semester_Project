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
	<link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Compose</a></li>
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
										<div class="email-left-box">
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
														class="badge badge-danger text-white badge-sm float-end">47</span>
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
											<div class="d-flex align-items-center">
												<h4 class="d-md-none d-sm-block">Email</h4>
												<div class="email-tools-box float-end mb-2">
													<i class="fa-solid fa-list-ul"></i>
												</div>
											</div>
											<div class="compose-content">
												<form action="#">
													<div class="mb-3">
														<input type="text" class="form-control bg-transparent"
															placeholder=" To:">
													</div>
													<div class="mb-3">
														<input type="text" class="form-control bg-transparent"
															placeholder=" Subject:">
													</div>
													<div class="mb-3">
														<textarea id="email-compose-editor"
															class="textarea_editor form-control bg-transparent"
															rows="15" placeholder="Enter text ..."></textarea>
													</div>
												</form>

												<h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchment</h5>
												<form action="#" class="dropzone">
													<div class="fallback">
														<input name="file" type="file" multiple>
													</div>
												</form>
											</div>
											<div class="text-start mt-4 mb-3">
												<button class="btn btn-danger light btn-sl-sm me-2" type="button"><span
														class="me-2"><i class="fa fa-times"
															aria-hidden="true"></i></span>Discard</button>
												<button class="btn btn-primary btn-sl-sm" type="button"><span
														class="me-2"><i
															class="fa fa-paper-plane"></i></span>Send</button>
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

	<script src="vendor/dropzone/dist/dropzone.js"></script>

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