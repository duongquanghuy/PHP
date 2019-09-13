<html>
	<head>
		<title>BT571 Main Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<form method="post" action="bt571-result-page.php">
				<div class="form-group">
					<label for="varA">* Nhập Giá trị cho số A: </label>
					<input type="text" class="form-control" placeholder="Hãy nhập vào số A" name="varA">
				</div>
				<div class="form-group">
					<label for="varB">* Nhập Giá trị cho số B: </label>
					<input type="text" class="form-control" placeholder="Hãy nhập vào số B" name="varB">
				</div>
				<div>
					<button type="submit" value="0" name="result" class="btn-primary btn-lg">Tính Tổng</button>
					<button type="submit" value="1" name="result" class="btn-success btn-lg">Tính Hiệu</button>
					<button type="submit" value="2" name="result" class="btn-info btn-lg">Tính Tích</button>
					<button type="submit" value="3" name="result" class="btn-danger btn-lg">Tính Thương</button>
				</div>
			</form>
		</div>
	</body>
</html>