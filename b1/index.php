<?php 
// the mo cua php
// comment tren 1 dong
/*
comment tren
nhieu dong
 */
// sau nay toan bo ma lenh cua php phai duoc dat trong the mo va the dong cua php.
echo "Hello word";
// flie index.php : duoc goi la file root, default tu dong chay dp server apache cua xampp cau hinh
// Khai bao bien trong php
echo "<br/>";
$myName = "NTT";
echo $myName;
// $1Age = 10; // bien nay ko hop le - vi no bat dau bang con so
// $ age = 10; // day ko phai la cu phap : khong co khoang trang giua ki tu $ va ten bien
$_age = 20; // bien hoan toan hop le
$if = 'aaaa'; // van la bien hop le - cho phep trung tu khoa
// cac chuan style coding khai bao bien
// 1 - chu cai dau tien viet thuong cac chu cai dau tien cua cac tu con lai viet hoa
$myAge = 19;
// 2 : cac chu cai dau tien cua cac tu viet hoa tat
$MyAddress = 'HN';
// 3: cac chu cai viet thuong va cac tu cach nhau boi dau gach duoi
$my_name = 'AAAA';
// php phan biet chu hoa  - chu thuong trong bien
$money = 1000;
$Money = 1000;
// day la bien khac nhau hoan toan
// su khac biet giua $ va $$
// $ : dinh nghia bien
// $$ : tham chieu den gia tri cua 1 bien khac (luu y khong dung cho dinh nghia bien)
echo "<br/>";
$a = 'mot';
$b = 'a';
echo $$b;

// khai bao hang so
define('PI', 3.14);
const NUMBER_PI = 3.14;
// tat ca cac tu viet hoa va cach nhau boi dau gach duoi
// define va const : chi su dung const de dinh nghia hang so trong class con define khong dung dc
echo "<br/>";
echo PI . ' -- va -- ' . NUMBER_PI;

//cac kieu du lieu trong php

$n = 10;
$m = '20';
$v = true;
$u = [];
$t = null;
$k = null;
echo "<br/>";
echo gettype($n);
echo "<br/>";
echo gettype($m);
echo "<br/>";
echo gettype($k);
echo "<br/>";
settype($m, 'integer'); // chuyen doi cac kieu du lieu cho bien
echo gettype($m);
// bien m la kieu integer
$numberFloat  = 20.234342;
echo "<br/>";
echo intval($numberFloat);
echo "<br/>";
echo strval($numberFloat);

echo "<br/>";
// nhu the nao la 1 bien rong ?
$val = '';
$val2 = false;
$val3 = 0;
$val4 = null;
//$val5 = true;
if(empty($val4)){
	echo "Yes";
} else {
	echo "No";
}

echo "<br/>";
// nhu the nao goi la 1 bien da ton tai
//$checkNumber = null;
$checkNumber = false;
if(isset($checkNumber)){
	echo "Y";
} else {
	echo "N";
}

echo "<br/>";
$idPost = '12'; // chuoi so(trong chuoi chi chua cac con so)
$idPost2 = 10;
echo $idPost + $idPost2;

echo "<br/>";
if(is_numeric($idPost)){
	echo "OK";
} else {
	echo "Fail";
}

echo "<br/>";
if(is_int($idPost)){
	echo "OK";
} else {
	echo "Fail";
}
echo "<br/>";
$i = 10;
$j = 9;
$j = (($i-$j)% $i > $j) ? $i : $j;
echo $j;

echo "<br/>";
// chi ho tro tu phien ban php 7 tro len
$number = 9999;
$i = $number ?? $j;
// $i = isset($number) ? $number : $j;
echo $i;
echo "<br/>";

$t1 = 100;
$t2 = 200;
$res = $t1<=>$t2;
echo $res;

echo "<br/>";
$t3 = (++$t1) - ($t2++) + ($t1--) + (++$t2) - (--$t2);
//       101  - 200     + 101 + 202 - 201
echo $t3;
// 3
// 300
// 

for($i = 0; ; $i++){
	echo $i;
}


// the dong cua php
?>
