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
	<link href="vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
	<link href="vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
	<link href="vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">
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
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black form-label">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black form-label">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black form-label">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row page-titles mx-0">
					<div class="col-sm-6 p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<p class="mb-0">Your business dashboard template</p>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="profile card card-body px-3 pt-3 pb-0">
							<div class="profile-head">
								<div class="photo-content">
									<div class="cover-photo"></div>
								</div>
								<div class="profile-info">
									<div class="profile-photo">
										<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="/">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">Mitchell C. Shay</h4>
											<p>UX / UI Designer</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">info@example.com</h4>
											<p>Email</p>
										</div>
										<div class="dropdown ms-auto">
											<a href="javascript:void(0);" class="btn btn-primary light sharp"
												data-bs-toggle="dropdown" aria-expanded="true"><svg
													xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
													height="18px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="5" cy="12" r="2"></circle>
														<circle fill="#000000" cx="12" cy="12" r="2"></circle>
														<circle fill="#000000" cx="19" cy="12" r="2"></circle>
													</g>
												</svg></a>
											<ul class="dropdown-menu dropdown-menu-end">
												<li class="dropdown-item"><i
														class="fa fa-user-circle text-primary me-2"></i> View profile
												</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i>
													Add to close friends</li>
												<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i>
													Add to group</li>
												<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i>
													Block</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-statistics">
											<div class="text-center">
												<div class="row">
													<div class="col">
														<h3 class="m-b-0">150</h3><span>Follower</span>
													</div>
													<div class="col">
														<h3 class="m-b-0">140</h3><span>Place Stay</span>
													</div>
													<div class="col">
														<h3 class="m-b-0">45</h3><span>Reviews</span>
													</div>
												</div>
												<div class="mt-4">
													<a href="javascript:void(0);"
														class="btn btn-primary mb-1 me-1">Follow</a>
													<a href="javascript:void(0);" class="btn btn-primary mb-1"
														data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send
														Message</a>
												</div>
											</div>
											<!-- Modal -->
											<div class="modal fade" id="sendMessageModal">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Send Message</h5>
															<button type="button" class="btn-close"
																data-bs-dismiss="modal"></button>
														</div>
														<div class="modal-body">
															<form class="comment-form">
																<div class="row">
																	<div class="col-lg-6">
																		<div class="form-group mb-3">
																			<label class="form-label">Name <span
																					class="text-danger">*</span></label>
																			<input type="text" class="form-control"
																				value="Author" name="Author"
																				placeholder="Author">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group mb-3">
																			<label class="form-label">Email <span
																					class="text-danger">*</span></label>
																			<input type="text" class="form-control"
																				value="Email" placeholder="Email"
																				name="Email">
																		</div>
																	</div>
																	<div class="col-lg-12 mb-3">
																		<div class="form-group">
																			<label class="form-label">Comment</label>
																			<textarea rows="8" class="form-control"
																				name="comment"
																				placeholder="Comment"></textarea>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group mb-0">
																			<input type="submit" value="Post Comment"
																				class="submit btn btn-primary"
																				name="submit">
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-blog">
											<h4 class="text-primary d-inline">Today Highlights</h4>
											<img src="images/profile/1.jpg" alt="/" class="img-fluid mt-4 mb-4 w-100">
											<h4><a href="post-details.php" class="text-black">Darwin's Special Pizza
													Place</a></h4>
											<p class="mb-0">A small river named Duden flows by their place and supplies
												it with the necessary regelialia. It is a paradisematic country, in
												which roasted parts of sentences fly into your mouth.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-interest">
											<h4 class="text-primary d-inline">Interest</h4>
											<div id="lightgallery" class="row mt-4 sp4">
												<a href="images/big/img6.jpg" data-src="images/big/img6.jpg"
													class="lg-item mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
													<img class="img-fluid" src="images/profile/2.jpg"
														style="width:100%;" alt="/">
												</a>
												<a href="images/big/img5.jpg" data-src="images/big/img5.jpg"
													class="lg-item mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
													<img class="img-fluid" src="images/profile/3.jpg"
														style="width:100%;" alt="/">
												</a>
												<a href="images/big/img4.jpg" data-src="images/big/img4.jpg"
													class="lg-item mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
													<img class="img-fluid" src="images/profile/4.jpg"
														style="width:100%;" alt="/">
												</a>
												<a href="images/big/img5.jpg" data-src="images/big/img5.jpg"
													class="lg-item mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
													<img class="img-fluid" src="images/profile/12.jpg"
														style="width:100%;" alt="/">
												</a>
												<a href="images/big/img4.jpg" data-src="images/big/img4.jpg"
													class="lg-item mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
													<img class="img-fluid" src="images/profile/13.jpg"
														style="width:100%;" alt="/">
												</a>
												<a href="images/big/img6.jpg" data-src="images/big/img6.jpg"
													class="lg-item mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
													<img class="img-fluid" src="images/profile/14.jpg"
														style="width:100%;" alt="/">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-news">
											<h4 class="text-primary d-inline">Our Latest News</h4>
											<div class="media pt-3 pb-3">
												<img src="images/profile/5.jpg" alt="image" class="me-3 rounded"
													width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.php"
															class="text-black">Collection's of Tasty Pizza</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I
														thought.</p>
												</div>
											</div>
											<div class="media pt-3 pb-3">
												<img src="images/profile/6.jpg" alt="image" class="me-3 rounded"
													width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.php" class="text-black">List
															Out Your Best Pizza</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I
														thought.</p>
												</div>
											</div>
											<div class="media pt-3 pb-3">
												<img src="images/profile/7.jpg" alt="image" class="me-3 rounded"
													width="75">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.php" class="text-black">Find
															out the Best Taste</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I
														thought.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="card h-auto">
							<div class="card-body">
								<div class="profile-tab">
									<div class="custom-tab-1">
										<ul class="nav nav-tabs">
											<li class="nav-item"><a href="#my-posts" data-bs-toggle="tab"
													class="nav-link active show">Posts</a>
											</li>
											<li class="nav-item"><a href="#about-me" data-bs-toggle="tab"
													class="nav-link">About Me</a>
											</li>
											<li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab"
													class="nav-link">Setting</a>
											</li>
										</ul>
										<div class="tab-content">
											<div id="my-posts" class="tab-pane fade active show">
												<div class="my-post-content pt-3">
													<div class="post-input">
														<textarea name="textarea" id="textarea" cols="30" rows="5"
															class="form-control bg-transparent"
															placeholder="Please type what you want...."></textarea>
														<a href="javascript:void(0);"
															class="btn btn-primary light me-1 px-3"
															data-bs-toggle="modal" data-bs-target="#linkModal"><i
																class="fa fa-link m-0"></i> </a>
														<!-- Modal -->
														<div class="modal fade" id="linkModal">
															<div class="modal-dialog modal-dialog-centered"
																role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title">Social Links</h5>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal">
																		</button>
																	</div>
																	<div class="modal-body">
																		<a class="btn-social facebook"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-facebook-f"></i></a>
																		<a class="btn-social google-plus"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-google-plus-g"></i></a>
																		<a class="btn-social linkedin"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-linkedin-in"></i></a>
																		<a class="btn-social instagram"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-instagram"></i></a>
																		<a class="btn-social twitter"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-twitter"></i></a>
																		<a class="btn-social youtube"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-youtube"></i></a>
																		<a class="btn-social whatsapp"
																			href="javascript:void(0)"><i
																				class="fa-brands fa-whatsapp"></i></a>
																	</div>
																</div>
															</div>
														</div>
														<a href="javascript:void(0);"
															class="btn btn-primary light me-1 px-3"
															data-bs-toggle="modal" data-bs-target="#cameraModal"><i
																class="fa fa-camera m-0"></i> </a>
														<!-- Modal -->
														<div class="modal fade" id="cameraModal">
															<div class="modal-dialog modal-dialog-centered"
																role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title mb-3">Upload images</h5>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal">
																		</button>
																	</div>
																	<div class="modal-body">
																		<div class="input-group mb-3 flex-nowrap">
																			<span class="input-group-text">Upload</span>
																			<div
																				class="form-file border-left-end overflow-hidden">
																				<input type="file"
																					class="form-file-input form-control">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<a href="javascript:void(0);" class="btn btn-primary"
															data-bs-toggle="modal" data-bs-target="#postModal">Post</a>
														<!-- Modal -->
														<div class="modal fade" id="postModal">
															<div class="modal-dialog modal-dialog-centered"
																role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title">Post</h5>
																		<button type="button" class="btn-close"
																			data-bs-dismiss="modal">
																		</button>
																	</div>
																	<div class="modal-body">
																		<textarea name="textarea" cols="30" rows="5"
																			class="form-control bg-transparent"
																			placeholder="Please type what you want...."></textarea>
																		<a class="btn btn-primary"
																			href="javascript:void(0)">Post</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="profile-uoloaded-post border-bottom-1 pb-5">
														<img src="images/profile/8.jpg" alt="/" class="img-fluid w-100">
														<a class="post-title" href="post-details.php">
															<h3 class="text-black">Taste Is Main Priority Here</h3>
														</a>
														<p>A wonderful serenity has take possession of my entire soul
															like these sweet morning of spare which enjoy whole heart.A
															wonderful serenity has take possession of my entire soul
															like these sweet morning
															of spare which enjoy whole heart.</p>
														<button class="btn btn-primary me-2"><span class="me-2"><i
																	class="fa fa-heart"></i></span>Like</button>
														<button class="btn btn-secondary" data-bs-toggle="modal"
															data-bs-target="#replyModal"><span class="me-2"><i
																	class="fa fa-reply"></i></span>Reply</button>
													</div>
													<div class="profile-uoloaded-post border-bottom-1 pb-5">
														<img src="images/profile/9.jpg" alt="/" class="img-fluid w-100">
														<a class="post-title" href="post-details.php">
															<h3 class="text-black">Double Cheese Dacker Special Pizza
															</h3>
														</a>
														<p>A wonderful serenity has take possession of my entire soul
															like these sweet morning of spare which enjoy whole heart.A
															wonderful serenity has take possession of my entire soul
															like these sweet morning
															of spare which enjoy whole heart.</p>
														<button class="btn btn-primary me-2"><span class="me-2"><i
																	class="fa fa-heart"></i></span>Like</button>
														<button class="btn btn-secondary" data-bs-toggle="modal"
															data-bs-target="#replyModal"><span class="me-2"><i
																	class="fa fa-reply"></i></span>Reply</button>
													</div>
													<div class="profile-uoloaded-post pb-3">
														<img src="images/profile/8.jpg" alt="/" class="img-fluid w-100">
														<a class="post-title" href="post-details.php">
															<h3 class="text-black">Are You Looking For,the best Pizza
																Place?</h3>
														</a>
														<p>A wonderful serenity has take possession of my entire soul
															like these sweet morning of spare which enjoy whole heart.A
															wonderful serenity has take possession of my entire soul
															like these sweet morning
															of spare which enjoy whole heart.</p>
														<button class="btn btn-primary me-2"><span class="me-2"><i
																	class="fa fa-heart"></i></span>Like</button>
														<button class="btn btn-secondary" data-bs-toggle="modal"
															data-bs-target="#replyModal"><span class="me-2"><i
																	class="fa fa-reply"></i></span>Reply</button>
													</div>
												</div>
											</div>
											<div id="about-me" class="tab-pane fade">
												<div class="profile-about-me">
													<div class="pt-4 border-bottom-1 pb-3">
														<h4 class="text-primary">About Me</h4>
														<p class="mb-2">A wonderful serenity has taken possession of my
															entire soul, like these sweet mornings of spring which I
															enjoy with my whole heart. I am alone, and feel the charm of
															existence was created for the bliss of souls like mine.I am
															so happy, my dear friend, so absorbed in the exquisite sense
															of mere tranquil existence, that I neglect my talents.</p>
														<p>A collection of textile samples lay spread out on the table -
															Samsa was a travelling salesman - and above it there hung a
															picture that he had recently cut out of an illustrated
															magazine and housed in a nice, gilded frame.</p>
													</div>
												</div>
												<div class="profile-skills mb-5">
													<h4 class="text-primary mb-2">Skills</h4>
													<a href="javascript:void(0);"
														class="btn btn-primary light btn-xs mb-1">Admin</a>
													<a href="javascript:void(0);"
														class="btn btn-primary light btn-xs mb-1">Dashboard</a>
													<a href="javascript:void(0);"
														class="btn btn-primary light btn-xs mb-1">Photoshop</a>
													<a href="javascript:void(0);"
														class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
													<a href="javascript:void(0);"
														class="btn btn-primary light btn-xs mb-1">Responsive</a>
													<a href="javascript:void(0);"
														class="btn btn-primary light btn-xs mb-1">Crypto</a>
												</div>
												<div class="profile-lang  mb-5">
													<h4 class="text-primary mb-2">Language</h4>
													<a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i
															class="flag-icon flag-icon-us"></i> English</a>
													<a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i
															class="flag-icon flag-icon-fr"></i> French</a>
													<a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i
															class="flag-icon flag-icon-bd"></i> Bangla</a>
												</div>
												<div class="profile-personal-info">
													<h4 class="text-primary mb-4">Personal Information</h4>
													<div class="row mb-2">
														<div class="col-sm-3 col-5">
															<h5 class="f-w-500">Name <span class="pull-right">:</span>
															</h5>
														</div>
														<div class="col-sm-9 col-7"><span>Mitchell C.Shay</span>
														</div>
													</div>
													<div class="row mb-2">
														<div class="col-sm-3 col-5">
															<h5 class="f-w-500">Email <span class="pull-right">:</span>
															</h5>
														</div>
														<div class="col-sm-9 col-7"><span>example@examplel.com</span>
														</div>
													</div>
													<div class="row mb-2">
														<div class="col-sm-3 col-5">
															<h5 class="f-w-500">Availability <span
																	class="pull-right">:</span></h5>
														</div>
														<div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
														</div>
													</div>
													<div class="row mb-2">
														<div class="col-sm-3 col-5">
															<h5 class="f-w-500">Age <span class="pull-right">:</span>
															</h5>
														</div>
														<div class="col-sm-9 col-7"><span>27</span>
														</div>
													</div>
													<div class="row mb-2">
														<div class="col-sm-3 col-5">
															<h5 class="f-w-500">Location <span
																	class="pull-right">:</span></h5>
														</div>
														<div class="col-sm-9 col-7"><span>Rosemont Avenue Melbourne,
																Florida</span>
														</div>
													</div>
													<div class="row mb-2">
														<div class="col-sm-3 col-5">
															<h5 class="f-w-500">Year Experience <span
																	class="pull-right">:</span></h5>
														</div>
														<div class="col-sm-9 col-7"><span>07 Year Experiences</span>
														</div>
													</div>
												</div>
											</div>
											<div id="profile-settings" class="tab-pane fade">
												<div class="pt-3">
													<div class="settings-form">
														<h4 class="text-primary">Account Setting</h4>
														<form>
															<div class="row">
																<div class="mb-3 col-md-6">
																	<label class="form-label">Email</label>
																	<input type="email" placeholder="Email"
																		class="form-control">
																</div>
																<div class="mb-3 col-md-6">
																	<label class="form-label">Password</label>
																	<input type="password" placeholder="Password"
																		class="form-control">
																</div>
															</div>
															<div class="mb-3">
																<label class="form-label">Address</label>
																<input type="text" placeholder="1234 Main St"
																	class="form-control">
															</div>
															<div class="mb-3">
																<label class="form-label">Address 2</label>
																<input type="text"
																	placeholder="Apartment, studio, or floor"
																	class="form-control">
															</div>
															<div class="row">
																<div class="col-md-6 mb-3">
																	<label class="form-label">City</label>
																	<input type="text" class="form-control">
																</div>
																<div class="col-md-4 mb-3">
																	<label class="form-label">State</label>
																	<select class="form-control default-select wide"
																		id="inputState">
																		<option selected="">Choose...</option>
																		<option>Option 1</option>
																		<option>Option 2</option>
																		<option>Option 3</option>
																	</select>
																</div>
																<div class="col-md-2 mb-3">
																	<label class="form-label">Zip</label>
																	<input type="text" class="form-control">
																</div>
															</div>
															<div class="mb-3">
																<div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input mt-0"
																		id="gridCheck">
																	<label class="form-check-label" for="gridCheck">
																		Check me out</label>
																</div>
															</div>
															<button class="btn btn-primary" type="submit">Sign
																in</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="btn-close"
														data-bs-dismiss="modal"></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light"
														data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
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

	<!--removeIf(production)-->

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="vendor/lightgallery/dist/lightgallery.min.js"></script>
	<script src="vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
	<script src="vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>


	<script>
		$('#lightgallery').lightGallery({
			thumbnail: true,
		});
	</script>

</body>

</html>