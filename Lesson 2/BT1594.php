<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width ,initial-scale=1.0">
	<title>BT1594 - PHP</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		.form-group{
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<form method="get">
		<div class="container">
			<div class="card-header bg-primary text-white">
				Input detail information	
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Pasword</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Register</button>
				</div>
			</div>
		</div>
	</form>
<?php 
	$fullname = $email = $password ="";
	if(!empty($_GET))
	{
		if(isset($_GET['fullname']))
		{
			$fullname = $_GET['fullname'];
		}
		if(isset($_GET['email']))
		{
			$email = $_GET['email'];
		}
		if(isset($_GET['password']))
		{
			$password = $_GET['password'];
		}
	}

	echo 
	"
		<table>
			<thead>
				<tr>
					<th>User Name</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>$fullname</td>
					<td>$email</td>
					<td>$password</td>
				</tr>
			</tbody>
		</table>
	";
 ?>
</body>
</html>