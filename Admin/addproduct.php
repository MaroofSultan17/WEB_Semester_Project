<?php
include ('helper/config.php');
include ('helper/session.php');
include ('libraries/variables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Add Product | <?php echo constant('siteTitle'); ?> </title>
	<?php require ('./components/links.php'); ?>
</head>

<body>
	<?php require ('./components/preloader.php'); ?>
	<div id="main-wrapper">
		<?php require ('./components/nav-header.php'); ?>
		<?php require ('./components/chatbox.php'); ?>
		<?php require ('./components/header.php'); ?>
		<?php require ('./components/sidebar.php'); ?>
		<div class="content-body">
			<div class="container">
				<h1 class="mt-5">Add Product</h1>
				<form action="./components/addproduct.php" method="POST" enctype="multipart/form-data" class="mt-4">
					<div class="mb-3">
						<label for="image" class="form-label">Product Image</label>
						<input type="file" class="form-control" id="image" name="image" accept="image/*" required>
					</div>
					<div class="mb-3">
						<label for="title" class="form-label">Title</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="mb-3">
						<label for="totalprice" class="form-label">Total Price</label>
						<input type="number" class="form-control" id="totalprice" name="totalprice" required>
					</div>
					<div class="mb-3">
						<label for="percentage_off" class="form-label">Percentage Off</label>
						<input type="number" class="form-control" id="percentage_off" name="percentage_off" min="0"
							max="100" required>
					</div>
					<div class="mb-3">
						<label for="category" class="form-label">Category</label>
						<select class="form-select" id="category" name="category" required>
							<option value="" disabled selected>Select Category</option>
							<option value="recent">Recent</option>
							<option value="top">Top</option>
							<option value="popular">Popular</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary mb-3" name="addproduct">Add Product</button>
				</form>
			</div>
		</div>
		<?php require ('./components/footer.php'); ?>
		<?php require ('./components/script.php'); ?>
</body>

</html>