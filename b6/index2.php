<?php
// ho tro dinh dang hien thi ngoai trinh duyet
header('Content-Type: text/html; charset=utf-8');

// duoc phep su dung luon $a
//include "index.php";
require 'index.php';

$b = 20;
$sum = $a + $b;

if($sum == 40){
	//header("Location:../b5/index2.php");
} else {
	//header("Location:../b5/index.php");
}
echo "tôi đang học php";
echo "<br/>";

$email = "test@gmail.com";
// kiem tra xem day co phai dung dinh dang email ko?
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	// FILTER_VALIDATE_EMAIL : giup kiem tra dinh dang email
	echo "Yes";
} else {
	echo "No";
}

echo "<br/>";
$url = "https://facebo00s ố à ok.com";
// kiem tra xem day co phai la dinh dang URL hay ko
if(filter_var($url, FILTER_VALIDATE_URL)){
	echo "OK";
} else {
	echo "Fail";
}

echo "<br/>";
$true = true;
// kiem tra xem bien nay co phai la boolean hay ko ?
if (filter_var($true, FILTER_VALIDATE_BOOLEAN)) {
	echo "Y";
} else {
	echo "N";
}

echo "<br/>";
$email2 = "adminàố$@&^%*()[]{}@gmail.com";
// loai bo cac ky tu bat hop phap - ko hop le trong dinh dang chuan cua 1 email
$newEmail = filter_var($email2, FILTER_SANITIZE_EMAIL);
echo $newEmail;

echo "<br/>";
$ulr2 = "https://àố$@&^%*()[]{}tezt.vn";
$newUrl = filter_var($ulr2, FILTER_SANITIZE_URL);
echo $newUrl;

echo "<br/>";
$string = "<h1><i>AAAAAA</i><h1>";
$newString = filter_var($string, FILTER_SANITIZE_STRING);
echo $newString;
//strip_tags();

echo "<br/>";
$number = "121212bac+123asfaf86e75jjgjg0000";
// $newNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
// echo $newNumber;
// $number = intval($number);
// echo $number;



