<?php 
	if(!empty($_POST))
	{
		$email = $_POST['Email'];
		$password = $_POST['Password'];

		$cookieEmail = $cookiePassword = '';
		if(isset($_COOKIE['Email']))
		{
			$cookieEmail = $_COOKIE['Email'];
		}
		if(isset($_COOKIE['Password']))
		{
			$cookiePassword = $_COOKIE['Password'];
		}
		
		if($cookieEmail == $email && $cookiePassword == $password)
		{
			header('Location: Welcome.php');
			die();
		}	
		else
		{
			$message = "Login failed";
			echo "<script type='text/javascript'>alert('$message')</script>";
		}

	}
 ?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device ,initial=scale-1.0">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  	<style type="text/css">
	  	.container{
	  		text-align: center;
	  		width: 50%;
	  		margin-top: 100px;
	  		border: solid 1px black;
	  	}
  		h1{
  			text-align: center;
  			margin-bottom: 50px;
  		}
  		.form-group{
  			margin-bottom: 15px;
  		}
  		a{
  			text-decoration: none;
  		}
  	</style>
</head>
<body>
<div class="container">
	<div class="card-header">
		<h1 class="text-primary">Đăng nhập tài khoản</h1>
	</div>
	<form method="post">
		<div class="card-body">			
				<div class="form-group">
					<input type="email" name="Email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" name="Password" class="form-control" placeholder="Mật khẩu">
				</div>
		</div>
		<div class="card-footer">
			<button class="btn">Đăng nhập</button>
		</div>
	</form>
</div>

</body>
</html>