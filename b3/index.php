<?php


// Mang trong php
// 1 - Cu phap
$fruits = array(); // mang rong
$fruits2 = []; // mang rong
// int a = [];
// string b = [];
$arr = array('cam','quyt','mit',1,2,3);
$arr2 = ['cam','quyt','mit',1,2,3];
// hien thi gia tri va chi so phan tu cua mang
echo "<pre>";
print_r($arr2);
// mang arr va arr2 goi la mang tuan tu (mang don).
// key (chi so cua phan tu) se tu dong duoc tao ra va sap  xep tang dan

$cat = [
	'name' => 'Tom',
	'age' => 2,
	'color' => 'brown'
];
// mang don - mang ko tuan tu
// key(chi so phan tu cua mang) , khong sap xep theo trinh tu nao ca
echo "<pre>";
print_r($cat);
// "<pre>" : giup in mang theo kieu cay thu muc

// mang da chieu
$students = [
	[1,2,3,4,5],
	['a','b','c'],
	['name' => 'ABC', 'age' => 20],
	1,
	2,
	'ABC'
];
echo "<pre>";
print_r($students);

///////// TRUY CAP VAO 1 PHAN TU TRONG MANG //////////////////
// Cu phap : nameArray[nameKey];
echo $arr[1];
echo "<br/>";
echo $students[2]['name'];
// nameKey : khong phai la so thi co nhay don bao lay no

/////////// DUYET QUA TAT CA CAC PHAN TU TRONG MANG ///////
$persons = [
	[
		'id' => 1,
		'name' => 'ABC',
		'address' => 'HN',
		'age' => 20
	],
	[
		'id' => 2,
		'name' => 'CDF',
		'address' => 'HD',
		'age' => 21
	],
	[
		'id' => 3,
		'name' => 'ADG',
		'address' => 'TB',
		'age' => 22
	]
];
echo "<br/>";
foreach($persons as $key => $item){
	echo $key . '---' . $item['id'];
	echo "<br/>";
}

$numberArr = [1,2,3,4,5,6,7,8,9];
foreach($numberArr as $items){
	echo $items;
	echo "<br/>";
}
////////// Mot  vai diem luu y voi mang ///////////
// 1 - gan them phan tu vao mang
$football = [];
$football['name'] = 'Messi';
$football['club'] ='Barca';
$football['danh_hieu'] = [
	'qua bong vang',
	'thanh ganh ta',
	'thanh vuot rau'
];
echo "<pre>";
print_r($football);

// 2 - xu ly cac vong lap long nhau va gan gia tri vao mang trong vong lap

//mang luu tru thong phong
$rooms = [
	[
		'ma_phong' => 101,
		'ten_phong' => 'To Chuc',
		'tp' => 'Nguyen Van A',
		'thanh_lap' => '2017-01-10'
	],
	[
		'ma_phong' => 102,
		'ten_phong' => 'IT',
		'tp' => 'Nguyen Van B',
		'thanh_lap' => '2018-01-10'
	],
	[
		'ma_phong' => 103,
		'ten_phong' => 'Ke Toan',
		'tp' => 'Nguyen Thi C',
		'thanh_lap' => '2016-01-10'
	]
];
// mang luu tru thong tin cap bac(ranks)
$ranks = [
	[
		'ma_cb' => 1,
		'ten_cb' => 'giam doc'
	],
	[
		'ma_cb' => 2,
		'ten_cb' => 'truong phong'
	],
	[
		'ma_cb' => 3,
		'ten_cb' => 'nhan vien'
	]
];
// mang luu tru thong tin cua nhan vien (staffs)
$staffs = [
	[
		'ma_nv' => 113,
		'ten_nv' => 'NVA',
		'sdt_nv' => '123456',
		'luong_cb' => 2000000,
		'id_room' => 101,
		'id_rank' => 3
	],
	[
		'ma_nv' => 114,
		'ten_nv' => 'NVB',
		'sdt_nv' => '123456',
		'luong_cb' => 5000000,
		'id_room' => 101,
		'id_rank' => 2
	],
	[
		'ma_nv' => 115,
		'ten_nv' => 'NVC',
		'sdt_nv' => '123456',
		'luong_cb' => 8000000,
		'id_room' => 102,
		'id_rank' => 1
	],
	[
		'ma_nv' => 116,
		'ten_nv' => 'NTG',
		'sdt_nv' => '123456',
		'luong_cb' => 2000000,
		'id_room' => 103,
		'id_rank' => 3
	]
];

// se gan gia tri ten phong sang mang nhan vien 1 cach tuong ung voi tung nhan vien  do
foreach($staffs as $key => $staff) {
	foreach($rooms as $key2 => $room){
		// kiem tra ma phong trong mang staffs co bang ma phong trong mang rooms ko?
		if($staff['id_room'] == $room['ma_phong']){
			// lay ten phong tu mang rooms gan sang mang staffs
			// tao ra 1 key trong mang staffs de luu tru
			$staffs[$key]['name_room'] = $room['ten_phong'];
		}
	}
}

// se gan gia tri ten cap bac sang mang nhan vien 1 cach tuong ung voi tung nhan vien  do
foreach($staffs as $key => $staff) {
	foreach($ranks as $key2 => $rank){
		if($staff['id_rank'] == $rank['ma_cb']){
			$staffs[$key]['name_rank'] = $rank['ten_cb'];
		}
	}
}

// echo "<pre>";
// print_r($staffs);
// cho mang sau
$myNumber = [1,2,3,4,5,6,7,8,9,11,12,15,16,17];
// viet ham xu ly lay ra tat cac so chan.
function layTatCaCacSoChan($myArr = [])
{
	$result = [];
	foreach($myArr as $val){
		if($val % 2 == 0){
			$result[] = $val;
		}
	}
	return $result;
}

// viet ham xu ly xoa het cac so le trong mang myNumber;
// ket qua tra ve la mang chua toan so chan
// ham unset(); xoa bien
function xoaHetCacSoLe(&$myArr) {
	foreach($myArr as $key => $number){
		if($number % 2 != 0){
			// xoa bo di phan tu la so le trong mang
			unset($myArr[$key]);
		}
	}
	return $myArr;
}
echo "<pre>";
print_r($myNumber);
// goi ham ra su dung
$k = xoaHetCacSoLe($myNumber);
// in lai $myNumber kiem tra
print_r($k);
print_r($myNumber);







