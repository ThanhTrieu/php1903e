<?php 
if(isset($_POST['btnUpload'])){
	if(isset($_FILES['avatar'])){
		// duyet qua tat cac cac file dc upload len
		$flagUpload = false;
		$viewFile = '';
		foreach ($_FILES['avatar']['error'] as $key => $file) {
			if($file == 0){
				// thoa man khong file nao co loi
				// lay ra ten tung file

				$nameFile = $_FILES['avatar']['name'][$key];
				$tmp_name = $_FILES['avatar']['tmp_name'][$key];
				// upload
				$flagUpload = move_uploaded_file($tmp_name,'../uploads/images/'.$nameFile);
				$viewFile .= ($viewFile == '') ? $nameFile : ',' . $nameFile;
				/*
				if(!$flagUpload){
					//unlink('../uploads/images/'.$nameFile);
					break;
				}
				*/
			}
			/*
			else {
				break;
			}
			*/
		}
		if($flagUpload){
			header("Location:../form-upload-v2.php?state=success&name={$viewFile}");
		} else {
			header("Location:../form-upload-v2.php?state=fail");
		}
	}
}