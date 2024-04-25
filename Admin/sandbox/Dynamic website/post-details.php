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

	<link href="vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
	<link href="vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
	<link href="vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">
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
							<span>Post Details</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Post Details</a></li>
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
											<h4 class="text-muted mb-0">hello@email.com</h4>
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
																			<label
																				class="text-black form-label mb-2">Name
																				<span
																					class="text-danger">*</span></label>
																			<input type="text" class="form-control"
																				value="Author" name="Author"
																				placeholder="Author">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group mb-3">
																			<label
																				class="text-black form-label mb-2">Email
																				<span
																					class="text-danger">*</span></label>
																			<input type="text" class="form-control"
																				value="Email" placeholder="Email"
																				name="Email">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group mb-3">
																			<label
																				class="text-black form-label mb-2">Comment</label>
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
						<div class="card">
							<div class="card-body">
								<div class="post-details">
									<h3 class="mb-2 text-black">Are You Looking For,the best Pizza Place?</h3>
									<ul class="mb-4 post-meta d-flex flex-wrap">
										<li class="post-author me-3">By Admin</li>
										<li class="post-date me-3"><i class="far fa-calendar me-2"></i> 18 Nov 2020</li>
										<li class="post-comment"><i class="far fa-comment me-2"></i> 28</li>
									</ul>
									<img src="images/profile/8.jpg" alt="/" class="img-fluid mb-3 w-100">
									<p>A wonderful serenity has take possession of my entire soul like these sweet
										morning of spare which enjoy whole heart.A wonderful serenity has take
										possession of my entire soul like these sweet morning of spare which enjoy whole
										heart.</p>
									<p>A collection of textile samples lay spread out on the table - Samsa was a
										travelling salesman - and above it there hung a picture that he had recently cut
										out of an illustrated magazine and housed in a nice, gilded frame.</p>
									<blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting
										industry. Has been the industry's standard text ever since the 1500s, when an
										unknown printer took a galley of type and scrambled it to make a type
										specimencenturies.</blockquote>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet
										mornings of spring which I enjoy with my whole heart. I am alone, and feel the
										charm of existence was created for the bliss of souls like mine.I am so happy,
										my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
										that I neglect my talents.</p>
									<div class="profile-skills mt-5 mb-5">
										<h4 class="text-primary mb-2">Add</h4>
										<a href="javascript:void(0);"
											class="btn btn-primary light btn-xs mb-1">Cheese</a>
										<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Coca</a>
										<a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Choco
											lava</a>
										<a href="javascript:void(0);"
											class="btn btn-primary light btn-xs mb-1">Paneer</a>
										<a href="javascript:void(0);"
											class="btn btn-primary light btn-xs mb-1">Sause</a>
									</div>
									<div class="comment-respond" id="respond">
										<h4 class="comment-reply-title text-primary mb-3" id="reply-title">Leave a Reply
										</h4>
										<form class="comment-form" id="commentform" method="post">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group mb-3">
														<label for="author" class="text-black form-label mb-2">Name
															<span class="text-danger">*</span></label>
														<input type="text" class="form-control" value="Author"
															name="Author" placeholder="Author" id="author">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group mb-3">
														<label for="email" class="text-black form-label mb-2">Email
															<span class="text-danger">*</span></label>
														<input type="text" class="form-control" value="Email"
															placeholder="Email" name="Email" id="email">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group mb-3">
														<label for="comment"
															class="text-black form-label mb-2">Comment</label>
														<textarea rows="8" class="form-control" name="comment"
															placeholder="Comment" id="comment"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<input type="submit" value="Post Comment"
															class="submit btn btn-primary" id="submit" name="submit">
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