<?php
session_start();

if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = strip_tags($user);

	$pass = $_POST['pass'] ?? '';
	$pass = strip_tags($pass);

	if($pass === '123' && $user === 'admin'){
		// dang nhap thanh cong
		// cho sang trang home.php
		// luu lai session
		$_SESSION['user'] = $user;
		header("Location:../home.php");
	} else {
		// dang nhap ko thanh cong
		header("Location:../login_view.php?state=fail");
	}
}