<?php
// send mail su dung thu vien phpmailer
// nhung thu vien phpmailer
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// goi thu vien de su dung chung
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['btnSendmail'])){
	$email = $_POST['email'] ?? '';
	$email = strip_tags($email);

	$subject = $_POST['subject'] ?? '';
	$subject = strip_tags($subject);

	// khong dung strip_tags -  de send noi dung HTML
	$content = $_POST['content'] ?? '';

	// khoi tao doi tuong cho class phpmailer
	$mail = new PHPMailer(true);

	try {
		//Server settings
	    // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
	    
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'trieuntgvt3h@gmail.com';                     // SMTP username
	    $mail->Password   = 'trieunt123';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    $mail->setFrom('trieuntgvt3h@gmail.com', 'NguyenThanhTrieu');
	    $mail->addAddress($email);
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');
	    
	    // Attachments
	    $mail->addAttachment('image/test.jpg');         // Add attachments
	    $mail->addAttachment('image/test.jpg', 'send-file.png');    // Optional name

	     // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $subject;
	    $mail->Body    = $content;

	    if($mail->send()){
	    	header('Location:../index2.php?state=success');
	    } else {
	    	header('Location:../index2.php?state=fail');
	    }

	} catch (Exception $e) {
		// show error khi khong the send dc email
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}



