<?php
include ('./libraries/variables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | <?php echo constant('siteTitle'); ?> </title>
	<?php require ('./components/links.php'); ?>
</head>

<body>
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-4 pt-5">
					<a href="index.php" class="brand-logo">
						<svg class="logo-abbr" width="64" height="64" viewBox="0 0 64 64" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<rect width="64" height="64" rx="2" fill="#FFF0E4" class="svg-logo-rect"></rect>
							<path class="svg-logo-path"
								d="M31.5785 19.6842C31.5785 22.0351 30.765 26.0526 29.1379 31.7368C27.5109 37.386 26.6973 41 26.6973 42.5789C26.6973 44.1228 27.378 44.8947 28.7395 44.8947C30.1341 44.8947 32.0268 43.8246 34.4176 41.6842C34.5172 39.8947 34.7995 37.7544 35.2644 35.2632C36.659 27.4386 38.3525 21.7719 40.3448 18.2632C42.3372 14.7544 44.6616 13 47.318 13C48.8787 13 50.0409 13.4912 50.8046 14.4737C51.6015 15.4211 52 16.6842 52 18.2632C52 23.2456 48.7791 29.9474 42.3372 38.3684C42.2375 39.7368 42.1877 41.1228 42.1877 42.5263C42.1877 45.4386 42.6526 46.8947 43.5824 46.8947C44.1469 46.8947 44.6284 46.8246 45.0268 46.6842L45.7739 48.6842C43.7152 50.2281 41.6564 51 39.5977 51C36.6092 51 34.8991 49.1579 34.4674 45.4737C30.4828 49.1579 27.0792 51 24.2567 51C22.5632 51 21.1852 50.4561 20.1226 49.3684C19.0932 48.2456 18.5785 46.6316 18.5785 44.5263C18.5785 43.2982 18.9604 41.3158 19.7241 38.5789C20.5211 35.807 20.9859 34.1754 21.1188 33.6842C15.7063 31.3333 13 28.0702 13 23.8947C13 21.0175 14.2618 18.4912 16.7854 16.3158C19.3091 14.1053 22.1149 13 25.2031 13C29.4534 13 31.5785 15.2281 31.5785 19.6842ZM22.0651 29.8947C23.2273 25.614 23.8084 22.4211 23.8084 20.3158C23.8084 18.2105 23.0945 17.1579 21.6667 17.1579C20.272 17.1579 18.9936 17.8246 17.8314 19.1579C16.6692 20.4912 16.0881 21.9649 16.0881 23.5789C16.0881 25.1579 16.6692 26.4912 17.8314 27.5789C18.9936 28.6316 20.4049 29.4035 22.0651 29.8947ZM49.0115 18.1579C49.0115 17.2105 48.6794 16.7368 48.0153 16.7368C46.5543 16.7368 44.8774 22.0702 42.9847 32.7368C44.4789 30.6667 45.857 28.193 47.1188 25.3158C48.3806 22.4035 49.0115 20.0175 49.0115 18.1579Z"
								fill="#FF720D"></path>
						</svg>
						<div class="brand-title">Evani</div>
					</a>
				</div>
				<h3 class="mb-2">Welcome back!</h3>
				<p>Please log in to access your admin account.</p>
			</div>
			<div class="aside-image" style="background-image:url(images/background/pic1.svg);"></div>
		</div>
		<div
			class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<form class="form-validate" action="./helper/loginValidation.php" method="POST">
								<h3 class="text-center mb-4 text-black">Sign In your account</h3>
								<div class="form-group mb-3">
									<label class="mb-1 form-label text-black">Email</label>
									<div>
										<input type="email" class="form-control" placeholder="hello@example.com"
											name="email">
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="mb-1 form-label text-black">Password</label>
									<div class="position-relative">
										<input type="password" id="dz-password" class="form-control"
											placeholder="Password" name="password">
										<span class="show-pass eye">
											<i class="fa fa-eye-slash"></i>
											<i class="fa fa-eye"></i>
										</span>
									</div>
								</div>
								<div class="text-center mt-4">
									<button type="submit" class="btn btn-primary btn-block" name="signin">Sign
										In</button>
								</div>
							</form>
							<div class="new-account mt-3">
								<p>Don't have an account? <a class="text-primary" href="signup.php">Sign up</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require ('./components/script.php'); ?>

</body>

</html>