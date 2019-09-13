<html>
	<head>
		<title>BT571 Result Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style type="text/css">
			span {
				color: red;
				font-weight: bolder;
			}
		</style>
	</head>

	<?php
		if (isset($_POST['varA']) && isset($_POST['varB']))
		{
			$varA = $_POST['varA'];
			$varB = $_POST['varB'];

			if (preg_match('/^\d+$/', $varA) && preg_match('/^\d+$/', $varB))
			{
				$resultStatus = $_POST['result'];

				if ($resultStatus == 0)
				{
					$result = $varA + $varB;
					echo "<h1>Kết quả của phép tính là: <span>" . $result . "</span></h1>";
				}

				if ($resultStatus == 1)
				{
					$result = $varA - $varB;
					echo "<h1>Kết quả của phép tính là: <span>" . $result . "</span></h1>";
				}

				if ($resultStatus == 2)
				{
					$result = $varA * $varB;
					echo "<h1>Kết quả của phép tính là: <span>" . $result . "</span></h1>";
				}

				if ($resultStatus == 3)
				{
					if ($varB == 0) 
					{
						echo '<h1>Không thể thực hiện phép chia cho 0! Vui lòng thử lại!</h1>';
					}
					else
					{
						$result = $varA / $varB;
						echo "<h1>Kết quả của phép tính là: <span>" . $result . "</span></h1>";
					}
				}
			}
			else if ($varA != '' && $varB == '')
			{
				echo '<h1>Bạn chưa nhập giá trị cho số B!';
			}
			else if ($varA == '' && $varB != '')
			{
				echo '<h1>Bạn chưa nhập giá trị cho số A';
			}
			else if ($varA == '' && $varB == '')
			{
				echo '<h1>Bạn chưa nhập gì cả!</h1>';
			}
			else
			{
				echo '<h1>Vui lòng chỉ nhập số!</h1>';
			}
		}
	?>

	<form action="bt571-main-page.php">
		<button type="submit" class="btn-primary btn-lg">Quay lại</button>
	</form>
</html>