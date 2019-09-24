<?php
	require_once ('dbhelper.php');
	require_once ('process.php');
	chekDatabase();
	checkTable();
?>

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta charset="UTF-8">
	<title>Hiển thị sinh viên</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
						<input type="text" name="fullName"  value="<?=$fullName?>" class="form-control fullName">
					</div class="form-group">
					<div class="form-group">
						<label>password</label>
						<input type="password" name="passwords" value="" class="form-control passwords" >
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="emaill" value="<?=$emaill?>" class="form-control">
					</div>
					
					<button class="btn btn-success" id="checkEmail" >register</button>
									
				</form>
			</div>
		</div>

	</div>
	
</body>
</html>
	<script type="text/javascript">
		
			if (<?=$option?> == 2) {
				alert('email da ton tai');
			}

	</script>