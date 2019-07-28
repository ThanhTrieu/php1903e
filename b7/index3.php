<?php 
	session_start();
	// khoi dong session
	// nen dat dau file truoc cac ma lenh php khac
	
	// tao ra 1 session
	// su dung bien toan cuc kieu mang $_SESSION
	$_SESSION['myName'] = 'NTT';
	$_SESSION['myAge'] = 29;
	$_SESSION['myWork'] = 'DEV';
	// myName,myAge,myWork : name cua session
	// NTT,29,DEV : gia tri cua session
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo session</title>
</head>
<body>
	<h1>Demo session</h1>
	<a href="index4.php"> goto index4 php</a>
</body>
</html>