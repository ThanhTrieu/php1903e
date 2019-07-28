<?php
session_start();
// phai khoi dong session
$name = $_SESSION['myName'] ?? '';
$age = $_SESSION['myAge'] ?? '';
$work = $_SESSION['myWork'] ?? '';
// lay gia cua session thi su dung bien toan cuc $_SESSION
// key truyen vao chinh laf key ben phia session dc tao ra ban dau;
// luon luon co thao tac kiem tra session co ton tai hay ko thi moi lay gia tri

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo session</title>
</head>
<body>
	<p>Name : <?= $name; ?></p>
	<p>Age: <?= $age; ?></p>
	<p>Work: <?= $work; ?></p>
	<br><br>
	<a href="index5.php"> Xoa session</a>
	
</body>
</html>