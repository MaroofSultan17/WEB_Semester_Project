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

	<meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard">
	<meta name="description" content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">

	<meta property="og:title" content="Uena - Django Restaurant Admin Dashboard Template">
	<meta property="og:description" content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Chartist -->
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
	
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

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="64" height="64" rx="2" fill="#FFF0E4" class="svg-logo-rect"/>
					<path  class="svg-logo-path" d="M31.5785 19.6842C31.5785 22.0351 30.765 26.0526 29.1379 31.7368C27.5109 37.386 26.6973 41 26.6973 42.5789C26.6973 44.1228 27.378 44.8947 28.7395 44.8947C30.1341 44.8947 32.0268 43.8246 34.4176 41.6842C34.5172 39.8947 34.7995 37.7544 35.2644 35.2632C36.659 27.4386 38.3525 21.7719 40.3448 18.2632C42.3372 14.7544 44.6616 13 47.318 13C48.8787 13 50.0409 13.4912 50.8046 14.4737C51.6015 15.4211 52 16.6842 52 18.2632C52 23.2456 48.7791 29.9474 42.3372 38.3684C42.2375 39.7368 42.1877 41.1228 42.1877 42.5263C42.1877 45.4386 42.6526 46.8947 43.5824 46.8947C44.1469 46.8947 44.6284 46.8246 45.0268 46.6842L45.7739 48.6842C43.7152 50.2281 41.6564 51 39.5977 51C36.6092 51 34.8991 49.1579 34.4674 45.4737C30.4828 49.1579 27.0792 51 24.2567 51C22.5632 51 21.1852 50.4561 20.1226 49.3684C19.0932 48.2456 18.5785 46.6316 18.5785 44.5263C18.5785 43.2982 18.9604 41.3158 19.7241 38.5789C20.5211 35.807 20.9859 34.1754 21.1188 33.6842C15.7063 31.3333 13 28.0702 13 23.8947C13 21.0175 14.2618 18.4912 16.7854 16.3158C19.3091 14.1053 22.1149 13 25.2031 13C29.4534 13 31.5785 15.2281 31.5785 19.6842ZM22.0651 29.8947C23.2273 25.614 23.8084 22.4211 23.8084 20.3158C23.8084 18.2105 23.0945 17.1579 21.6667 17.1579C20.272 17.1579 18.9936 17.8246 17.8314 19.1579C16.6692 20.4912 16.0881 21.9649 16.0881 23.5789C16.0881 25.1579 16.6692 26.4912 17.8314 27.5789C18.9936 28.6316 20.4049 29.4035 22.0651 29.8947ZM49.0115 18.1579C49.0115 17.2105 48.6794 16.7368 48.0153 16.7368C46.5543 16.7368 44.8774 22.0702 42.9847 32.7368C44.4789 30.6667 45.857 28.193 47.1188 25.3158C48.3806 22.4035 49.0115 20.0175 49.0115 18.1579Z" fill="#FF720D"/>
				</svg>
				<div class="brand-title">Uena</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
                                    </div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->

		
		
		
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Widget
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<form>
									<div class="input-group search-area d-xl-inline-flex d-none">
										<input type="text" class="form-control" placeholder="Search here...">
										<button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
									</div>
								</form>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
									<i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>
									
                                </a>
							</li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14 1.16663C11.6793 1.16663 9.45374 2.0885 7.8128 3.72944C6.17186 5.37039 5.24999 7.59598 5.24999 9.91663V16.7416L3.31332 19.6583C3.08119 20.0162 2.94953 20.4299 2.9321 20.8562C2.91468 21.2824 3.01213 21.7055 3.21427 22.0811C3.41641 22.4568 3.71581 22.7712 4.08112 22.9915C4.44644 23.2118 4.86424 23.3298 5.29082 23.3333H22.7091C23.1385 23.3319 23.5594 23.2143 23.9274 22.9932C24.2954 22.772 24.5967 22.4554 24.7993 22.0769C25.002 21.6984 25.0986 21.2722 25.0787 20.8433C25.0589 20.4145 24.9234 19.9989 24.6866 19.6408L22.75 16.7416V9.91663C22.75 7.59598 21.8281 5.37039 20.1872 3.72944C18.5462 2.0885 16.3206 1.16663 14 1.16663Z" fill="#636363"/>
										<path d="M14 26.8333C14.7231 26.8325 15.4282 26.6077 16.0184 26.1899C16.6085 25.772 17.0548 25.1817 17.2958 24.4999H10.7042C10.9452 25.1817 11.3915 25.772 11.9816 26.1899C12.5718 26.6077 13.2769 26.8325 14 26.8333Z" fill="#636363"/>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0);">
                                   <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.9166 0.166626H3.08332C2.30977 0.166626 1.56791 0.473917 1.02093 1.0209C0.473947 1.56788 0.166656 2.30974 0.166656 3.08329V18.25C0.166656 19.0235 0.473947 19.7654 1.02093 20.3124C1.56791 20.8593 2.30977 21.1666 3.08332 21.1666H4.24999V25.25C4.25 25.3512 4.27637 25.4507 4.32648 25.5386C4.3766 25.6266 4.44874 25.7 4.53582 25.7516C4.6245 25.8028 4.72509 25.8298 4.82749 25.8298C4.92988 25.8298 5.03048 25.8028 5.11915 25.7516L13.7291 21.1666H22.9166C23.6902 21.1666 24.4321 20.8593 24.979 20.3124C25.526 19.7654 25.8333 19.0235 25.8333 18.25V3.08329C25.8333 2.30974 25.526 1.56788 24.979 1.0209C24.4321 0.473917 23.6902 0.166626 22.9166 0.166626ZM21.75 15.3333H4.24999C4.09528 15.3333 3.9469 15.2718 3.83751 15.1624C3.72811 15.053 3.66665 14.9047 3.66665 14.75C3.66665 14.5952 3.72811 14.4469 3.83751 14.3375C3.9469 14.2281 4.09528 14.1666 4.24999 14.1666H21.75C21.9047 14.1666 22.0531 14.2281 22.1625 14.3375C22.2719 14.4469 22.3333 14.5952 22.3333 14.75C22.3333 14.9047 22.2719 15.053 22.1625 15.1624C22.0531 15.2718 21.9047 15.3333 21.75 15.3333ZM21.75 11.25H4.24999C4.09528 11.25 3.9469 11.1885 3.83751 11.0791C3.72811 10.9697 3.66665 10.8213 3.66665 10.6666C3.66665 10.5119 3.72811 10.3635 3.83751 10.2541C3.9469 10.1447 4.09528 10.0833 4.24999 10.0833H21.75C21.9047 10.0833 22.0531 10.1447 22.1625 10.2541C22.2719 10.3635 22.3333 10.5119 22.3333 10.6666C22.3333 10.8213 22.2719 10.9697 22.1625 11.0791C22.0531 11.1885 21.9047 11.25 21.75 11.25ZM21.75 7.16663H4.24999C4.09528 7.16663 3.9469 7.10517 3.83751 6.99577C3.72811 6.88637 3.66665 6.738 3.66665 6.58329C3.66665 6.42858 3.72811 6.28021 3.83751 6.17081C3.9469 6.06142 4.09528 5.99996 4.24999 5.99996H21.75C21.9047 5.99996 22.0531 6.06142 22.1625 6.17081C22.2719 6.28021 22.3333 6.42858 22.3333 6.58329C22.3333 6.738 22.2719 6.88637 22.1625 6.99577C22.0531 7.10517 21.9047 7.16663 21.75 7.16663Z" fill="#636363"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.515 24.8942C11.2013 25.4995 12.0849 25.8336 13 25.8336C13.9151 25.8336 14.7987 25.4995 15.485 24.8942C18.4892 22.2517 25.5125 15.2751 25.8334 7.68005C25.9373 5.80349 25.2965 3.96171 24.0502 2.55489C22.804 1.14807 21.0529 0.289858 19.1775 0.16672C17.964 0.10879 16.7563 0.367679 15.6732 0.917932C14.5901 1.46819 13.6688 2.29086 13 3.30505C12.3342 2.28795 11.4135 1.46302 10.3296 0.912401C9.24579 0.361783 8.03662 0.10469 6.82252 0.16672C4.94711 0.289858 3.19606 1.14807 1.9498 2.55489C0.703537 3.96171 0.0627602 5.80349 0.166687 7.68005C0.48752 15.2751 7.51085 22.2517 10.515 24.8942Z" fill="#636363"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 ps ps--active-y p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
								</div>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt="/">
									<div class="header-info">
										<span class="fs-20 font-w500">Robertos Jr.</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.php" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index.php">Dashboard Light</a></li>
							<li><a href="index-2.php">Dashboard Dark</a></li>
							<li><a href="orders-list.php">Orders list</a></li>
							<li><a href="order-detail.php">Order Detail</a></li>
							<li><a href="customer-list.php">Customers</a></li>
							<li><a href="analytics.php">Analytics</a></li>
							<li><a href="reviews.php">Reviews</a></li>	
						</ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.php">Profile</a></li>
							<li><a href="post-details.php">Post Details</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.php">Compose</a></li>
                                    <li><a href="email-inbox.php">Inbox</a></li>
                                    <li><a href="email-read.php">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.php">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.php">Product Grid</a></li>
									<li><a href="ecom-product-list.php">Product List</a></li>
									<li><a href="ecom-product-detail.php">Product Details</a></li>
									<li><a href="ecom-product-order.php">Order</a></li>
									<li><a href="ecom-checkout.php">Checkout</a></li>
									<li><a href="ecom-invoice.php">Invoice</a></li>
									<li><a href="ecom-customers.php">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.php">Flot</a></li>
                            <li><a href="chart-morris.php">Morris</a></li>
                            <li><a href="chart-chartjs.php">Chartjs</a></li>
                            <li><a href="chart-chartist.php">Chartist</a></li>
                            <li><a href="chart-sparkline.php">Sparkline</a></li>
                            <li><a href="chart-peity.php">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.php">Accordion</a></li>
                            <li><a href="ui-alert.php">Alert</a></li>
                            <li><a href="ui-badge.php">Badge</a></li>
                            <li><a href="ui-button.php">Button</a></li>
                            <li><a href="ui-modal.php">Modal</a></li>
                            <li><a href="ui-button-group.php">Button Group</a></li>
                            <li><a href="ui-list-group.php">List Group</a></li>
                            <li><a href="ui-media-object.php">Media Object</a></li>
                            <li><a href="ui-card.php">Cards</a></li>
                            <li><a href="ui-carousel.php">Carousel</a></li>
                            <li><a href="ui-dropdown.php">Dropdown</a></li>
                            <li><a href="ui-popover.php">Popover</a></li>
                            <li><a href="ui-progressbar.php">Progressbar</a></li>
                            <li><a href="ui-tab.php">Tab</a></li>
                            <li><a href="ui-typography.php">Typography</a></li>
                            <li><a href="ui-pagination.php">Pagination</a></li>
                            <li><a href="ui-grid.php">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.php">Select 2</a></li>
                            <li><a href="uc-nestable.php">Nestedable</a></li>
                            <li><a href="uc-noui-slider.php">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.php">Sweet Alert</a></li>
                            <li><a href="uc-toastr.php">Toastr</a></li>
                            <li><a href="map-jqvmap.php">Jqv Map</a></li>
							<li><a href="uc-lightgallery.php">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-038-gauge"></i>
							<span class="nav-text">Icons</span>
							<span class="badge badge-sm badge-danger ms-3">New</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="flat-icons.php">Flaticons</a></li>
                            <li><a href="svg-icons.php">SVG Icons</a></li>
                            
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-007-bulleye"></i>
							<span class="nav-text">CMS</span>
							<span class="badge badge-sm badge-danger ms-3">New</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="content.php">Content</a></li>
                            <li><a href="menu.php">Menus</a></li>
                            <li><a href="email-template.php">Email Template</a></li>
                            <li><a href="blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.php">Form Elements</a></li>
                            <li><a href="form-wizard.php">Wizard</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Editor</a>
                                <ul aria-expanded="false">
									<li><a href="form-editor-ckeditor.php">Ckeditor</a></li>
                                    <li><a href="form-editor-summernote.php">Summernote</a></li>
                                </ul>
                            </li>
                            <li><a href="form-pickers.php">Pickers</a></li>
                            <li><a href="form-validation-jquery.php">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.php">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.php">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="login.php">Login 1</a></li>
                            <li><a href="page-login.php">Login 2</a></li>
                            <li><a href="page-register.php">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.php">Error 400</a></li>
                                    <li><a href="page-error-403.php">Error 403</a></li>
                                    <li><a href="page-error-404.php">Error 404</a></li>
                                    <li><a href="page-error-500.php">Error 500</a></li>
                                    <li><a href="page-error-503.php">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.php">Lock Screen</a></li>
                            <li><a href="empty-page.php">Empty Page</a></li>
                        </ul>
                    </li>
                </ul>
            
				
				<div class="copyright">
					<p><strong>Uena  Admin  Dashboard</strong> © 2024 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Statistics</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Widget</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Statistics</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Timeline</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll my-4 px-4 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Timeline 2</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="DZ_W_TimeLine11" class="widget-timeline dz-scroll my-4 px-4 style-1 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Notifications</h4>
                            </div>
                            <div class="card-body p-0"> 
                                <div id="DZ_W_Todo1" class="widget-media dz-scroll my-4 px-4 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2 media-danger">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-primary">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Notifications 2</h4>
                            </div>
                            <div class="card-body p-0"> 
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll my-4 px-4 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully <span class="badge badge-warning">Warning</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo <span class="badge light badge-danger">Danger</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2 media-danger">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully <span class="badge light badge-success">Success</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-primary">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time! <span class="badge light badge-success">Success</span></h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Message</h4>
                            </div>
                            <div class="card-body p-0"> 
                                <div id="DZ_W_Todo3" class="widget-media dz-scroll my-4 px-4 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Alfie Mason <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="javascript:void(0);" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="javascript:void(0);" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Jacob Tucker <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="javascript:void(0);" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="javascript:void(0);" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-success">
													<img alt="image" width="50" src="images/avatar/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Jack Ronan <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="javascript:void(0);" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="javascript:void(0);" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">Noah Baldon <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="javascript:void(0);" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="javascript:void(0);" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media me-2 media-danger">
													PU
												</div>
												<div class="media-body">
													<h5 class="mb-1">Thomas Grady  <small class="text-muted">02:26 PM</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="javascript:void(0);" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="javascript:void(0);" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-primary">
													<img alt="image" width="50" src="images/avatar/3.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Oscar Weston  <small class="text-muted">29 July 2020</small></h5>
													<p class="mb-1">I shared this on my fb wall a few months back..</p>
													<a href="javascript:void(0);" class="btn btn-primary btn-xxs shadow">Reply</a>
													<a href="javascript:void(0);" class="btn btn-outline-danger btn-xxs">Delete</a>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">To Do List</h4>
                            </div>
                            <div class="card-body p-0"> 
                                <div id="DZ_W_Todo4" class="widget-media dz-scroll my-4 px-4 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="form-check custom-checkbox checkbox-success check-lg me-3">
													<input type="checkbox" class="form-check-input" checked id="customCheckBox3" required>
													<label class="form-check-label" for="customCheckBox3"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Get up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="form-check custom-checkbox checkbox-warning check-lg me-3">
													<input type="checkbox" class="form-check-input" checked id="customCheckBox2" required>
													<label class="form-check-label" for="customCheckBox2"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Stand up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-warning light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="form-check custom-checkbox checkbox-primary check-lg me-3">
													<input type="checkbox" class="form-check-input" checked id="customCheckBox1" required>
													<label class="form-check-label" for="customCheckBox1"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Don't give up the fight.</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="form-check custom-checkbox checkbox-info check-lg me-3">
													<input type="checkbox" class="form-check-input" checked id="customCheckBox4" required>
													<label class="form-check-label" for="customCheckBox4"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Do something else</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="form-check custom-checkbox checkbox-success check-lg me-3">
													<input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
													<label class="form-check-label" for="customCheckBox5"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Get up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
										<li>
                                            <div class="timeline-panel">
												<div class="form-check custom-checkbox checkbox-warning check-lg me-3">
													<input type="checkbox" class="form-check-input" checked id="customCheckBox6" required>
													<label class="form-check-label" for="customCheckBox6"></label>
												</div>
                                                <div class="media-body">
													<h5 class="mb-0">Stand up</h5>
													<small class="text-muted">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-warning light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">3280</h4>
										<span class="badge badge-primary">+3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-warning text-warning">
										<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Bills</p>
										<h4 class="mb-0">2570</h4>
										<span class="badge badge-warning">+3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body  p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-danger text-danger">
										<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Revenue</p>
										<h4 class="mb-0">$364.50</h4>
										<span class="badge badge-danger">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">364.50K</h4>
										<span class="badge badge-success">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-calendar-1"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Appointment</p>
										<h3 class="text-white">76</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-diamond"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Earning</p>
										<h3 class="text-white">$56K</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-heart"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Total Patient</p>
										<h3 class="text-white">783K</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Chef</p>
										<h3 class="text-white">$76</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Students</p>
										<h3 class="text-white">3280</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
                                        </div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">New Students</p>
										<h3 class="text-white">245</h3>
										<div class="progress mb-2 bg-primary">
                                            <div class="progress-bar progress-animated bg-white" style="width: 50%"></div>
                                        </div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Course</p>
										<h3 class="text-white">28</h3>
										<div class="progress mb-2 bg-primary">
                                            <div class="progress-bar progress-animated bg-white" style="width: 76%"></div>
                                        </div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger ">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collect</p>
										<h3 class="text-white">250$</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-white" style="width: 30%"></div>
                                        </div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
										
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">Total Students</h4>
								<h3>3280</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
								</div>
								<small>80% Increase in 20 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">New Students</h4>
								<h3>245</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
								</div>
								<small>50% Increase in 25 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">Total Course</h4>
								<h3>28</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
								</div>
								<small>76% Increase in 20 Days</small>
							</div>
						</div>
                    </div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<h4 class="card-title">Fees Collection</h4>
								<h3>25160$</h3>
								<div class="progress mb-2">
									<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
								</div>
								<small>30% Increase in 30 Days</small>
							</div>
						</div>
                    </div>
										
					
					<div class="col-xl-12 col-lg-12 col-sm-12">
						<div class="row">
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-primary">
									<div class="card-header border-0 pb-0">
										<h3 class="card-title text-white">Total Students</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 422</h5>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline12"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-warning overflow-hidden">
									<div class="card-header border-0 ">
										<h3 class="card-title text-white">New Students</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 357</h5>
									</div>
									<div class="card-body text-center p-0">
										<div class="ico-sparkline">
											<div id="spark-bar-2"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-secondary">
									<div class="card-header pb-3 border-0 pb-0">
										<h3 class="card-title text-white">Total Course</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 547</h5>
									</div>
									<div class="card-body p-0">
										<div class="px-4"><span class="bar1" data-peity='{ "fill": ["rgb(255, 255, 255)", "rgb(255, 255, 255)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                        </div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-danger overflow-hidden">
									<div class="card-header pb-3 border-0 pb-0">
										<h3 class="card-title text-white">Fees Collection</h3>
										<h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 3280$</h5>
									</div>
									<div class="card-body p-0">
										<span class="peity-line-2" data-width="100%">7,6,8,7,3,8,3,3,6,5,9,2,8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card">
                            <div class="card-header border-0 pb-0">
								<h2 class="card-title">about me</h2>
							</div>
							<div class="card-body pb-0">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Gender</strong>
										<span class="mb-0">Male</span>
									</li>
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Education</strong>
										<span class="mb-0">PHD</span>
									</li>
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Designation</strong>
										<span class="mb-0">Se. Professor</span>
									</li>
									<li class="list-group-item d-flex px-0 justify-content-between">
										<strong>Operation Done</strong>
										<span class="mb-0">120</span>
									</li>
								</ul>
                            </div>
                            <div class="card-footer pt-0 pb-0 text-center">
                                <div class="row">
									<div class="col-4 pt-3 pb-3 border-end">
										<h3 class="mb-1 text-primary">150</h3>
										<span>Projects</span>
									</div>
									<div class="col-4 pt-3 pb-3 border-end">
										<h3 class="mb-1 text-primary">140</h3>
										<span>Uploads</span>
									</div>
									<div class="col-4 pt-3 pb-3">
										<h3 class="mb-1 text-primary">45</h3>
										<span>Tasks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
					
					<div class="col-xl-8 col-xxl-8 col-lg-12 col-sm-12">
                        <div id="user-activity" class="card">
                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                <h4 class="card-title">Visitor Activity</h4>
                                <div class="card-action mb-sm-0 my-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
									  <li class="nav-item" role="presentation">
										<a class="nav-link active" id="home-tab" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#home-tab-pane"  role="tab"  aria-selected="true">Day</a>
									  </li>
									  <li class="nav-item" role="presentation">
										<a class="nav-link" id="profile-tab" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"  role="tab"  aria-selected="false">Month</a>
									  </li>
									  <li class="nav-item" role="presentation">
										<a class="nav-link" id="contact-tab" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"  role="tab"  aria-selected="false"> Year</a>
									  </li>
									</ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="user" role="tabpanel">
                                        <canvas id="activity" class="chartjs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-6 col-sm-6">
						<div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="profile-photo">
										<img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="/">
									</div>
                                    <h3 class="mt-4 mb-1">Deangelo Sena</h3>
                                    <p class="text-muted">Senior Manager</p>
									<a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void(0)">Folllow</a>
                                </div>
                            </div>
							
                            <div class="card-footer pt-0 pb-0 text-center">
                                <div class="row">
									<div class="col-4 pt-3 pb-3 border-end">
										<h3 class="mb-1">150</h3><span>Follower</span>
									</div>
									<div class="col-4 pt-3 pb-3 border-end">
										<h3 class="mb-1">140</h3><span>Place Stay</span>
									</div>
									<div class="col-4 pt-3 pb-3">
										<h3 class="mb-1">45</h3><span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="card active_users">
                            <div class="card-header bg-secondary border-0 pb-0 rounded-0">
                                <h4 class="card-title text-white">Active Users</h4>
                                <span id="counter"></span>
                            </div>
							<div class="bg-secondary">
								<canvas id="activeUser"></canvas>
							</div>
                            <div class="card-body pt-0">
                                <div class="list-group-flush mt-4">
                                    <div class="list-group-item bg-transparent d-flex justify-content-between border-0 border-bottom px-0 py-1 font-weight-semi-bold">
                                        <p class="mb-0">Top Active Pages</p>
                                        <p class="mb-0">Active Users</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between border-0 border-bottom px-0 py-2">
                                        <p class="mb-0">/bootstrap-themes/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between  border-0 border-bottom px-0 py-2">
                                        <p class="mb-0">/tags/html5/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-2 d-none">
                                        <p class="mb-0">/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-2 d-none">
                                        <p class="mb-0">/preview/falcon/dashboard/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between border-0 border-bottom  px-0 py-2">
                                        <p class="mb-0">/100-best-themes...all-time/</p>
                                        <p class="mb-0">1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-3 overlay-box " style="background-image: url(images/big/img1.jpg);">
								<div class="profile-photo">
									<img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="/">
								</div>
								<h3 class="mt-3 mb-1 text-white">Deangelo Sena</h3>
								<p class="text-white mb-0">Senior Manager</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Gender</span> <strong class="text-muted">Female	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Years Old</span> 		<strong class="text-muted">Age: 24	</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Patient Height</span> <strong class="text-muted">1.5 M	</strong></li>
							</ul>
                            <div class="card-footer border-0 mt-0">								
								<button class="btn btn-primary btn-lg btn-block w-100">
									<i class="fa fa-bell-o"></i> Reminder Alarm							
								</button>		
                            </div>
                        </div>
					</div>
					<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Payments Queue</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ward No.</th>
                                                <th scope="col">Patient</th>
                                                <th scope="col">Dr Name</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Bills</th>
                                                <th class="text-end" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>Mr. Bobby</td>
                                                <td>Dr. Jackson</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$120</td>
                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10 </td>
                                                <td>Mr. Dexter</td>
                                                <td>Dr. Charles</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>$540</td>
                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03 </td>
                                                <td>Mr. Nathan</td>
                                                <td>Dr. Frederick</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                                <td>$301</td>
                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Mr. Aurora</td>
                                                <td>Dr. Roman</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$099</td>
                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown mb-0">
														<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td>Mr. Matthew</td>
                                                <td>Dr. Samantha</td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>$520</td>
                                                <td class="text-end">
                                                    <div class="dropdown custom-dropdown mb-0">
														<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
						<div class="card text-white bg-primary">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Blood type :</span><strong>O+</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
						<div class="card text-white bg-warning text-black">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Regular Checkups</span></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Theodore Handle :</span><strong>Dentist</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Valentino Morose :</span><strong>Surgeon</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Fleece Marigold :</span><strong>Clinical</strong></li>
								<li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Eric Widget :</span><strong>Cardiology</strong></li>
							</ul>
						</div>
					</div>
					
					<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
						<div class="card">
                            <div class="card-body text-center ai-icon  text-primary">
								<svg id="rocket-icon" class="my-2" viewBox="0 0 24 24" width="80" height="80" stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<path d="M16 10a4 4 0 0 1-8 0"></path>
								</svg>
								<h4 class="my-2">You don’t have badges yet</h4>
								<a href="javascript:void(0);" class="btn my-2 btn-primary btn-lg px-4"><i class="fa fa-usd"></i> Earn Budges</a>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12 col-xxl-8 col-sm-12">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Blood pressure</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-primary mb-0">120/89</h3>
											<span>mmHG</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="spark-bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Heart Rate</h3>
											<span class="text-danger">Above the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-danger mb-0">107</h3>
											<span>Per Min</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="composite-bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Glucose Rate</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-success mb-0">97</h3>
											<span>mg/dl</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline8"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="clearfix">
											<h3 class="card-title">Clolesterol</h3>
											<span>In the normal</span>
										</div>
										<div class="clearfix text-center">
											<h3 class="text-info mb-0">124</h3>
											<span>mg/dl</span>
										</div>
									</div>
									<div class="card-body text-center">
										<div class="ico-sparkline">
											<div id="sparkline9" class="height80;"></div>
										</div>
									</div>
								</div>
							</div>
                        </div>
					</div>
					<div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="/">
								<h3 class="mt-3 mb-0 text-white">Deangelo Sena</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
									<div class="col-6">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">Female</h4>
											<small>Patient Gender</small>
										</div>
									</div>
									<div class="col-6">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">Age: 24</h4>
											<small>Years Old</small>
										</div>
									</div>
								</div>
                            </div>
							<div class="card-footer mt-0">								
								<button class="btn btn-primary btn-lg btn-block">View Profile</button>		
                            </div>
                        </div>
					</div>
					<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card bg-primary">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white">Power</h5>
                                        <span class="text-white">2017.1.20</span>
                                    </div>
                                    <div class="col text-end">
                                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                        <span class="text-white">+12.5(2.8%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_1"></canvas>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card bg-success">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-white">Power</h5>
                                        <span class="text-white">2017.1.20</span>
                                    </div>
                                    <div class="col text-end">
                                        <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                                        <span class="text-white">+12.5(2.8%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col">
                                        <h5>3650</h5>
                                        <span>VIEWS OF YOUR PROJECT</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="text-uppercase">74,206 K</h4>
										<span>Lifetime earnings</span>
									</div>
									<div class="col-auto">
										<div class="chart-wrapper height100">
											<canvas id="chart_widget_7"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5>Lorem Ipsum</h5>
                                            </div>
                                            <div class="col-auto">
                                                <h5>
                                                    <span><i class="fa fa-caret-up"></i></span>
                                                    <span>2,250</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="chart_widget_6"></div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5>Lorem Ipsum</h5>
                                            </div>
                                            <div class="col-auto">
                                                <h5>
                                                    <span><i class="fa fa-caret-up"></i></span>
                                                    <span>2,250</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_3"></canvas>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                            <div class="col text-center">
                                                <h5 class="font-weight-normal">1230</h5>
                                                <span>Type A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title text-uppercase font-weight-normal">Market Now</h4>
                                <h2 class="font-weight-normal text-danger">
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>3454664</span>
                                </h2>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">APPL</h5>
                                        <span class="text-success">+ 82.24 %</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">FB</h5>
                                        <span class="text-danger">- 12.24 %</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">GOOG</h5>
                                        <span class="text-success">+ 42.24 %</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title text-uppercase font-weight-normal">Sales Analysis</h4>
                                <h2 class="font-weight-normal text-danger">
                                    <span><i class="fa fa-caret-up"></i></span>
                                    <span>3454664</span>
                                </h2>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">Today</h5>
                                        <span class="text-success">+ 8224</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">Today</h5>
                                        <span class="text-danger">- 1224</span>
                                    </div>
                                    <div class="col text-center">
                                        <h5 class="font-weight-normal">Week</h5>
                                        <span class="text-success">+ 4224</span>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="chart_widget_8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title">Top Products</h4>
							</div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
									<ul class="timeline">
										<li>
											<div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</li>
									</ul>	
								</div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_9"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="card-title">Top Products</h4>
							</div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
									<ul class="timeline">
										<li>
											<div class="timeline-panel">
												<div class="media me-2">
													<img alt="image" width="50" src="images/avatar/4.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Dr sultads Send you Photo</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-info">
													<img alt="image" width="50" src="images/avatar/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Resport created successfully</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="timeline-panel">
												<div class="media me-2 media-success">
													<img alt="image" width="50" src="images/avatar/3.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1">Reminder : Treatment Time!</h5>
													<small class="d-block">29 July 2020 - 02:26 PM</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Edit</a>
														<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
													</div>
												</div>
											</div>
										</li>
									</ul>	
								</div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_10"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-8 col-lg-12">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="card overflow-hidden">
									<div class="row no-gutters">
										<div class="col-5 p-0">
											<div class="card-body">
												<h6 class="font-weight-normal text-uppercase">Weekly sales</h6>
												<h4>$ 14000</h4>
												<div>
													<span class="badge badge-dark">60%</span>
													<span>Higher</span>
												</div>
											</div>
										</div>
										<div class="col-7 p-0">
											<div class="chart-wrapper">
												<canvas id="chart_widget_11"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>570</h5>
                                        <p>All Sales</p>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_14"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>570</h5>
                                        <p>All Sales</p>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_15"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-4 col-lg-12">
                        <div class="card">
                            <div class="chart-wrapper">
                                <canvas id="chart_widget_16"></canvas>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Sales Status</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 40%"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6>67%</h6>
                                            <span>Grow</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-facebook">
								<span class="s-icon"><i class="fa-brands fa-facebook-f"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-linkedin">
								<span class="s-icon"><i class="fa-brands fa-linkedin-in"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-googleplus">
								<span class="s-icon"><i class="fa-brands fa-google-plus-g"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="social-graph-wrapper widget-twitter">
								<span class="s-icon"><i class="fa-brands fa-twitter"></i></span>
							</div>
							<div class="row">
								<div class="col-6 border-end">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">89</span> k</h4>
										<p class="m-0">Friends</p>
									</div>
								</div>
								<div class="col-6">
									<div class="pt-3 pb-3 ps-0 pe-0 text-center">
										<h4 class="m-1"><span class="counter">119</span> k</h4>
										<p class="m-0">Followers</p>
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
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2024</p>
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
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Chartist -->
    <script src="vendor/chartist/js/chartist.min.js"></script>
    <script src="vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    
	<!-- Flot -->
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/flot-spline/jquery.flot.spline.min.js"></script>
	
	<!-- Chart sparkline plugin files -->
    <script src="vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="js/plugins-init/sparkline-init.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<script src="js/plugins-init/piety-init.js"></script>
	
    <!-- Init file -->
    <script src="js/plugins-init/widgets-script-init.js"></script>



	
	
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
	
    
</body>

</html>