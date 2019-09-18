<?php 
	session_start();
	$name = $age = $address = $email = $phoneNumber = '';
	if(!empty($_POST['name'])){
		$name = $_POST['name'];
	}
	if(!empty($_POST['age'])){
		$age = $_POST['age'];
	}
	if(!empty($_POST['address'])){
		$address = $_POST['address'];
	}
	if(!empty($_POST['email'])){
		$email = $_POST['email'];
	}
	if(!empty($_POST['phoneNumber'])){
		$phoneNumber = $_POST['phoneNumber'];
	}
	$isDisplay = false;
	if($name != '' && $age != '' && $address != '' && $email != '' && $phoneNumber != ''){
		if (!empty($_POST['add'])) {
			$_SESSION['name'] = $name;
			$_SESSION['age'] = $age;
			$_SESSION['address'] = $address;
			$_SESSION['email'] = $email;
			$_SESSION['phoneNumber'] = $phoneNumber;
			echo "<h1 style='text-align: center; color: #5cb85c'>Đã thêm thông tin sinh viên vào SESSION</h1>";
		}
	}


	if(!empty($_POST['display'])){
		if (!empty($_SESSION['name']) && !empty($_SESSION['age']) && !empty($_SESSION['address']) && !empty($_SESSION['email']) && !empty($_SESSION['phoneNumber'])) {
			$isDisplay = true;
			echo "<h1 style='text-align: center; color: #5cb85c'>Hiển thị thông tin sinh viên</h1>";
		}else{
			echo "<h1 style='text-align: center; color: red'>Chưa có dữ liệu</h1>";
		}
	}
	if(!empty($_POST['delete'])){
		session_destroy();
		echo "<h1 style='text-align: center; color: red'>Đã xóa hết dữ liệu</h1>";
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sinh Viên - Session</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Nhập thông tin sinh viên
			</div>
				<form method="post">
					<div class="form-group">
						<label>Tên</label>
						<input type="text" name="name" value="<?php echo $isDisplay ? $_SESSION['name'] : ''; ?>" class="form-control">
						<label>Tuổi</label>
						<input type="number" name="age" value="<?php echo $isDisplay ? $_SESSION['age'] : ''; ?>" class="form-control">
						<label>Địa chỉ</label>
						<input type="text" name="address" value="<?php echo $isDisplay ? $_SESSION['address'] : ''; ?>"  class="form-control">
						<label>Email</label>
						<input type="email" name="email" value="<?php echo $isDisplay ? $_SESSION['email'] : ''; ?>" class="form-control">
						<label>Số điện thoại</label>
						<input type="text" name="phoneNumber" value="<?php echo $isDisplay ? $_SESSION['phoneNumber'] : ''; ?>" class="form-control">
					</div>
					<input type="submit" class="btn btn-success myBtn" name ="add" value="Thêm"></input>
					<input type="submit" class="btn btn-success myBtn" name="display" value="Hiển thị"></input>
					<input type="submit" class="btn btn-danger myBtn" name="delete" value="Xóa"></input>
				</form>
			</div>
	</div>
</body>
</html>