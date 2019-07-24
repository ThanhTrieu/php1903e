<?php
// kiem tra xem nguoi dung da upload file chua?
// xem co method post gui len ko?
define('UPLOAD_PATH', '../uploads/images/');

if(isset($_POST['btnUpload'])){
	// kiem tra xem nguoi co chon file hay ko?
	if(isset($_FILES['avatar'])){
		// kiem tra thong tin
		// $_FILES: la bien toan cuc luu tru thong tin ve file gui len server - bien kieu mang

		//kiem tra file co loi ko
		if($_FILES['avatar']['error'] == 0){
			// file ko co loi
			// lay ra ten file
			$nameFile = $_FILES['avatar']['name'];
			// duong dan tam thoi dang chua file
			$tmp = $_FILES['avatar']['tmp_name'];
			// upload file
			// kiem tra phai la anh : gif,png,jpg,jepg va anh kich thuoc ko qua 3M
			$typeFile = $_FILES['avatar']['type'];
			$sizeFile = $_FILES['avatar']['size'];

			if(checkTypeFile($typeFile)) {
				if(checkSizeFile($sizeFile)) {
					$up = move_uploaded_file($tmp, UPLOAD_PATH . $nameFile);
					if($up){
						header("Location:../form-upload.php?state=success&file={$nameFile}");
					} else {
						header("Location:../form-upload.php?state=error");
					}
				} else {
					header("Location:../form-upload.php?state=errsize");
				}
			} else {
				header("Location:../form-upload.php?state=errtype");
			}

		} else {
			header("Location:../form-upload.php?state=fail");
		}
	}
}

function checkTypeFile($typeFile){
	$arrImgAllow = ['image/png','image/gif','image/jpg','image/jpeg'];
	if(in_array($typeFile, $arrImgAllow )){
		return true;
	}
	return false;
}

function checkSizeFile($sizeFile){
	// $sizeFile : byte
	// 3M = ??? byte
	$maxSize = 3 * 1024 * 1024;
	if($sizeFile < $maxSize){
		return true;
	}
	return false;
}





