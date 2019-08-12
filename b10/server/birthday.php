<?php
if(isset($_POST['btnBirthday'])){
	$birthday = $_POST['birthday'] ?? '';
	// can kiem tra ngay sinh nhat voi ngay hien tai xem co su chenh lech nhu the nao
	$arrBirthday = explode('-', $birthday);
	$monthBrithday = $arrBirthday[1] ?? '';
	$dateBrithday  = $arrBirthday[2] ?? '';
	$currentYear = date('Y');

	$strBrithday = $currentYear . '-' . $monthBrithday . '-' . $dateBrithday;

	if(checkdate($monthBrithday, $dateBrithday, $currentYear)){
		// so sanh voi ngay hien tai
		$today = date('Y-m-d');
		$timeBrithday = strtotime($strBrithday);
		$timeToday = strtotime($today);

		if($timeBrithday > $timeToday){
			// chua toi sinh nhat - can tinh ra so ngay
			$ranTime = $timeBrithday - $timeToday;
			// ceil
			$days = ceil($ranTime/86400);
			header("Location:../index2.php?state=waiting&days={$days}&date={$strBrithday}");

		} elseif($timeBrithday == $timeToday){
			header("Location:../index2.php?state=happy&date={$strBrithday}");
		} else {
			header("Location:../index2.php?state=pass&date={$strBrithday}");
		}
	} else {
		// chua chon ngay thang nam sinh
		header("Location:../index2.php?state=fail");
	}

}