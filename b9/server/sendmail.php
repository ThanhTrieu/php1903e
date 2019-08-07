<?php
if(isset($_POST['btnSendmail'])){
	$email = $_POST['email'] ?? '';
	$email = strip_tags($email);

	$subject = $_POST['subject'] ?? '';
	$subject = strip_tags($subject);

	// khong dung strip_tags -  de send noi dung HTML
	$content = $_POST['content'] ?? '';

	// kiem tra du lieu
	if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($subject) && !empty($content)){

		$header = "From:trieuntgvt3h@gmail.com \r\n"; 
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n"; 

		$send = mail($email, $subject, $content, $header);
		if($send){
			header("Location:../index.php?state=success");
		} else {
			header("Location:../index.php?state=error");
		}

	} else {
		header("Location:../index.php?state=fail");
	}
}