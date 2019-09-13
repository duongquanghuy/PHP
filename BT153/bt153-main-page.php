<html>
	<head>
		<title>BT153 - Main Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<h1>ĐĂNG KÝ THÔNG TIN</h1>
			<br>
			<br>
			<form method="post" class="form-horizontal" action="bt153-main-page.php">
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
				<div class="form-group">
					<label class="control-label col-sm-2" for="fullname">* Họ và Tên: </label>
					<div class="col-sm-10">
						<input type="text" name="fullname" class="form-control" placeholder="Nhập họ và tên">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="age">* Tuổi: </label>
					<div class="col-sm-10">
						<input type="text" name="age" class="form-control" placeholder="Nhập tuổi">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gender">* Giới tính: </label>
					<div class="col-sm-10">
						<input type="text" name="gender" class="form-control" placeholder="Nhập giới tính">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">* E-Mail: </label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" placeholder="Nhập e-mail">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="phonenumber">* Số điện thoại: </label>
					<div class="col-sm-10">
						<input type="number" name="phonenumber" class="form-control" placeholder="Nhập số điện thoại">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="address">* Địa chỉ: </label>
					<div class="col-sm-10">
						<input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
					</div>
				</div>
				<button type="submit" class="btn btn-primary col-lg-2">ĐĂNG KÝ</button>
			</form>
		</div>
	</body>

	<?php
		if (isset($_POST['username']) && isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			if ($username != '' && $password != '')
			{
				header("Location: bt153-login-page.php?username=" . $username . "&password=" . $password);
			}
		}
	?>
</html>