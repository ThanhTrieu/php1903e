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
