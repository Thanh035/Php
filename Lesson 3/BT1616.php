<?php
	$username = $email = $password = '';
		if(!empty($_POST))
		{
				$username = $_POST['Username'];
				$email = $_POST['Email'];
				$password = $_POST['Password'];
				
		}
		
		setcookie('Username',$username,time()+30*24*7*60*60,'');
		setcookie('Email',$email,time()+30*24*7*60*60,'');
		setcookie('Password',$password,time()+30*24*7*60*60,'');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width ,initial=scale-1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  	<style type="text/css">
  		.card-body{
  			border:solid black 1px;
  		}
  		table{
  			width: 100%;
  		}
  		.card-header{
  			background-color: #327ab7;
  		}
  		.form-control{
  			margin-bottom: 15px;
  		}
  	</style>
</head>
<body>
<h1 style="text-align: center;">Welcome to PHP tutorial</h1>
<div class="container">
	<div class="card-header text-white">
		Management
	</div>
	<div class="card-body">
		<table class="tbale table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>User Name</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach($_COOKIE as $item)
							
					echo '
						<tr>
							<td>1</td>
							<td>'.$item['Username'].'</td>
							<td>'.$item['Email'].'</td>
							<td>'.$item['Password'];'</td>
						</tr>
					';
				?>
			</tbody>
		</table>
	</div>
</div>
<Br>
<div class="container">
	<div class="card-header text-white">
		Input detail information
	</div>
	<div class="card-body">
		<form method="post">
			<div class="form-group"> 
				 <label>User Name</label>
				 <input type="text" name="Username" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="Email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="Password" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-success">Register</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>