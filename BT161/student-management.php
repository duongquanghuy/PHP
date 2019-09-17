<?php 
	require_once('database.php');
	require_once('function.php');

	// Xóa
	if (isset($_GET['delete_id'])) {
		$delete_id = $_GET['delete_id'];
		$sql = 'delete from students where id ='.$delete_id;

		execute($sql);

	}
	
	//Tìm kiếm
	$isSearch = false;
	$nameSearch = '';
	if (isset($_POST['nameSearch'])) {
		$nameSearch = $_POST['nameSearch'];
	}
	if($nameSearch != ''){
		$isSearch = true;
		$sql = 'select from students where fullname = "'.$nameSearch.'"';
	}


	//Update và insert
	$isUpdate = false;
	if(isset($_GET['update_id'])){
		$studentUpdate = getStudent($_GET['update_id']);
		$isUpdate = true;
		$studentUpdateID = $_GET['update_id'];
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
	//Insert ------
	if($fullname != '' && $age != '' && $address != '' && !$isUpdate){
		$sql = 'insert into students (fullname, age, address) values ("'.$fullname.'","'.$age.'","'.$address.'")';
		execute($sql);
		header('Location: student-management.php');
		die();
	}
	//Update -----
	if($fullname != '' && $age != '' && $address != '' && $isUpdate){
		$sql = 'UPDATE students SET fullname = "'.$fullname.'", age ='.$age.', address = "'.$address.'" where id = '.$studentUpdateID;
		execute($sql);
		header('Location: student-management.php');
		die();
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
					<input type="submit" class="btn btn-success myBtn" value="Search"></input>
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
	if($isSearch){
		$sql = 'select * from students where fullname = "'.$nameSearch.'"';
	}
	else{
		$sql = 'select * from students';
	}
	$result = executeResult($sql);

	$count = 0;
	foreach ($result as $row) {
			echo '<tr>
					<td>'.(++$count).'</td>
					<td>'.$row['fullname'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['address'].'</td>
					<td><a href="?update_id='.$row['id'].'"><button class="btn btn-warning">Update</button></a></td>
					<td><a href="?delete_id='.$row['id'].'"><button class="btn btn-danger">Delete</button></a></td>
					
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
						<input type="text" name="fullname" value=" <?php echo !empty($studentUpdate['fullname']) ? $studentUpdate['fullname'] : ''; ?>" class="form-control">
					</div>
					<div>
						<label>Age</label>
						<input type="number" name="age" value="<?php echo !empty($studentUpdate['age']) ? $studentUpdate['age'] : ''; ?>" class="form-control" style="width:100px; ">
					</div>
					<div >
						<label>Address</label>
						<input type="text" name="address" value="<?php echo !empty($studentUpdate['address']) ? $studentUpdate['address'] : ''; ?>" class="form-control">
					</div>
					<input type="submit" class="btn btn-success myBtn" value="<?php echo $isUpdate ? 'Update' : 'Add'  ?>"></input>
				</form>
			</div>
		</div>
	</div>
</body>
</html>