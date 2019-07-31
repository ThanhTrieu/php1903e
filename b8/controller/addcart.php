<?php 
// khoi dong session
session_start();

// nhung model
require '../model/cart_model.php';

$idPd = $_GET['id'] ?? '';
$idPd = is_numeric($idPd) ? $idPd : 0;

$infoPd = [];
$lstPd = getAllDataProduct();
foreach ($lstPd as $key => $val) {
	if($val['id'] == $idPd){
		$infoPd = $val;
	}
}

if($infoPd){
	// add vao gio hang
	// kiem tra gio hang ton tai chua
	if(isset($_SESSION['cart'])){
		// da ton tai gio hang
		// san pham them moi co ton tai trong gio hang hay chua?
		if(isset($_SESSION['cart'][$idPd])){
			// da ton tai san pham trong gio hang
			// cap nhat lai so luong trong gio hang
			$_SESSION['cart'][$idPd]['qty_pd'] += 1;
		} else {
			// san pham them moi chua co trong gio hang
			$_SESSION['cart'][$idPd]['name_pd'] = $infoPd['name'];
			$_SESSION['cart'][$idPd]['img_pd'] = $infoPd['image'];
			$_SESSION['cart'][$idPd]['price_pd'] = $infoPd['price'];
			$_SESSION['cart'][$idPd]['qty_pd'] = 1;
			$_SESSION['cart'][$idPd]['id_pd'] = $idPd;
		}
	} else {
		// chua ton tai gio hang
		// tao ra gio hang + dong thoi them moi luon san pham vao
		$_SESSION['cart'][$idPd]['name_pd'] = $infoPd['name'];
		$_SESSION['cart'][$idPd]['img_pd'] = $infoPd['image'];
		$_SESSION['cart'][$idPd]['price_pd'] = $infoPd['price'];
		$_SESSION['cart'][$idPd]['qty_pd'] = 1;
		$_SESSION['cart'][$idPd]['id_pd'] = $idPd;
	}

	header('Location:showcart.php');

} else {
	header("Location:../index.php");
}