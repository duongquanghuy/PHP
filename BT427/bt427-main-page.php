<?php
	session_start();

	if (!isset($_SESSION['productList'])){
		$productList = [];
		$_SESSION['productList'] = $productList;
	} else {
		if (!empty($_POST)){
			if (isset($_POST['productList'])){
				$_SESSION['productList'] = $_POST['productList'];
			}
		}
	}
	var_dump($_SESSION['productList']);
	// session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>BT427 - Main Page</title>
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
				<span id="panel-title">Input</span> Product's Detail Information
			</div>
			<div class="panel-body">
				<form method="POST" id="main-form">
					<div class="form-group">
						<label for="productName">Product Name:</label>
						<input required type="text" name="productName" class="form-control" id="product-name">
					</div>
					<div class="form-group">
						<label>Category Name:</label>
						<select class="form-control" name="categoryName" id="category-select">
							<option value="iPhone">iPhone</option>
							<option value="iPad">iPad</option>
							<option value="iPod">iPod</option>
							<option value="Macbook">Macbook</option>
							<option value="iWatch">iWatch</option>
						</select>
					</div>
					<div class="form-group">
						<label for="priceValue">Price:</label>
						<input required type="number" name="priceValue" class="form-control" id="price-value">
					</div>
					<div class="form-group">
						<label for="quantityValue">Quantity:</label>
						<input required type="number" name="quantityValue" class="form-control" id="quantity-value">
					</div>
					<div class="form-group">
						<label>Total Price:</label>
						<input type="number" name="totalPriceValue" class="form-control" disabled="" id="total-price-value">
					</div>
					<div class="form-group">
						<label>Manufacture Name:</label>
						<select class="form-control" name="manufactureName" id="manufacture-select">
							<option value="Apple" selected="">Apple</option>
							<option value="Sony">Sony</option>
							<option value="Samsung">Samsung</option>
							<option value="LG">LG</option>
							<option value="Google">Google</option>
						</select>
					</div>
					<br>
					<button type="button" class="btn btn-success" id="add-button"><span id="button-title">Add</span> Product</button>
					<button type="button" class="btn btn-warning" id="reset-button">Reset</button>
				</form>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				Management Products
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>No</th>
						<th>Product Name</th>
						<th>Category Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Manufacturer Name</th>
						<th></th>
						<th></th>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	var productsArray = [];
	var updateStatus = false;
	var currentProductIdx;

	function editProduct(index){
		updateStatus = true;
		currentProductIdx = index;

		$('#panel-title').text('Edit');
		$('#button-title').text('Update');

		$('#product-name').val(productsArray[index].productName);
		$('#price-value').val(productsArray[index].priceValue);
		$('#quantity-value').val(productsArray[index].quantityValue);
		calculateTotalPrice();
		$('#manufacture-select').val(productsArray[index].manufactureName);
		$('#category-select').val(productsArray[index].categoryName);

		disableEditDeleteButton(1);
	}

	function deleteProduct(index){
		if (confirm('Are you sure to Remove this Product from System?')){
			productsArray.splice(index, 1);

			showProducts();

			resetForm();
		}
	}

	function disableEditDeleteButton(number){
		if (number == 1){
			$('.btn-edit').prop('disabled', true);
			$('.btn-delete').prop('disabled', true);
		} else {
			$('.btn-edit').prop('disabled', false);
			$('.btn-delete').prop('disabled', false);
		}
	}

	$('#manufacture-select').change(function(){
		checkManufactureSelect();
		$('#product-name').val('');
		$('#price-value').val('');
		$('#quantity-value').val('');
		$('#total-price-value').val('');
	});

	function checkManufactureSelect(){
		var selectedManufacture = $('#manufacture-select').find(":selected").val();

		if (selectedManufacture == 'Apple'){
			$('#category-select').html(
				'<option value=\"iPhone\">iPhone</option>' +
				'<option value=\"iPad\">iPad</option>' +
				'<option value=\"iPod\">iPod</option>' +
				'<option value=\"Macbook\">Macbook</option>' +
				'<option value=\"iWatch\">iWatch</option>'
				);
		}
		if (selectedManufacture == 'Sony'){
			$('#category-select').html(
				'<option value=\"xPeria\">xPeria</option>' +
				'<option value=\"VaiO\">VaiO</option>' +
				'<option value=\"Play Station\">Play Station</option>' +
				'<option value=\"Audio\">Audio</option>' +
				'<option value=\"Sony\">Sony</option>'
				);
		}
		if (selectedManufacture == 'Samsung'){
			$('#category-select').html(
				'<option value=\"Galaxy S\">Galaxy S</option>' +
				'<option value=\"Galaxy A\">Galaxy A</option>' +
				'<option value=\"Galaxy J\">Galaxy J</option>' +
				'<option value=\"Galaxy Tab\">Galaxy Tab</option>' +
				'<option value=\"Samsung Tivi\">Samsung Tivi</option>'
				);
		}
		if (selectedManufacture == 'LG'){
			$('#category-select').html(
				'<option value=\"LG Tivi\">LG Tivi</option>' +
				'<option value=\"LG Screen\">LG Screen</option>' +
				'<option value=\"LG Fridge\">LG Fridge</option>' +
				'<option value=\"LG Air Conditioner\">LG Air Conditioner</option>' +
				'<option value=\"LG Washer\">LG Washer</option>'
				);
		}
		if (selectedManufacture == 'Google'){
			$('#category-select').html(
				'<option value=\"Google Mobile\">Google Mobile</option>' +
				'<option value=\"Google Audio\">Google Audio</option>' +
				'<option value=\"Google Tivi\">Google Tivi</option>' +
				'<option value=\"Google Watch\">Google Watch</option>' +
				'<option value=\"Google Apps\">Google Apps</option>'
				);
		}
	}

	$('#price-value').keyup(function(){
		calculateTotalPrice();
	});

	$('#quantity-value').keyup(function(){
		calculateTotalPrice();
	});

	function calculateTotalPrice(){
		var priceValue = $('#price-value').val();
		var quantityValue = $('#quantity-value').val();
		var totalPrice;

		if (priceValue != '' && quantityValue != ''){
			totalPrice = priceValue * quantityValue;
			$('#total-price-value').val(totalPrice);
		}
	}

	$('#reset-button').click(function(){
		resetForm();
	});

	function resetForm(){
		$('#product-name').val('');
		$('#price-value').val('');
		$('#quantity-value').val('');
		$('#total-price-value').val('');
		$('#manufacture-select').val('Apple');
		checkManufactureSelect();
	}

	function load_ajax(productionList){
		$.ajax({
			url : "bt427-main-page.php", // gửi ajax đến file .php
			type : "post", // chọn phương thức gửi là post
			dataType:"product", // dữ liệu trả về dạng
			data : { // Danh sách các thuộc tính sẽ gửi đi
				productList : productionList
			},
			success : function (){
				// Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
				
			}
		});

		alert('Add Product Success!\nSend data to server through AJAX Success!');
	}

	$('#add-button').click(function(){
		if (updateStatus == false){

			var gProductName = $('#product-name').val();
			var gPriceValue = $('#price-value').val();
			var gQuantityValue = $('#quantity-value').val();
			var gManufactureName = $('#manufacture-select').val();
			var gCategoryName = $('#category-select').val();

			if (gProductName == ''){
				alert('Please fill Product Name field!');
			} else if (gPriceValue == ''){
				alert('Please fill Product Price field!');
			} else if (gQuantityValue == ''){
				alert('Please fill Product Quantity field!');
			} else {
				var product = {
					productName: gProductName,
					priceValue: gPriceValue,
					quantityValue: gQuantityValue,
					manufactureName: gManufactureName,
					categoryName: gCategoryName,
				};

				productsArray.push(product);

				load_ajax(productsArray);

				showProducts();
			}
		} else {
			if (confirm('Are your sure to Update this Product follow these information?')){
				productsArray[currentProductIdx].productName = $('#product-name').val();
				productsArray[currentProductIdx].priceValue = $('#price-value').val();
				productsArray[currentProductIdx].quantityValue = $('#quantity-value').val();
				productsArray[currentProductIdx].manufactureName = $('#manufacture-select').val();
				productsArray[currentProductIdx].categoryName = $('#category-select').val();

				updateStatus = false;

				$('#panel-title').text('Input');
				$('#button-title').text('Add');

				showProducts();

				resetForm();

				disableEditDeleteButton(0);
			}
		}
	});

	function showProducts(){
		$('tbody').html('');

		for (var i = 0; i < productsArray.length; i++){
			$('tbody').append('<tr>');
			$('tbody').append('<td style=\"text-align: center\">' + (i + 1) + '</td>');
			$('tbody').append('<td>' + productsArray[i].productName + '</td>');
			$('tbody').append('<td>' + productsArray[i].categoryName + '</td>');
			$('tbody').append('<td style=\"text-align: center\">' + productsArray[i].priceValue + '</td>');
			$('tbody').append('<td style=\"text-align: center\">' + productsArray[i].quantityValue + '</td>');
			$('tbody').append('<td>' + productsArray[i].manufactureName + '</td>');
			$('tbody').append('<td style=\"text-align: center\"><button type=\"button\" class=\"btn btn-warning btn-edit\" onClick=\"editProduct(' + i + ')\">Edit</button></td>');
			$('tbody').append('<td style=\"text-align: center\"><button type=\"button\" class=\"btn btn-danger btn-delete\" onClick=\"deleteProduct(' + i + ')\">Delete</button></td></tr>');
		}
	}
</script>
</html>