<?php
	session_start();
	// session_destroy();

	class Phone
	{
		public $phoneId;
		public $phonePrice;
		public $phoneName;
		public $phoneImgLink;

		public function __construct($phone_Id, $phone_Price, $phone_Name, $phone_Img_Link)
		{
			$this->phoneId = $phone_Id;
			$this->phonePrice = $phone_Price;
			$this->phoneName = $phone_Name;
			$this->phoneImgLink = $phone_Img_Link;
		}
	}

	$cosmeticsArray = [];

	$cosmeticsArray[] = new Phone(0, 1000, 'Note10+', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/n/o/note_10_plus_xanh.jpg');
	$cosmeticsArray[] = new Phone(1, 1500, 'S10+', 'https://chinhnhan.vn/uploads/product/samsung-smart-phone-tablet-cho-doanh-nghiep/SmartPhone/samsung-s10-plus-128GB.jpg');
	$cosmeticsArray[] = new Phone(2, 2000, 'iPhone 11 Pro Max', 'https://cdn.fptshop.com.vn/Uploads/Originals/2019/9/11/637037687765081535_11-pro-max-vang.png');
	$cosmeticsArray[] = new Phone(3, 2500, 'iPhone XR', 'https://halomobile.vn/wp-content/uploads/2018/09/iphone-xr-halomobile.jpg');

	if (!isset($_SESSION['cosmeticOrdered'])){
		//kiểm tra nếu SESSION chưa tồn tại thì tạo
		$_SESSION['cosmeticOrdered'] = [];
	}

	if (!empty($_GET)){
		if (isset($_GET['btnOrder'])){
			switch ($_GET['btnOrder']) {
				case '0':
					if (array_key_exists('0', $_SESSION['cosmeticOrdered'])){
						echo '<script>alert("Bạn đã đặt mua mặt hàng này rồi!")</script>';
					} else {
						$_SESSION['cosmeticOrdered'][$cosmeticsArray[0]->phoneId] = $cosmeticsArray[0];
						echo '<script>alert("Đặt hàng thành công!")</script>';
					}
				break;

				case '1':
					if (array_key_exists('1', $_SESSION['cosmeticOrdered'])){
						echo '<script>alert("Bạn đã đặt mua mặt hàng này rồi!")</script>';
					} else {
						$_SESSION['cosmeticOrdered'][$cosmeticsArray[1]->phoneId] = $cosmeticsArray[1];
						echo '<script>alert("Đặt hàng thành công!")</script>';
					}
				break;

				case '2':
					if (array_key_exists('2', $_SESSION['cosmeticOrdered'])){
						echo '<script>alert("Bạn đã đặt mua mặt hàng này rồi!")</script>';
					} else {
						$_SESSION['cosmeticOrdered'][$cosmeticsArray[2]->phoneId] = $cosmeticsArray[2];
						echo '<script>alert("Đặt hàng thành công!")</script>';
					}
				break;

				case '3':
					if (array_key_exists('3', $_SESSION['cosmeticOrdered'])){
						echo '<script>alert("Bạn đã đặt mua mặt hàng này rồi!")</script>';
					} else {
						$_SESSION['cosmeticOrdered'][$cosmeticsArray[3]->phoneId] = $cosmeticsArray[3];
						echo '<script>alert("Đặt hàng thành công!")</script>';
					}
				break;

				default:
				break;
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>BT160 Main Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		img{
			width: 200px;
			height: 200px;
		}
		.cosmetic-name{
			font-weight: bolder;
			color: green;
			font-size: 15pt;
		}
		.cosmetic-price{
			font-weight: bolder;
			color: red;
			font-size: 11pt;
		}
		.result-img{
			width: 80px;
			height: 80px;
		}
	</style>
</head>
<body>
	<div class="container" style="width: 80%;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				CÁC MẶT HÀNG ĐƯỢC BÀY BÁN			
			</div>
			<div class="panel-body">
				<div class="row" style="text-align: center">
					<form method="get">
						<?php
						foreach ($cosmeticsArray as $phone) {
							echo '
							<div class="cosmetic col-sm-3">
							<p class="cosmetic-name">' . $phone->phoneName . '</p>
							<img src="' . $phone->phoneImgLink . '">
							<p class="cosmetic-price">$' . $phone->phonePrice . '</p>
							<button class="btn btn-success" name="btnOrder" value="' . $phone->phoneId . '">ĐẶT MUA</button>
							</div>
							';
						}
						?>
					</form>
				</div>
				<br><br>
				<div class="result" style="text-align: center">
					<span class="col-sm-4"></span>
					<button type="button" id="btn-result" class="btn btn-primary col-sm-4">Go to Shopping Details</button>
				</div>
			</div>
		</div>
		<div class="panel panel-primary" id="result" style="display: none">
			<div class="panel-heading">
				CÁC MẶT HÀNG ĐƯỢC ĐẶT MUA			
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Tên Điện thoại</th>
							<th>Giá</th>
							<th>Ảnh</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($_SESSION['cosmeticOrdered'] as $phone) {
								echo '
									<tr><td>' . $phone->phoneName . '</td>
									<td>' . $phone->phonePrice . '</td>
									<td><img class="result-img" src="' . $phone->phoneImgLink . '"></td>
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
<script type="text/javascript">
	$('#btn-result').click(function() {
		$('#result').css('display', 'initial');
	});
</script>
</html>