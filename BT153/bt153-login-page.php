<!DOCTYPE html>
<html>
	<head>
		<title>BT153 - Login Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<h1>ĐĂNG NHẬP</h1>
		<br>
		<br>
		<br>
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2" for="username">* Tên Tài khoản: </label>
				<div class="col-sm-10">
					<input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="password">* Mật Khẩu: </label>
				<div class="col-sm-10">
					<input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
				</div>
			</div>
			<button class="btn btn-success">ĐĂNG NHẬP</button>
		</form>
	</body>

	<?php
		if (!empty($_POST))
		{
			$regUsername = '';
			$regPassword = '';

			$logUsername = $_POST['username'];
			$logPassword = $_POST['password'];

			if (isset($_GET['username']) && isset($_GET['password']))
			{
				$regUsername = $_GET['username'];
				$regPassword = $_GET['password'];
			}

			if (($regUsername == $logUsername) && ($regPassword == $logPassword)) 
			{
				header('Location: bt153-welcome-page.php');
			}
		}
	?>
</html>