	<?php 
			 function calculationNum($numA , $numB , $numCal){
			 	if($numCal == '+'){
					
					return   $numA + $numB ;
				
				}
				if($numCal == '-'){
				
				
					return  $numA - $numB  ;
			
				}
				if($numCal == '*' ){
			
					
					return   $numA * $numB ;
				}
				if($numCal == '/'){

					
					return   $numA / $numB ;
				}
				if($numCal == '%'){

					return   $numA % $numB ;
				}
				
						
			}
		$result = null ;
		$a = $b = $cal = '';
		if (!empty($_GET)) {
			$a = $_GET['a'];
			$b = $_GET['b'];
			$cal = $_GET['cal'];

		
			$result = calculationNum($a , $b , $cal);

		}


	?>

<!DOCTYPE html>
<html>
<head>
	<title>maytinh</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">

		*{
			margin: 0;
			padding: 0;
		}
		.maytinh {
			background-color: green;
			width: 30%;
			height: 500px;
			margin: 0 auto;
		}
		.manhinh {
			background-color: gray;
			height: 200px;
			font-size: 100px;
			text-align: right;
			padding-top: 60px;
		}
		
			.flex-container {
  			display: flex;
  			background-color: DodgerBlue;
		}

		.flex-container > div {
  			background-color: #f1f1f1;
  			margin: 1px;
  			padding: 2px;
  			font-size: 50px;
  			width: 25%;
		}
		.flex-container > div > button  {
  			
  			width: 100%;
		}
		.flex-container > div > button : hover  {
  			
  			color: gray;
		}


	</style>
	<script >
		$(document).ready(function() {
			//lay gia tri A
			var option = 1;
			$(".choose").click(function(value) {
			
				if(option == 1)	{
						$("#a").val($("#a").val() + $(this).val());
					}
					else{
						
						$("#b").val($("#b").val() + $(this).val())
					}
					
				buildNumber();
			});
			//phep tính
			//lay gia trị số B
				
			$(".tinh").click(function(value) {
					

				if ($("#a").val()  != '') {
					
					$("#calculation").val($(this).val());
						option = 2;
						option2 = 1 ;
				}
						
				buildNumber();
					
					
				
			});
			// nút AC
			$("#resetData").click(function() {
				$('#a').val("") ;
				$('#b').val("") ;
				$('#calculation').val("") ;
				$('#ketqua').text("0");
				buildNumber();
				option = 1;
			});

			//đảy dữ liệu len sevver
			$("#bang").click(function() {
				if($('#b').val() != '' ){
					$('#numFrom').submit();
					$('#ketqua').text("");

					buildNumber();
					option2 = 1;
				}
				
				
			});
			//phần đổi dấu nhưng khi sử sụng chương trình lỗi
			var option2 = 1 ;
			$("#doiDau").click(function(dau){
				
				if (option == 1) {
					if(option2 == 1){
						var dau = '-';
						$("#a").val( dau + $("#a").val()  );
						option2 = 2;
					}

					
				}else{
					if(option2 == 1){
						var dau1Left = '(-';
						var dau1Right = ')';
						$("#b").val( dau1Left + $("#b").val() + dau1Right );
						option2 = 2;
					}
				}

				buildNumber();
			});

			//hàm hiển thi phép tính
			function buildNumber(){
					$("#pheptinh").html($('#a').val() + $('#calculation').val() + $('#b').val() );
			}
				
		});


	</script>

</head>
<body>
	<div class="maytinh">
		<form method="get" name="fromrNumber" id = "numFrom">
			<input id="a" name="a" value="<?= $result ?>" style="display: none">
			<input id="calculation" value="" name = "cal" style="display: none">
			<input id="b" name="b" style="display: none">
				
		</form>
		<div class="manhinh " >
			
			<div id="pheptinh" style="font-size: 20px  "><?= $a.$cal.$b ?></div>
			<div id="ketqua" name="ketqua"><?= $result ?> </div>

		</div>
		<div class="flex-container">
			<div><button id="resetData" value="AC" name="AC">AC</button></div>
			<div><button  id="doiDau" value="" name="doiDau">+/-</button></div>
			<div><button class="tinh"   value="%" name="phanTram">%</button></div>
			<div><button class="tinh"  value="/" name="chia" style="background-color: #f49031">/</button></div>
		</div>
		<div class="flex-container">
			<div><button class ="choose" value="7">7</button></div>
			<div><button class ="choose" value="8">8</button></div>
			<div><button class ="choose" value="9">9</button></div>
			<div><button class ="tinh" value="*"  name="nhan" style="background-color: #f49031">*</button></div>
		</div>
		<div class="flex-container">
			<div><button class ="choose" value="4">4</button></div>
			<div><button class ="choose" value="5">5</button></div>
			<div><button class ="choose" value="6">6</button></div>
			<div><button class="tinh" value="-" name="tru" style="background-color: #f49031">-</button></div>
		</div>
		<div class="flex-container">
			<div><button class ="choose" value="1">1</button></div>
			<div><button class ="choose" value="2">2</button></div>
			<div><button class ="choose" value="3">3</button></div>
			<div><button class="tinh" value="+" name="cong" style="background-color: #f49031">+</button></div>
		</div>
		<div class="flex-container">
			<div class ="choose" style="width: 50%"><button>0</button></div>
			
			<div><button class="choose" value="." name="cham">.</button></div>
			<div><button id="bang" value="=" name="bang" style="background-color: #f49031">=</button></div>
		</div>
	</div>
</body>
</html>