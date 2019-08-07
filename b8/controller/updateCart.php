<?php
session_start();

$id = $_POST['id'] ?? '';
$id = is_numeric($id) ? $id : 0;

$qty = $_POST['qty'] ?? '';
$qty = (is_numeric($qty) && $qty > 0 && $qty < 10) ? $qty : 1;

// update gio hang
if(isset($_SESSION['cart'][$id])){
	// chi cho update so luong
	$_SESSION['cart'][$id]['qty_pd'] = $qty;
	// tien lai tien
	$money = $qty * $_SESSION['cart'][$id]['price_pd'];

	echo number_format($money);
} else {
	echo "ERR";
}