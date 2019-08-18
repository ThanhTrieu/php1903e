<?php
// bieu thuc chinh quy - Regular Expression
// chinh la 1 chuoi
// chuoi : mo to tap luat - bo quy tac su dung cho cong viec nao do
// tap luat - bo quy tac : co cach quy dinh hay cu phap 

$btcq = '/^.{1,3}$/';
$input = '2';
// kiem tra input co khop hay la tuan thu BTCQ hay ko?
// if(preg_match($btcq, $input)){
// 	echo "So khop - tuan thu BTCQ";
// } else {
// 	echo " khong So khop - khong tuan thu BTCQ";
// }

$btcq2 = '/^[1-9][0,2,4,6,8][^0,2,4,6,8][0,5]\d$/';
$number = '125';
if(preg_match($btcq2, $number)){
	echo "So khop - tuan thu BTCQ";
} else {
	echo " khong So khop - khong tuan thu BTCQ";
}
echo "<br/>";

// viet bieu thuc chinh kiem tra so dien thoai 10 so cua nha mang viettel
$phone = '0915091304';
// 097 - 098 - 096
// 032 - 039
$btcqPhone = '/^09[6-8]\d{7}$|^03[2-9]\d{7}$/';
if(preg_match($btcqPhone, $phone, $match)){
	echo "<pre>";
	print_r($match);
} else {
	echo "Err";
}
echo "<br/>";

// viet bieu thuc chinh quy kiem tra dinh dang ngay thang
// dd/mm/yyyy
$date = "01/08/2019";
// 30/02/2019
$expreDate = '/^(0[1-9]|1\d|2\d|3[0-1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/';
if(preg_match($expreDate, $date, $match)){
	if($match){
		// kiem tra rieng cho thang 2 
		$month = $match[2] ?? '';
		$month = (int) $month;
		if($month === 2){
			$day = $match[1] ?? '';
			$day = (int) $day;
			if($day >=1 && $day <= 28){
				echo "dinh dang ngay thang dung";
			} elseif($day === 29){
				// di kiem tra nam
				$year = $match[3] ?? '';
				if($year % 400 == 0){
					echo "dinh dang ngay thang dung";
				} elseif($year %4 == 0 && $year % 100 !=0){
					echo "dinh dang ngay thang dung";
				} else {
					echo "dinh dang ngay sai";
				}
			} else {
				echo "dinh dang ngay sai";
			}
		}
	}
} else {
	echo "Err date";
}
echo "<br/>";

// viet bieu thuc chinh quy kiem tra dia diem quan Ha Noi thong qua bien so xe
$bsx = '29C1-12345';
$expreBSX = '/^29(P[1-2]|G[1-2]|T[1-2]|C[1-2])-\d{5}$/'; 

if(preg_match($expreBSX, $bsx, $match)){
	if($match){
		$name = $match[1];
		switch ($name) {
			case 'P1':
				echo "Cau giay";
				break;
		}
	}
}
// BTVN : viet bieu thuc chinh quy kiem tra mat khau nguoi dung
// kiem tra do manh yeu cua mat khau
// MK manh : 8 ki tu tro len, co it nhat 1 chu thuong, co it nhat 1 chu hoa, co it nhat 1 chu so.
// arawrwGFGDFG213434 : dung
// dsadasdasd312424adad : sai








