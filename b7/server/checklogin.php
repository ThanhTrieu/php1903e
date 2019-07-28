<?php
session_start();
$user = $_SESSION['user'] ?? '';

if(empty($user)){
	// quay ve trang login
	header("Location:login_view.php");
	die; // dung chuong trinh
}