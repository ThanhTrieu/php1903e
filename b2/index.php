<?php
// xu ly ve chuoi trong php
$string = "Chung ta dang hoc PHP";
$string2 = 'Hoc ve Chuoi trong PHP';

echo $string . '-' . $string2;
// echo la keyword in chuoi ra ngoai man hinh (khong phai la function)
// 1 - long chuoi nhay don vao trong nhay don
// 2 - long chuoi nhay kep vao trong nhay kep
echo "<br/>";

$string3 = 'Bay la \'20h\' ngay 10/7/2019';
echo $string3;

echo "<br/>";
$string4 = "Bay la \"20h\" ngay 10/7/2019";
echo $string4;

echo "<br/>";
$string5 = 'Bay la "20h" ngay 10/7/2019';
echo $string5;

echo "<br/>";
$string6 = "Bay la '20h' ngay 10/7/2019";
echo $string6;
echo "<br/>";

// khi dinh nghia chuoi ma khong co bien nam ben trong thi dung nhay don - nguoc lai ta dung nhay kep

$age = 20;
$string7 = "Toi nam nay {$age} tuoi";
echo $string7;
echo "<br/>";

/*********** CAC HAM XU LY VE CHUOI TRONG PHP *************/
// 1- chuyen chuoi ve mang
$friuts = 'cam, quyt, mit, dua';
$arrFruits = explode(',', $friuts);
print_r($arrFruits);
echo "<br/>";

//2 - chuyen mang ve chuoi
$strFruits = implode('_', $arrFruits);
echo $strFruits;
echo "<br/>";

//3 - dem so ky tu cua chuoi
//'cam, quyt, mit, dua';
$countLength = strlen($friuts);
echo $countLength;
echo "<br/>";
$myString = "sắp được về rồi";

//$countLength2 = strlen($myString);
$countLength2 = mb_strlen($myString);
echo $countLength2;
echo "<br/>";

$myString2 = "sắp được về rồi";
// dem so tu nam trong cau
echo str_word_count($myString2);

echo "<br/>"; // lap chuoi
$myString3 = "buon ngu qua may oi, tao cung buon ngu";
echo str_repeat($myString3, 3);

echo "<br/>"; // thay the chuoi
echo str_replace('buon ngu', 'dau dau', $myString3);

echo "<br/>";
$password = "123456789";
echo md5($password);

echo "<br/>";
$script = "<script>alert('yes')</script>";
$script2 = "<h1> Tao doi qua may oi </h1>";
echo htmlentities($script2);
$script3  = htmlentities($script);
// $script3 : chuyen het cac ma HTML thanh cac ky tu binh thuong
//echo $script3 ;
// echo html_entity_decode($script3);

$stripTags = "<h1><u><i> AAAAAAAAAAAAAAAA </i></u></h1>";
echo strip_tags($stripTags,'<h1>');
echo "<br/>";

$string6 = "Sao ma hoc buon ngu the";
// tach chuoi con "buon ngu" ra ngoai
$subStr = subStr($string6,11,8);
echo $subStr;

echo "<br/>";
$strStr = strStr($string6, 'hoc');
echo $strStr;



