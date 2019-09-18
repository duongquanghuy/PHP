<?php 
	require_once ('cookieProcess.php');	


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>bt557</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#display').click(function() {

				$('#fullName').val('<?=$fullName?>');
				$('#age').val('<?=$age?>');
				$('#address').val('<?=$address?>');
				$('#emaill').val('<?=$emaill?>');
				$('#phone').val('<?=$phone?>');

			});	
		
		});
		
	</script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 Input Student
			</div>
			<div class="panel-body">
				<form method="post" >
					<div class="form-group">
						<label for="fullName">FullName</label>
						<input required type="text" name="fullName" class="form-control " id="fullName" value="" >
					</div>
					<div class="form-group">
						<label for="age">Age:</label>
						<input required type="number" step="1.0"  name="age" class="form-control " id="age" value="">
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<input required type="text"  name="address" class="form-control " id="address" value="">
					</div>
						<div class="form-group">
						<label for="emaill">Email:</label>
						<input required type="text"  name="emaill" class="form-control " id="emaill" value="">
					</div>
						<div class="form-group">
						<label for="phone">Phone:</label>
						<input required type="number"  name="phone" class="form-control " id="phone" value="">
					</div>
					
					
					<button class="btn btn-success">Save</button>
				
				

				</form>
				<form method="get">
					<div style="margin-top: 20px;">
							<input type="number" name="deleteCookie" value="0" style="display: none">
							<button class="btn btn-success"  >DElETE</button>
					</div>
					
				</form>
					
					<div style="margin-top: 20px;">
							<button class="btn btn-success" id="display" >DISPLAY</button>
					</div>
					
				
			</div>
		</div>
	</div>


</body>
</html>