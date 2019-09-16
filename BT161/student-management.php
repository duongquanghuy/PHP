<?php 
	require_once('database.php');

	if (isset($_GET['delete_id'])) {
		$delete_id = $_GET['delete_id'];
		$sql = 'delete from students where id ='.$delete_id;

		$conn = new mysqli('localhost', 'root', '', 'php_bt161');

		mysqli_set_charset($conn, 'utf8');

		mysqli_query($conn, $sql);

		mysqli_close($conn);

	}
	$fullname = $age = $address = '';
	if(isset($_POST['fullname'])){
		$fullname = $_POST['fullname'];
	}
	if(isset($_POST['age'])){
		$age = $_POST['age'];
	}
	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}
	if($fullname != '' && $age != '' && $address != ''){
		$sql = 'insert into students (fullname, age, address) values ("'.$fullname.'","'.$age.'","'.$address.'")';
		execute($sql);
	}
	$nameSearch = '';
	if (isset($_POST['nameSearch'])) {
		$nameSearch = $_POST['nameSearch'];
	}
	if($nameSearch != ''){
		$sql = 'select from students where fullname = "'.$nameSearch.'"';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiển thị sinh viên</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.myBtn{
			margin-top: 10px;
		}
		form>div>label{
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Management Students's Detail Information
			</div>
			<div class="panel panel-primary">
				<form method="post">
					<div class="form-group">
						<input type="text" name="nameSearch" placeholder="Enter the name to search" class="form-control">
					</div>
					<button type="submit" class="btn btn-success">Search</button>
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th style="width: 40px">No</th>
						<th>FullName</th>
						<th>Age</th>
						<th>Address</th>
						<th style="width: 60px"></th>
					</tr>
<?php
	$sql = 'select * from students';

	$conn = new mysqli('localhost', 'root', '', 'php_bt161');
		mysqli_set_charset($conn, 'utf8');

		$resultSet = mysqli_query($conn, $sql);
		$data = [];

		while ($row = mysqli_fetch_array($resultSet, 1)) {
			$data[] = $row;
		}

		mysqli_close($conn);
	$result = $data;

	$count = 0;
	foreach ($result as $row) {
			echo '<tr>
					<td>'.(++$count).'</td>
					<td>'.$row['fullname'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['address'].'</td>
					<td><a href="?delete_id='.$row['id'].'"><button style="height: 30px" class="btn btn-danger">Delete</button></a></td>
				</tr>';
	}
?>
				</table>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading" >
			Input infomation students
			</div>
			<div class="panel-body">
				<form method="post">
					<div>
						<label>FullName</label>
						<input type="text" name="fullname" class="form-control">
					</div>
					<div>
						<label>Age</label>
						<input type="number" name="age" class="form-control" style="width:100px; ">
					</div>
					<div >
						<label>Address</label>
						<input type="text" name="address" class="form-control">
					</div>
					<button type="submit" class="btn btn-success myBtn">Add</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>