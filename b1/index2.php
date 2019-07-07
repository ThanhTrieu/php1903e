<?php

echo "Hello LPHP1903E";
// khi trong file chi chua ma lenh php thi khong can the dong
//http://127.0.0.1:90/php1903e/b1/index2.php

// Dinh nghia ham trong php
// Dinh nghia ham chay dc voi moi phien ban php
// cu phap : function + nameFunction(param1,param2,...) {}
function myFunction() {
	echo "<br/>";
	echo "Hello function";
}
// cach su dung ham : goi ten ham da duoc dinh nghia
myFunction(); // () thuc thi ham va de truyen tham so
echo "<br/>";

function sumNumber($n1, $n2 = 20){
	return $n1 + $n2;
}
$res = sumNumber(10,10);
echo $res;

// bien toan cuc va bien cuc bo khi lam viec voi ham
$money = 100;
function getMoney(){
	// muon su dung bien toan cuc o ben ngoai ham vao trong ham thi can khai bao cho ham biet no la bien toan cu
	global $money;
	$n = $money / 2;
	return $n;
}
$kq = getMoney();
echo "<br/>";
echo $kq;
echo "<br/>";

// tham chieu (tham bien) - tham  tri 
// 1 - tham tri
// bien truyen vao ham, di ra khoi ham khong bi thay doi gia tri

$m = 10;

function testThamTri($m){
	++$m;
	return $m;
}
echo $m; // ??? 10
echo "<br>";
$k = testThamTri($m);
echo $k; // ??? 11
echo "<br>";
echo $m; // ??? 10


// 2 - Tham chieu
// bien truyen vao ham, di ra khoi ham bi thay doi gia tri
$n = 10;
function testThamChieu(&$n){
	++$n;
	return $n;
}
echo "<br>";
echo $n; // ??? 
echo "<br>";
$k2 = testThamChieu($n);
echo $k2; // ??? 
echo "<br>";
echo $n; // ??? 

