<?php

$data = [
	[
		'id' => 1,
		'name' => 'son tung',
		'image' => 'https://sohanews.sohacdn.com/thumb_w/660/2018/6/14/photo1528955600798-15289556007991136573942.jpg'
	],
	[
		'id' => 2,
		'name' => 'my tam',
		'image' => 'https://media.laodong.vn/storage/newsportal/2018/1/24/588052/My-Tam-Ca-Si-Dang-Ng.jpg'
	],
	[
		'id' => 3,
		'name' => 'dan truong',
		'image' => 'https://images.vov.vn/w800/uploaded/fuxpgqubk/2019_04_20/kieu_toc_cua_dan_truong_2_0145525_odvz.jpg'
	],
	[
		'id' => 4,
		'name' => 'lam truong',
		'image' => 'https://znews-photo.zadn.vn/w480/Uploaded/mdf_rkxrxd/2019_07_07/mg931215623709092811084748556.jpg'
	]
];

// nhan du lieu tu client index5.php gui len
$keyword = $_POST['key'] ?? '';
$keyword = trim(strip_tags($keyword));

$info = [];
foreach ($data as $key => $val) {
	if($val['name'] == $keyword || $val['id'] == $keyword){
		$info = $val;
	}
}

// nhung 1 file php khac vao day
// tra ve cho phia index5.php ca 1 file html
require '../view/show.php';



