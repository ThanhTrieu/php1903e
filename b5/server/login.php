<?php
// noi day se tiep nhan du lieu tu from gui len
// se xu ly logic va hoi dap lai cho index.php

// kiem tra xem nguoi dung da bam nut login chua
// (kiem tra xem co ton tai method GET gui data len ko)
if(isset($_GET['login'])){
	// echo "<pre>";
	// print_r($_GET);
	$user = $_GET['user'] ?? '';
	$pass = $_GET['pass'] ?? '';

	echo $user . ' --- ' . $pass;
}