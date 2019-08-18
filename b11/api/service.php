<?php

function getDataMoney($money){
	// su dung CURL de lay du lieu tu api
	$urlApi = "https://tygia.com/tygia-all.json?currency={$money}";

	// khoi tao CURL
	$ch = curl_init();

	// cau hinh cac thong so
	// giup truy cap dc vao api
	curl_setopt($ch, CURLOPT_URL, $urlApi);
	// khong hien thi ket qua ngay khi thiet lap truy cap vao api ma doi excec CURL moi hien thi ket qua ve
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// set thoi gian toi da gui request len api - cho doi ket qua tra ve
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);

	// thuc thi
	$result = curl_exec($ch);

	// dong - ngat CURL
	curl_close($ch);

	// luu y:
	// vi api dang tra ve du lieu ve theo kieu chuoi JSON - convert ve array php de lam viec
	$data = json_decode($result, true);
	return $data;
}