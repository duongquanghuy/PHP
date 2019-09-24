<?php
	session_start();
	require_once ('dbhelper.php');
	require_once ('process.php');

	if (!empty($_POST)) {
		if (isset($_POST['fullName'])) {
			$fullName = $_POST['fullName']  ;
		}	
		if (isset($_POST['passwords'])) {
			$passwords = $_POST['passwords'] ;
		}


		$_SESSION['sFullName'] = $fullName;
		$_SESSION['sPasswords'] = $fullName;
	
	}

	if (($fullName  && $passwords ) != '') {
		$check = 1;
		$sql  = 'select * from user where fullName = "'.$fullName.'" and passWord = "'.$passwords.'"';
		$data = executeResult($sql);
		if ($data != null && count($data) > 0) {

			header('Location: welcome.php');
			

		}else{
			
			$check = 2;
			
		}
		
		echo $check;
	}

	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
				if(<?=$check?> == 2){
					alert('dang nhap that bai');
				}
		});

	</script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading" >
			Input infomation students
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label>FullName</label>
						<input type="text" name="fullName"  value="" class="form-control fullName">
					</div class="form-group">
					<div class="form-group">
						<label>password</label>
						<input type="password" name="passwords" value="" class="form-control passwords" >
					</div>
					<button class="btn btn-success" id="checkEmail" >register</button>
									
				</form>
			</div>
		</div>

	</div>
	
</body>
</html>