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
							<span>Popover</span>
						</div>
					</div>
					<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">Popover</a></li>
						</ol>
					</div>
				</div>
				<!-- row -->

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Bootstrap popover</h4>
							</div>
							<div class="card-body">
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum dolorum
									culpa a maiores officia ab. Cumque necessitatibus voluptates soluta, ullam numquam
									nulla. Et a architecto veritatis sint, autem cupiditate
									iure illo pariatur eum, praesentium numquam ea quaerat ipsam? Corrupti nobis illo
									itaque quae, qui numquam vero ipsa, reiciendis sit repudiandae molestiae natus vel
									voluptatibus exercitationem ducimus neque harum ad,
									commodi excepturi repellat eos fugiat minus eius. Doloremque itaque repudiandae
									saepe quia temporibus? Vitae, reprehenderit aliquam facilis qui at quis provident in
									maiores illo laborum, voluptatem recusandae cupiditate
									nemo. Nulla iusto ad consequatur reprehenderit quod accusamus, vitae, blanditiis
									quae ut tenetur nobis animi dolorum consectetur dignissimos amet illo provident nam
									obcaecati eligendi molestias tempora? Ad nam nobis
									eaque consequatur tempore tenetur eius ipsum reprehenderit dignissimos inventore. Id
									recusandae nemo dicta rerum. Distinctio itaque, veniam dolore inventore aliquid
									assumenda neque. Deserunt!
								</p>
								<div class="bootstrap-popover-wrapper">
									<div class="bootstrap-popover d-inline-block">
										<button type="button" class="btn btn-primary btn-sm px-4 "
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left"
											data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
											title="Popover in Left">Left</button>
									</div>
									<div class="bootstrap-popover d-inline-block">
										<button type="button" class="btn btn-primary btn-sm px-4 "
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
											data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
											title="Popover in Right">Top</button>
									</div>
									<div class="bootstrap-popover d-inline-block">
										<button type="button" class="btn btn-primary btn-sm px-4 "
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
											data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
											title="Popover in Bottom">Bottom</button>
									</div>
									<div class="bootstrap-popover d-inline-block">
										<button type="button" class="btn btn-primary btn-sm px-4 "
											data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right"
											data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."
											title="Popover in Right">Right</button>
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