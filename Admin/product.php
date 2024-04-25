<?php
include ('helper/config.php');
include ('helper/session.php');
include ('libraries/variables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product | <?php echo constant('siteTitle'); ?> </title>
	<?php require ('./components/links.php'); ?>
</head>

<body>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<div id="main-wrapper">
		<?php require ('./components/nav-header.php'); ?>
		<?php require ('./components/chatbox.php'); ?>
		<?php require ('./components/header.php'); ?>
		<?php require ('./components/sidebar.php'); ?>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row page-titles mx-0">
					<div class="col-sm-6 p-md-0">
						<div class="welcome-text">
							<h4>Hi, welcome back!</h4>
							<!-- <span>CMS</span> -->
						</div>
					</div>
				</div>
				<div class="">
					<div class="row">
						<div class="col-xl-12">
							<div class="filter cm-content-box box-primary">
								<div class="content-title">
									<div class="cpa">
										<i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
									</div>
									<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i
												class="fa fa-angle-down"></i></a>
									</div>
								</div>
								<div class="cm-content-body form excerpt">
									<div class="card-body pb-2">
										<div class="row">
											<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
												<input type="text" class="form-control" id="exampleFormControlInput1"
													placeholder="Title">
											</div>
											<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
												<select
													class="form-control default-select dashboard-select-2 h-auto wide"
													aria-label="Default select example">
													<option selected>Select Status</option>
													<option value="1">Published</option>
													<option value="2">Draft</option>
													<option value="3">Trash</option>
													<option value="4">Private</option>
													<option value="5">Pending</option>
												</select>
											</div>
											<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
												<input class="form-control" type="text" id="datepicker">
											</div>
											<div class="col-xl-3 col-xxl-6 col-sm-6 mb-3">
												<button class="btn btn-primary" title="Click here to Search"
													type="button"><i
														class="fa-sharp fa-solid fa-filter me-1"></i>Filter</button>
												<button class="btn btn-danger light" title="Click here to remove filter"
													type="button">Remove Filter</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-5">
								<a href="addproduct.php" class="btn btn-primary">Add Content</a>
							</div>
							<div class="filter cm-content-box box-primary">
								<div class="content-title">
									<div class="cpa">
										<i class="fa-solid fa-file-lines me-1"></i>Product List
									</div>
									<div class="tools">
										<a href="javascript:void(0);" class="expand SlideToolHeader"><i
												class="fa fa-angle-down"></i></a>
									</div>
								</div>
								<div class="cm-content-body form excerpt">
									<div class="card-body">
										<div class="table-responsive">
											<table
												class="table table-bordered table-striped table-condensed flip-content">
												<thead>
													<tr>
														<th class="text-black">S.No</th>
														<th class="text-black">Title</th>
														<th class="text-black">Status</th>
														<th class="text-black">Modified</th>
														<th class="text-black text-end">Actions</th>
													</tr>
												</thead>

												<tbody>
													<?php
													$Query = "SELECT * FROM sale WHERE status = 1 ";
													$Result = mysqli_query($conn, $Query);
													if ($Result->num_rows > 0) {
														while ($row = mysqli_fetch_array($Result)) {
															?>
															<tr>
																<td><?php echo $row['id']; ?></td>
																<td><?php echo $row['title']; ?></td>
																<td><?php echo "Active" ?></td>
																<td><?php echo $row['updatedon']; ?></td>
																<td class="text-end">

																	<a href="javascript:void(0);"
																		class="btn btn-warning btn-sm content-icon">
																		<i class="fa fa-edit"></i>
																	</a>
																	<a href="javascript:void(0);"
																		class="btn btn-danger btn-sm content-icon">
																		<i class="fa fa-times"></i>
																	</a>
																</td>
															</tr>
															<?php
														}
													} else {
														echo "No Record Found";
													}
													?>
												</tbody>
											</table>
											<div
												class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center">
												<small class="mb-xl-0 mb-lg-1">Page 1 of 5, showing 2 records out of 8
													total, starting on record 1, ending on 2</small>
												<nav aria-label="Page navigation example">
													<ul class="pagination mb-2 mb-sm-0">
														<li class="page-item"><a class="page-link"
																href="javascript:void(0);"><i
																	class="fa-solid fa-angle-left"></i></a></li>
														<li class="page-item"><a class="page-link"
																href="javascript:void(0);">1</a></li>
														<li class="page-item"><a class="page-link"
																href="javascript:void(0);">2</a></li>
														<li class="page-item"><a class="page-link"
																href="javascript:void(0);">3</a></li>
														<li class="page-item"><a class="page-link "
																href="javascript:void(0);"><i
																	class="fa-solid fa-angle-right">
																</i>
															</a>
														</li>
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
		<?php require ('./components/footer.php'); ?>
	</div>
	<?php require ('./components/script.php'); ?>
	<script>
		$(function () {
			$("#datepicker").datepicker({
				autoclose: true,
				todayHighlight: true
			}).datepicker('update', new Date());

		});
	</script>
</body>

</html>