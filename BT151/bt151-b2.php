<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giải phương trình</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
			Giải phương trình bậc 2
		</div>
		<div class="panel-body">
			<form method="post">
				<div class="form-group">
					<label>Nhập hệ số a, b ,c của phương trình ax<sup>2</sup> + bx + c = 0</label>
				</br>
					<label>Nhập a</label>
					<input type="number" name="numberA" class="form-control" style="width:150px; ">
					<label>Nhập b</label>
					<input type="number" name="numberB" class="form-control" style="width:150px; ">
					<label>Nhập c</label>
					<input type="number" name="numberC" class="form-control" style="width:150px; ">
					<button type="submit" class="btn btn-success">Check</button>
				</div>
			</form>
<?php
	$numberA = $numberB = $numberC ='';
	if(isset($_POST['numberA'])){
		$numberA = $_POST['numberA'];
	}
	if(isset($_POST['numberB'])){
		$numberB = $_POST['numberB'];
	}
	if(isset($_POST['numberC'])){
		$numberC = $_POST['numberC'];
	}
	if($numberA != '' && $numberB != '' && $numberC != ''){
		$delta = ($numberB*$numberB) - (4*$numberA*$numberC);
		if($numberA == 0){
			echo "<h1 style='color: red; text-align: center;'>Phương trình có 1 nghiệm x =".$numberC/$numberB."</h1>";
		}
		else if($delta > 0){
			echo "<h1 style='color: red; text-align: center;'>Phương trình có 2 nghiệm x1 = ".(-$numberB+sqrt($delta))/(2*$numberA)." và x2 = ".(-$numberB-sqrt($delta))/(2*$numberA)."</h1>";
		}
		else if($delta == 0){
			echo "<h1 style='color: red; text-align: center;'>Phương trình có nghiệm kép x1 = x2 =".(-$numberB)/(2*$numberA)."</h1>";
		}
		else if($delta < 0){
			echo "<h1 style='color: red; text-align: center;'>Phương trình vô nghiệm</h1>";
		}
	}
?>
		</div>
</body>
</html>