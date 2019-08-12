<?php
// thiet lap gio mac dinh
date_default_timezone_set('Asia/Ho_Chi_Minh');

// xu ly ngay thang voi php
// 1 - in ra ngay thang hien tai
$date = date('d/m/Y H:i:s');
echo $date;
echo "<br/>";

$d = date('d'); // lay ra ngay hien tai
echo $d;
echo "<br/>";

$m = date('m');
echo $m;
echo "<br/>";

$y = date('Y'); // y : lay ra 2 so cuoi : Y : full year
echo $y;

// 2 -  so sanh ngay thang trong php (chuyen doi ngay thang ve kieu INT)
$yesterday = '2019-08-10';
$today = '2019-08-11';

$timeYesterday = strtotime($yesterday);
$timeToday = strtotime($today);

echo "<br/>";
echo $timeYesterday;
echo "<br/>";
echo $today;

echo "<br/>";
if($timeYesterday < $timeToday){
	echo "Yes";
} else {
	echo "No";
}

//3 - ham lay ra so giay tinh tu 1/1/1970 cho den thoi gian hien tai
$myTime = time();
echo "<br/>";
echo $myTime;

// 4 - cong tru ngay thang
$date_int = mktime(0, 0, 0, 11, (20 + 12), 2019);
echo "<br/>";
echo $date_int;
echo "<br/>";

// chuyen doi so giay (int) ve dinh dang ngay thang
$convertDate = date('d/m/Y', $date_int);
echo $convertDate;

echo "<br/>";
$mkTime = date('2019-09-01 H:i:s', strtotime('+3hours'));
echo $mkTime;







