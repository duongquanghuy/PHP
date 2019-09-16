<?php
	$num = '';
	if (!empty($_GET)) {
		if ($_GET['num']) {
			$num = $_GET['num'];
		}
	}
	
	for ($i = 1 ; $i <= $num ; $i++) { 
		
		for ($k= 1; $k <= $i ; $k++) { 
			echo "*";
		}
		echo "<br/>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BT_150_p1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<form method="get">
		<input type="number" name="num">
		<button class="btn btn-success">summit</button>

	</form>

</body>
</html>