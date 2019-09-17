<?php 
	function execute($sql){
		$conn = new mysqli('localhost', 'root', '', 'php_bt161');
		mysqli_set_charset($conn, 'utf8');

		mysqli_query($conn, $sql);

		mysqli_close($conn);
	}

	function executeResult($sql){
		$conn = new mysqli('localhost', 'root', '', 'php_bt161');
		mysqli_set_charset($conn, 'utf8');

		$resultSet = mysqli_query($conn, $sql);
		$data = [];
		if($resultSet){
			while ($row = mysqli_fetch_array($resultSet, 1)) {
			$data[] = $row;
			}
		}else{
			echo "Error !!!";
		}
		mysqli_close($conn);
		return $data;
	}
?>