<?php 
	$people = [];
    $people[0]=	array("fullName"=>"quang huy", "gender"=>"nam", "email"=>"duong@gamil.com" ,"address"=>"ha noi");
	$people[1]= array("fullName"=>"quang huy 1", "gender"=>"nam", "email"=>"duon1g@gamil.com" ,"address"=>"ha noi");
	$people[2]= array("fullName"=>"nam", "gender"=>"nu", "email"=>"duon2g@gamil.com" ,"address"=>"ha noi");
	$people[3]= array("fullName"=>"nam", "gender"=>"nu", "email"=>"duon3g@gamil.com" ,"address"=>"ha noi");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>BT150_p1</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	<body>
		<div class="container">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Display
					</div>
					<div class="panel-body">
						
						<table class="table table-bordered">
							
							<thead>
								<th>no</th>
								<th>fullName</th>
								<th>Gender</th>
								<th>email</th>
								<th>Address</th>

							</thead>
							<tbody>
							</tbody>

								<?php 
									$index = 1;
									foreach ($people as $item ) {
										echo '
											<tr>
												<td>'.($index++).'</td>
												<td>' .$item['fullName'].' </td>
												<td>' .$item['gender'].'</td>
												<td>' .$item['email'].'</td>
												<td>' .$item['address'].'</td>


											 </tr>
										';		
									}



								?>
								
							</tbody>
						</table>
					</div>

				</div>
		</div>


	</body>
</html>