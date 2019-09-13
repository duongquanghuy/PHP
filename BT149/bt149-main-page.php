<?php
	echo 'Cho đoạn chương trình sau<br>';
	echo '$x = 10;<br>';
	echo '$y = 5;<br>';
	echo '$z = 2;<br>';
	echo '$result = $x++ - ++$y - --$z + $x++ + $y++;<br>';
	echo 'echo $result;<br>';
	echo 'Kết quả $result trả về là gì? - Giải thích tại sao?<br>';

	$x = 10;

	$y = 5;

	$z = 2;

	$result = $x++ - ++$y - --$z + $x++ + $y++;

	echo 'Kết quả của $result là ' . $result . '<br>';
	echo 'Được như vậy vì toán tử ++ hoặc -- ở SAU BIẾN biểu thị việc gán giá trị trước rồi mới thực hiện việc tính toán với biến, tương tự ngược lại với ++ hoặc -- ở TRƯỚC BIẾN biểu thị việc thực hiện tính toán trước đối với biến rồi mới gán giá trị!<br>';
	echo 'Chi tiết: <br>';
	echo '$result = 10 - 6 - 1 + 11 + 6 = 20';
?>