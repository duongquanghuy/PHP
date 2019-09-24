<?php
	function execute($query){
		$conn = mysqli_connect('localhost' , 'id10819640_admin' , 'huy123' , 'id10819640_test' );
		mysqli_set_charset($conn , 'utf8');
		if ($conn->connect_error) {
    		die("Kết nối thất bại: " . $conn->connect_error);
		}
		mysqli_query( $conn ,$query);


		mysqli_close($conn);

	}
	function checkTable(){

		$conn = mysqli_connect('localhost' , 'id10819640_admin' , 'huy123' , 'id10819640_test' );
		mysqli_set_charset($conn , 'utf8');
		if ($conn->connect_error) {
    		die("Kết nối thất bại: " . $conn->connect_error);
		}
		$sql = 'CREATE TABLE user (
						id int PRIMARY KEY AUTO_INCREMENT ,
	    				fullName varchar(250),
	   					passWord varchar(250),
	    				email varchar(250)
					  )';
		$data   = mysqli_query($conn, $sql);
		if ($data == true) {
			echo "tao thanh cong : ".'<br/>';
		}else{
			echo "tao that bai bang da ton tai : ". $conn->error.'<br/>';
		}

		mysqli_close($conn);		
	}
	function chekDatabase(){
				// ket noi voi database
			$conn = new mysqli('localhost' , 'id10819640_admin' , 'huy123' , 'id10819640_test' );
			// neu ket noi that bai
			if ($conn->connect_error) {
		    	die("Kết nối thất bại: " . $conn->connect_error);
			}

			$sql = "create database c1803l ";

			if ($conn -> query($sql) == true) {
				echo "ket noi thanh cong : ".'<br/>';
			}else{
				echo "tao database that bai : ".mysqli_error($conn).'<br/>';
			}
			mysqli_close($conn);

	}
	function executeResult($sql) {
		//insert data into database
		//open connection
		$conn = mysqli_connect('localhost' , 'id10819640_admin' , 'huy123' , 'id10819640_test' );
		mysqli_set_charset($conn, 'utf8');

		
		
		$result   = mysqli_query($conn, $sql);
		$data = [];
	
			while (($row = mysqli_fetch_array($result, 1)) != null)
			{
				$data[] = $row;
			}
		

		mysqli_close($conn);
		return $data;
	}