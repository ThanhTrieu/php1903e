<?php
// lay ra gia tri cua cookie ben index.php tao ra
$myCookie = $_COOKIE['lphp1903'] ?? '';
// $myCookie = isset($_COOKIE['lphp1903']) ? $_COOKIE['lphp1903'] : '';

// de lay ra gia tri cua cookie - php cung cap 1 bien toan cuc kieu mang la $_COOKIE
// key truyen vao bien $_COOKIE chinh la ten cookie dc tao ra
// luon luon kiem tra cookie co ton tai thi moi lay gia tri

// xoa cookie
setcookie('lphp1903','',time()-300,'/','',0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo cookie</title>
	
</head>
<body>
	<h2> cookie : <?= $myCookie; ?></h2>
</body>
</html>