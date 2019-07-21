<?php 
	$products = [
		[
			'id' => 1,
			'price' => 1000,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/201228/samsung-galaxy-a80-gold-400x400.jpg',
			'qty' => 10,
			'name' => 'iphone 8'
		],
		[
			'id' => 2,
			'price' => 800,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/202268/TimerThumb/huawei-y9-prime-2019-hpbd.jpg',
			'qty' => 8,
			'name' => 'samsung A3 '
		],
		[
			'id' => 3,
			'price' => 500,
			'image' => 'https://cdn.tgdd.vn/Products/Images/42/114115/TimerThumb/iphone-x-64gb-hpbd.jpg',
			'qty' => 5,
			'name' => 'samsung J7'
		]
	];

	// can bat lay cai id cua phan tu trang index4.php
	$idPd = $_GET['id'] ?? '';
	$idPd = is_numeric($idPd) ? $idPd : 0;
	$infoPd = [];
	foreach ($products as $key => $val) {
		if($val['id'] == $idPd){
			$infoPd = $val;
		}
	}
	// echo "<pre>";
	// print_r($infoPd);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail product</title>
	
</head>
<body>
	<?php if($infoPd): ?>
		<div>
			<img src="<?= $infoPd['image']; ?>">
			<p>Name : <?= $infoPd['name']; ?></p>
			<p>Price: <?= number_format($infoPd['price']); ?></p>
		</div>
	<?php else: ?>
		<h3>Khong tim thay san pham</h3>
	<?php endif; ?>
</body>
</html>


