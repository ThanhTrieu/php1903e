<?php
if(isset($_POST['sum'])){
	$number1 = $_POST['number1'] ?? '';
	$number1 = trim(strip_tags($number1));

	$number2 = $_POST['number2'] ?? '';
	$number2 = trim(strip_tags($number2));

	if(is_numeric($number1) && is_numeric($number2)){
		$sum = $number1 + $number2;
		// thong bao ket qua cho form
		header("Location:../index3.php?state=ok&result={$sum}&n1={$number1}&n2={$number2}");
	} else {
		// thong bao du lieu ko dung ve lai form
		// su dung method GET
		// header: dieu huong trang
		header('Location:../index3.php?state=fail');
	}
}