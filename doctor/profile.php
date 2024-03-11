<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctors Profile Page</title>
</head>
<body>
	<?php
	include("../include/header.php");
	include("../include/connection.php");
	?>

	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" style="margin-left: -30px;">
					<?php 
					include("sidenav.php");
					?>
				</div>
				<div class="col-md-10">
					<div class="container-fluid">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									
									<?php 
									$doc = $_SESSION['doctor'];
									$query = "SELECT * FROM doctors WHERE username='$doc' ";
									$res = mysqli_query($connect,$query);
									$row = mysqli_fetch_array($res);
									?>

									<form method="post">
										<?php 
										echo "<img src='img/".$row['profile']."' style='height:250px;' class= 'col-md-12 my-3'> ";
										?>

										<input type="file" name="img" class="form-control my-1">
										<input type="submit" name="upload" class="btn btn-success" value="Update Profile">
									</form>

									<div class="my-3">
										<table class="table table-bordered">
											<tr>
												<th colspan="2" class="text-center">Details</th>
											</tr>
											<tr>
												<td>Firstname</td>
												<td><?php echo $row['firstname']; ?></td>
											</tr>

											<tr>
												<td>Surname</td>
												<td><?php echo $row['surname']; ?></td>
											</tr>

											<tr>
												<td>Username</td>
												<td><?php echo $row['username']; ?></td>
											</tr>

											<tr>
												<td>Email</td>
												<td><?php echo $row['email']; ?></td>
											</tr>

											<tr>
												<td>Phone</td>
												<td><?php echo $row['phone']; ?></td>
											</tr>

											<tr>
												<td>Gender</td>
												<td><?php echo $row['gender']; ?></td>
											</tr>

											<tr>
												<td>Salary</td>
												<td><?php echo $row['salary']; ?></td>
											</tr>


										</table>
									</div>

								</div>
								<div class="col-md-6">
									<h5 class="text-center my-2">Change Username<h5>
										<form method="post">
											<label>Change Username</label>
											<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
											<br>
											<input type="submit" name="change_uname" class="btn btn-success" value="Change Username">
										</form>

										<br><br>

										<h5 class="text-center my-2">Change password</h5>

										<form method="post">
											<div class="form-group">
												<label>Old Password</label>
												<input type="password" name="old_pass" class="form-control" autocomplete="off" placeholder="Enter old password">
											</div>

											<div class="form-group">
												<label>New Password</label>
												<input type="password" name="new_pass" class="form-control" autocomplete="off" placeholder="Enter new Password">
											</div>

											<div class="form-group">
												<label>Confirm Password</label>
												<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
											</div>
											<input type="submit" name="change_pass" class="btn btn-info" value="Change Password">
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>