<?php
	function getStudent($Student_ID){

		$sql = 'select * from students where id ='.$Student_ID;

		$result = executeResult($sql);

		$varr;
		foreach ($result as $data) {
			if($data['id'] == $Student_ID){
				return $data;
			}
		}
	}

	function updateStudent($Student_ID){

		$sql = 'update from students where id ='.$Student_ID;

		$result = executeResult($sql);

		$varr;
		foreach ($result as $data) {
			if($data['id'] == $Student_ID){
				return $data;
			}
		}
	}
?>