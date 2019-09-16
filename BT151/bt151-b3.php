
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
			Tính lương thực nhận và thuế thu nhập
		</div>
		<div class="panel-body">
			<form method="post">
				<div class="form-group">
					<label>Nhập vào lương của bạn</label>
					<input type="number" name="salary" class="form-control" style="width:300px; ">
					<button type="submit" class="btn btn-success">Check</button>
				</div>
<?php
	$salary = '';
	if(isset($_POST['salary'])){
		$salary = $_POST['salary'];
	}
	if ($salary != 0) {
		$taxIndex = 0;
		if ($salary >= 15000000) {
			$taxIndex = 30/100;
		}else if($salary >= 7000000 && $salary < 15000000){
			$taxIndex = 20/100;
		}else if($salary > 0 && $salary < 7000000){
			$taxIndex = 10/100;
		}else{
			echo "<h1 style='color: red; text-align: center;'>Kiểm tra định dạng nhập vào</h1>";
		}
		if($taxIndex != 0){
			echo "<h1 style='color: #F35D05; text-align: center;'>Lương thực nhận là : ".($salary-$salary*$taxIndex)." và thuế thu nhập là : ".($salary*$taxIndex)."</h1>";
		}
	}
?>
			</form>
		</div>
	</div>
</div>
</body>
</html>