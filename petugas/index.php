<?php
session_start();
if (empty($_SESSION['fullname'])) {
	header("location:../login.php");
}else{
 include "koneksi.php"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/theme-helper.css">
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<?php include "sidebar.php"; ?>
		<div id="content">
			<div class="content-nav">
				<?php include "navbar.php"; ?>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="panel panel-default panel-widget">
							<div class="panel-body">
								<h4>Main Title</h4>
								<div class="break-5">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="panel panel-default panel-widget">
							<div class="panel-body">
								<h4>Main Title</h4>
								<div class="break-5">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="panel panel-default panel-widget">
							<div class="panel-body">
								<h4>Main Title</h4>
								<div class="break-5">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="panel-title pull-left text-black"><i class="fa fa-fw fa-users"></i> Staff Management</span>
								<div class="btn-group btn-group-sm pull-right" role="group">
									<a class="btn btn-default" href="#"><i class="fa fa-fw fa-refresh"></i> <span class="hidden-sm">refresh</span></a>
									<a class="btn btn-default" href="#"><i class="fa fa-fw fa-plus"></i> <span class="hidden-sm">new</span></a>
									<button class="btn btn-default" data-toggle="modal" data-target="#import-dialog"><i class="fa fa-fw fa-upload"></i> <span class="hidden-sm">import</span></button>
								</div>
								<!-- QUICK SEARCH -->
								<form action="#" class="pull-right hidden-xs">
									<div class="form-group">
										<div class="input-group input-group-sm">
											<input type="text" class="form-control" placeholder="search">
											<span class="input-group-btn">
												<button class="btn btn-default"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</div>
								</form>
								<div class="clearfix"></div>
							</div>
							<div class="panel-body table-responsive table-full">
								<table class="table table-stripped table-hover table-bordered">
									<thead>
										<tr>
											<th class="text-center">Staff ID</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th class="text-center text-nowrap">Cafe Branch</th>
											<th class="text-center text-nowrap">Position</th>
											<th class="text-center text-nowrap">Gender</th>
											<th class="text-center text-nowrap">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<!-- FORM FILTER -->
											<form action="#">
												<td><input type="text" class="form-control input-sm" name="id" placeholder="staff id"></td>
												<td><input type="text" class="form-control input-sm" name="first_name" placeholder="first name"></td>
												<td><input type="text" class="form-control input-sm" name="last_name" placeholder="last name"></td>
												<td>
													<select name="branch_id" class="form-control input-sm">
														<option value="">All</option>
														<option value="1">Branch #1</option>
													</select>
												</td>
												<td>
													<select name="position_id" class="form-control input-sm">
														<option value="">All</option>
														<option value="1">Position #1</option>
													</select>
												</td>
												<td>
													<select name="gender" class="form-control input-sm">
														<option value="">All</option>
														<option value="0">Male</option>
														<option value="1">Female</option>
													</select>
												</td>
												<td><button class="btn btn-sm btn-default btn-block"><i class="fa fa-search"></i></button></td>
											</form>
										</tr>
										<!-- DATA START HERE -->
										<tr>
											<td class="text-center text-nowrap">stf00001</td>
											<td>Ainul</td>
											<td>Yakin</td>
											<td class="text-center text-nowrap">Branch One</td>
											<td class="text-center text-nowrap">Manager</td>
											<td class="text-center text-nowrap">Male</td>
											<td class="text-center text-nowrap">
												<a href="#" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i></a>
												<a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="text-center text-nowrap">stf00002</td>
											<td>Diego</td>
											<td>Luna</td>
											<td class="text-center text-nowrap">Branch Two</td>
											<td class="text-center text-nowrap">Sales Manager</td>
											<td class="text-center text-nowrap">Male</td>
											<td class="text-center text-nowrap">
												<a href="#" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i></a>
												<a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<td class="text-center text-nowrap">stf00003</td>
											<td>Alex</td>
											<td>Maxwell</td>
											<td class="text-center text-nowrap">Branch Three</td>
											<td class="text-center text-nowrap">Advertising</td>
											<td class="text-center text-nowrap">Male</td>
											<td class="text-center text-nowrap">
												<a href="#" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i></a>
												<a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="panel-footer">
								<span class="panel-footer-text text-grey text-size-12"><i class="fa fa-info-circle"></i> last edited at 02/01/2016 18:00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</html>