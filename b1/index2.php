<?php
declare(strict_types=1); 
// giup thong bao loi khi khai bao voi cu phap cua php 7 



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

// Bien tĩnh (static) trong ham

function testStatic () {
	// khai bao 1 bien static
	static $count = 1;
	$count++;
	echo $count;
	echo "<br/>";
}
echo "<br/>";
testStatic();
testStatic();
testStatic();
testStatic();
echo "<br/>";

// Goi ham trong ham
function test1($a)
{
	if($a%2 == 0){
		return true;
	}
	return false;
}

function tinhTongCacSoChan($n, $m)
{
	$sum = 0;
	for ($i = $n; $i <= $m ; $i++) { 
		if(test1($i)){
			$sum += $i;
		}
	}
	return $sum;
}

/****************** FUNCTION PHP 7 *********************/
// dinh nghia ham theo cu phap cua php 7 tro len

function tinhTongHaiSo(int $a, int $b) : int {

	return $a + $b;
}

echo "<br/>";
$sum = tinhTongHaiSo(10,20);
echo $sum;
echo "<br/>";

// viet ham theo chuan php 7 tinh giai thua cho 1 so bat ky.
function tinhGiaiThua(int $n) : void 
{
	$gt = 1;
	for ($i=1; $i <= $n ; $i++) { 
		$gt *= $i;
	}
	//return $gt;
	echo $gt;
}
$kq10 = tinhGiaiThua(15);
echo $kq10;

// viet ham kiem tra viec quy doi hanh kiem cua hs tu diem trung binh
// du lieu dau vao la diem cua 3 mon Toan, Van, Anh
// tinh diem trung binh
// diem trung binh duoi 5 hanh kiem yeu
// diem trung tu 5 - 7 : kha
// con lai la gioi
// viet ham theo chuan php 7
// 
function tinhHanhKiem(float $a, float $b, float $c) : string 
{
	$dtb = ($a+$b+$c)/3;
	if($dtb < 5){
		return "HK yeu";
	} elseif($dtb > 5 && $dtb < 7){
		return "HK TBK";
	} elseif($dtb > 7){
		return "HK Kha Gioi";
	} 
	return "";
}
echo "<br/>";
$hk = tinhHanhKiem(4.6, 7.7, 8.9);
echo $hk;









