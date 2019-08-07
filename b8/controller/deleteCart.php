<?php
session_start();

$id = $_POST['id'] ?? '';
$id = is_numeric($id) ? $id : 0;
// xoa gio hang

if(isset($_SESSION['cart'][$id])){
	unset($_SESSION['cart'][$id]);
	echo "OK";
} else {
	echo "ERR";
}
