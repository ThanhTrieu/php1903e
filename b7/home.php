<?php
require 'server/checklogin.php';

$username = $_SESSION['user'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home page</title>
</head>
<body>
	<h1>Welcome : <?= $username; ?></h1>
	<a href="server/logout.php"> Thoat </a>
</body>
</html>