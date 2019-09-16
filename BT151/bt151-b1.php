<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>So sánh với 100</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
			So sánh số với 100
		</div>
		<div class="panel-body">
			<form method="post">
				<div class="form-group">
					<label>Nhập số</label>
					<input type="number" name="number" class="form-control" style="width:300px; ">
					<button type="submit" class="btn btn-success">Check</button>
				</div>

			</form>
		</div>
<?php
	$number = '';
	if(isset($_POST['number'])){
		$number = $_POST['number'];
	}
	if ($number == '') {
		echo "";
	}
	if($number != ''){
		if($number > 100){
			echo "<h1 style='color: red; text-align: center;'>Số đã cho lớn hơn 100</h1>";
		}
		else if($number < 100){
			echo "<h1 style='color: red; text-align: center;'>Số đã cho nhỏ hơn 100</h1>";
		}else if($number = 100){
			echo "<h1 style='color: red; text-align: center;'>Số đã cho bằng 100</h1>";
		}
	}
?>
	</div>
</div>
</body>
</html>