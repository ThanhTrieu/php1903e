<?php
// xu ly voi file trong php
// 1 - mo file
$fp = fopen('database/data.txt', 'a+');
// thao mo file va chi cap quyen doc du lieu trong file
if($fp){
	//echo "Mo file thanh cong";
	
	$sizeFile = filesize('database/data.txt');
	//echo $sizeFile; 
	
	//ghi du lieu vao file
	$content = "Test write file";
	fwrite($fp, $content);

	// doc noi dung nam trong file
	// mo lai file vi rule la a+
	$fp2 = fopen('database/data.txt', 'r');
	$data = fread($fp2, filesize('database/data.txt'));
	//echo $data;
	// close file
	fclose($fp);
	fclose($fp2);

	echo $data;

} else {
	echo "Khong mo duoc file";
}