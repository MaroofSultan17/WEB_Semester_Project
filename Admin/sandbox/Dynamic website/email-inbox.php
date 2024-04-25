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
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
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
										<div class="email-right-box ">
											<div role="toolbar"
												class="toolbar ms-1 ms-sm-0 ms-xl-1 d-flex align-items-center">
												<div class="ps-1 btn-group mb-1">
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="checkAll">
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</div>
												<div class="btn-group mb-1">
													<button class="btn btn-primary light px-3" type="button"><i
															class="ti-reload"></i>
													</button>
												</div>
												<div class="btn-group mb-1 mx-2">
													<button aria-expanded="false" data-bs-toggle="dropdown"
														class="btn btn-primary px-3 light dropdown-toggle"
														type="button">More <span class="caret"></span> </button>
													<div class="dropdown-menu"> <a href="javascript: void(0);"
															class="dropdown-item">Mark as Unread</a> <a
															href="javascript: void(0);" class="dropdown-item">Add to
															Tasks</a>
														<a href="javascript: void(0);" class="dropdown-item">Add
															Star</a> <a href="javascript: void(0);"
															class="dropdown-item">Mute</a>
													</div>
												</div>
												<div class="email-tools-box">
													<i class="fa-solid fa-list-ul"></i>
												</div>
												<form class="form-head style-1 d-none d-sm-block ms-auto">
													<div class="input-group search-area ms-auto w-100 d-inline-flex">
														<input type="text" class="form-control"
															placeholder="Search here">
														<span class="input-group-text"><button
																class="bg-transparent border-0"><i
																	class="flaticon-381-search-2"></i></button></span>
													</div>
												</form>
											</div>
											<div class="email-list mt-3">
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox2">
																	<label class="form-check-label"
																		for="checkbox2"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of
																textile samples lay spread out on the table - Samsa was
																a travelling salesman - and above it there hung a
																picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox3">
																	<label class="form-check-label"
																		for="checkbox3"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day
																however a small line of blind text by the name of Lorem
																Ipsum decided to leave for the far World of Grammar.
															</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox4">
																	<label class="form-check-label"
																		for="checkbox4"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind
																texts it is an almost unorthographic life One day
																however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox5">
																	<label class="form-check-label"
																		for="checkbox5"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no
																control about the blind texts it is an almost
																unorthographic life One day however a small line of
																blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox6">
																	<label class="form-check-label"
																		for="checkbox6"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of
																textile samples lay spread out on the table - Samsa was
																a travelling salesman - and above it there hung a
																picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox7">
																	<label class="form-check-label"
																		for="checkbox7"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day
																however a small line of blind text by the name of Lorem
																Ipsum decided to leave for the far World of Grammar.
															</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox8">
																	<label class="form-check-label"
																		for="checkbox8"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind
																texts it is an almost unorthographic life One day
																however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox9">
																	<label class="form-check-label"
																		for="checkbox9"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no
																control about the blind texts it is an almost
																unorthographic life One day however a small line of
																blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox10">
																	<label class="form-check-label"
																		for="checkbox10"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of
																textile samples lay spread out on the table - Samsa was
																a travelling salesman - and above it there hung a
																picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox11">
																	<label class="form-check-label"
																		for="checkbox11"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day
																however a small line of blind text by the name of Lorem
																Ipsum decided to leave for the far World of Grammar.
															</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox12">
																	<label class="form-check-label"
																		for="checkbox12"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind
																texts it is an almost unorthographic life One day
																however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox13">
																	<label class="form-check-label"
																		for="checkbox13"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no
																control about the blind texts it is an almost
																unorthographic life One day however a small line of
																blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox14">
																	<label class="form-check-label"
																		for="checkbox14"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of
																textile samples lay spread out on the table - Samsa was
																a travelling salesman - and above it there hung a
																picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox15">
																	<label class="form-check-label"
																		for="checkbox15"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day
																however a small line of blind text by the name of Lorem
																Ipsum decided to leave for the far World of Grammar.
															</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox16">
																	<label class="form-check-label"
																		for="checkbox16"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind
																texts it is an almost unorthographic life One day
																however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox17">
																	<label class="form-check-label"
																		for="checkbox17"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no
																control about the blind texts it is an almost
																unorthographic life One day however a small line of
																blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox18">
																	<label class="form-check-label"
																		for="checkbox18"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Ingredia Nutrisha, A collection of
																textile samples lay spread out on the table - Samsa was
																a travelling salesman - and above it there hung a
																picture</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox19">
																	<label class="form-check-label"
																		for="checkbox19"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Almost unorthographic life One day
																however a small line of blind text by the name of Lorem
																Ipsum decided to leave for the far World of Grammar.
															</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message unread">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox20">
																	<label class="form-check-label"
																		for="checkbox20"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Pointing has no control about the blind
																texts it is an almost unorthographic life One day
																however a small line of blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
												<div class="message">
													<div>
														<div class="d-flex message-single">
															<div class="ps-1 align-self-center">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input"
																		id="checkbox21">
																	<label class="form-check-label"
																		for="checkbox21"></label>
																</div>
															</div>
															<div class="ms-2">
																<button
																	class="border-0 bg-transparent align-middle p-0"><i
																		class="fa fa-star"
																		aria-hidden="true"></i></button>
															</div>
														</div>
														<a href="email-read.php" class="col-mail col-mail-2">
															<div class="subject">Even the all-powerful Pointing has no
																control about the blind texts it is an almost
																unorthographic life One day however a small line of
																blind text by the name of</div>
															<div class="date">11:49 am</div>
														</a>
													</div>
												</div>
											</div>
											<!-- panel -->
											<div class="row mt-4">
												<div class="col-12 ps-3">
													<nav>
														<ul
															class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
															<li class="page-item page-indicator"><a class="page-link"
																	href="javascript:void()"><i
																		class="la la-angle-left"></i></a></li>
															<li class="page-item "><a class="page-link"
																	href="javascript:void()">1</a></li>
															<li class="page-item active"><a class="page-link"
																	href="javascript:void()">2</a></li>
															<li class="page-item"><a class="page-link"
																	href="javascript:void()">3</a></li>
															<li class="page-item"><a class="page-link"
																	href="javascript:void()">4</a></li>
															<li class="page-item page-indicator"><a class="page-link"
																	href="javascript:void()"><i
																		class="la la-angle-right"></i></a></li>
														</ul>
													</nav>
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