<?php
// kiem tra xem nguoi dung bam login chua
// (co ton tai method post gui sang ko)
/*
if(isset($_POST['login'])){
	// $_POST : la bien toan cuc kieu mang de nhan du lieu bang method POST
	// echo "<pre>";
	// print_r($_POST);
	$user = $_POST['user'] ?? '';
	$pass = $_POST['pass'] ?? '';

	echo $user . ' --- ' . $pass;
}
*/
if(isset($_REQUEST['login'])){
	// $_POST : la bien toan cuc kieu mang de nhan du lieu bang method POST
	// echo "<pre>";
	// print_r($_POST);
	$user = $_REQUEST['user'] ?? '';
	$pass = $_REQUEST['pass'] ?? '';

	echo $user . ' --- ' . $pass;
}