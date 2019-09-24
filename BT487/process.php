<?php
	$fullName = $emaill = $passwords = '';
	$option = 1;
	
	if (!empty($_POST)) {

	 	if (isset($_POST['fullName'])) {
			$fullName = $_POST['fullName'];
		}
		
		if (isset($_POST['passwords'])) {
			$passwords = $_POST['passwords'];
		}
		if (isset($_POST['emaill'])) {
			$emaill = $_POST['emaill'];
		}
	}
	if (($fullName  && $passwords && $emaill ) != '') {
		$sql  = 'select * from user where email = "'.$emaill.'"';
		$data = executeResult($sql);
		if ($data != null && count($data) > 0) {
			if (($fullName && $emaill ) != '') {
				$option =2;
				
			}
		
		}else{
			$option = 3;
		}

	}
	if ($option === 3) {
		if (($fullName  && $passwords && $emaill ) != '') {
			$query = 'insert into user(fullName, password , email) values ("'.$fullName.'", "'.$passwords.'",
			 "'.$emaill.'")';
			execute($query);
			
			header('Location: login.php');
			unset($data);
		
		}
	}
	return $option;		
		

		
	
	
		

	


