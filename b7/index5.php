<?php
session_start();
// xoa session
// xoa all
//session_destroy();
// xoa tung session
if(isset($_SESSION['myName'],$_SESSION['myAge'], $_SESSION['myWork'])) {
	unset($_SESSION['myName']);
	unset($_SESSION['myAge']);
	unset($_SESSION['myWork']);
}
?>
<a href="index4.php"> Goto index 4</a>