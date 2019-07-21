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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show products</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table width="100%" border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>MSP</th>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>QTY</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $key => $item): ?>
			<tr>
				<td>
					<?php echo $item['id']; ?>
				</td>
				<td>
					<a href="detail.php?id=<?= $item['id']; ?>">
						<img src="<?= $item['image']; ?>" width="80" height="80">
					</a>
				</td>
				<td>
					<a href="detail.php?id=<?= $item['id']; ?>">
						<?= $item['name']; ?>
					</a>
				</td>
				<td>
					<?= number_format($item['price']); ?>
				</td>
				<td>
					<?= $item['qty']; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>