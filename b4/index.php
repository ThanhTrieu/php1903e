<?php
// cac ham xu ly voi mang trong php
// Cac ham co san

$person = [
	'name' => 'ABC',
	'age' => 20,
	'add' =>' HN'
];
// chuyen doi key cua mang ve chua hoa hoac chu thuong
$person = array_change_key_case($person, 1);
// 1 = CASE_UPPER : hang so ham
echo "<pre>";
print_r($person);

$cat = [
	'NAME' => 'Tom',
	'AGE' => 2,
	'WEIGHT' => 3
];
$cat = array_change_key_case($cat, 0);
// 0 = CASE_LOWER : chuyen ve chu thuong
print_r($cat);

// dem so lan xuat hien cua cac phan tu giong nhau trong mang
$arrNumber = [1,2,1,2,3,4,5,1,3,4];
$count = array_count_values($arrNumber);
print_r($count);

// them phan tu vao cuoi mang
array_push($arrNumber, 100);
print_r($arrNumber);

// xoa di phan tu o cuoi mang va tra ve dung phan tu do
$lastEl = array_pop($arrNumber);
echo $lastEl;
echo "<br/>";
print_r($arrNumber);

//them phan tu vao dau mang
array_unshift($arrNumber, $lastEl);
print_r($arrNumber);

// xoa di phan tu dau tien cua mang
$firstEl = array_shift($arrNumber);
echo $firstEl;
echo "<br/>";
print_r($arrNumber);

// tach mang thanh cac mang con 
$arrChunk = array_chunk($arrNumber, 3, true);
// tham so true : giu nguyen key tu mang ban dau truyen xuong
// tham so false hoac ko viet gi tu dong danh lai key
print_r($arrChunk);

// kiem tra 1 bien co phai la mang ko
// Array.isArray(nameArr) cua js
if(is_array($arrChunk)){
 	echo "Yes";
} else {
	echo "No";
}
echo "<br/>";
// kiem tra phan tu co nam trong mang ko
$number = [1,2,3,4,5,6,7,8,9];
if(in_array(6, $number)){
	echo "Yes";
} else {
	echo "No";
}
// kiem tra key co nam trong mang ko
$fruits = [
	'name' => 'Tao',
	'color' => 'xanh',
	'weight' => 2
];
echo "<br/>";
if(array_key_exists('colors', $fruits)){
	echo "OK";
} else {
	echo "Not Found";
}
echo "<br/>";
// xoa bo di cac phan tu giong nhau trong mang
$unique = [1,2,3,1,2,1,2,3,3,4,5];
$unique = array_unique($unique);
print_r($unique);

// chuyen mang ko tuan tu ve mang tuan tu
$fruits = array_values($fruits);
print_r($fruits);

// tinh tong cac phan tu nam trong mang
$sum = array_sum($unique);
echo $sum;
echo "<br/>";

// cat(tach) mang con tu mang cha cho truoc
$myArrNumber = [1,2,3,4,5,6,7,8,9,10];
$childArr = array_slice($myArrNumber, 4, 3, true);
print_r($childArr);
print_r($myArrNumber);

// thay the cac phan ban dau cua mang
array_splice($myArrNumber, 6, 3, [500,600,700]);
print_r($myArrNumber);

// lay ra phan tu cuoi cung cua mang - khong xoa no ra khoi mang
$endEl = end($myArrNumber);
echo $endEl;
echo "<br/>";
print_r($myArrNumber);

$url = "https://www.vnexpress.net/hom-nay-troi-ratadsdsd-43323-32d-nong-len-den-40-do-3.html";
// 123 : id cua bai viet - va no luon luon nam o vi tri truoc .html
// xu ly - viet ham lay dc ma id cua link bai viet

function getIdFromUrl($myUrl){
	$arrLink = explode('/', $myUrl);
	$contentLink = end($arrLink);
	$arrLink2 = explode('-', $contentLink);
	$strId = end($arrLink2);
	$id = intval($strId);
	return $id;
}
$id = getIdFromUrl($url);
echo $id;
echo "<br/>";

// Sap xep mang 
$randomNumber = [100,89,2,3,1,90,20];
//asort($randomNumber); // tang dan
arsort($randomNumber); // giam dan
// sap xep dua vao gia tri cua mang
print_r($randomNumber);

$rand = [
	'z' => 1,
	'a' => 10,
	'y' => 2,
	'b' => 3,
	't' => 5
];
ksort($rand); // tang dan theo key cua mang
// krsort($rand) // giam dan theo ket cua mang
print_r($rand);

$random = [100,89,2,3,1,90,20];
// viet ham dung foreach tu sap xep mang
function sapXepMang($arr){
	foreach($arr as $key => $val){
		foreach($arr as $key2 => $item){
			if($arr[$key] > $arr[$key2]){
				$tg = $arr[$key];
				$arr[$key] = $arr[$key2];
				$arr[$key2] = $tg;
			}
		}
	}
	return $arr;
}
$kq = sapXepMang($random);
print_r($kq);


