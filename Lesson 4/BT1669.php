<?php 
	$fullname = $email = $password = $address = '';
	if(!empty($_POST))
	{
		$fullname = $_POST['Fullname'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$address = $_POST['Address'];

		

		setcookie('Fullname',$fullname,time()+7*24*60*60,'/');
		setcookie('Email',$email,time()+7*24*60*60,'/');
		setcookie('Password',$password,time()+7*24*60*60,'/');
		setcookie('Address',$address,time()+7*24*60*60,'/');
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
		<h1 class="text-primary">Đăng ký tài khoản</h1>
	</div>
	<div class="card-body">
		<form method="post">
			<div class="form-group">
				<input type="text" name="Fullname" class="form-control" placeholder="Họ tên">
			</div>
			<div class="form-group">
				<input type="email" name="Email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<input type="password" name="Password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="text" name="Address" class="form-control" placeholder="Địa chỉ">
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Đăng ký</button>
			</div>
		</form>
	</div>
	<div class="card-footer"  style="text-align: left;">
		<a href="login.php">
			Đăng nhập
		</a>
	</div>
</div>
</body>
</html>