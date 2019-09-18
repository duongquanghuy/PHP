<?php
	
	$fullName = $age = $address = $emaill = $phone = '';
	
	if (!empty($_POST)) {
		
			$fullName  =$_POST['fullName'];	
	
			$age  =$_POST['age'];
		
		
			$address  =$_POST['address'];
		
		
			$emaill  =$_POST['emaill'];;	
		

			$phone  =$_POST['phone'];	
		


		$cFullName = $cAge = $cAddress = $cEmail = $cPhone = '';

		if (isset($_COOKIE['cfullName'])) {
			$cFullName  =$_COOKIE['cfullName'];	
		}
		if (isset($_COOKIE['cAge'])) {
			$cAge  =$_COOKIE['cAge'];	
		}
		if (isset($_COOKIE['cAddress'])) {
			$cAddress  =$_COOKIE['cAddress'];	
		}
		if (isset($_COOKIE['cEmail'])) {
			$cEmail  =$_COOKIE['cEmail'];	
		}
		if (isset($_COOKIE['cPhone'])) {
			$cPhone  =$_COOKIE['cPhone'];	
		}

			
			setcookie('cFullName', $fullName, time() + 7*24*60*60, '/');
			setcookie('cAge', $age , time( )+ 7*24*60*60 , '/');
			setcookie('cAddress', $address, time()+ 7*24*60*60, '/');
			setcookie('cEmail', $emaill, time() + 7*24*60*60, '/');
			setcookie('cPhone', $phone, time() + 7*24*60*60, '/');
				
}
	
		if (isset($_GET['deleteCookie'])) {
		
			$deleteCookie = $_GET['deleteCookie'];

			if ($deleteCookie == 0 ) {
				setcookie('cFullName', "", time()- 3600 , '/');
				setcookie('cAge',"", time()- 3600, '/');
				setcookie('cAddress',"", time()- 3600, '/');
				setcookie('cEmail',"", time()- 3600, '/');
				setcookie('cPhone', "", time()- 3600, '/');

				header('location: bt557.php');
			}
		}	