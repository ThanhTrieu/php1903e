<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>shopping cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
				<table class="table table-hover table-striped">
					<caption>Gio hang</caption>
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Image</th>
							<th>Price</th>
							<th>QTY</th>
							<th>Money</th>
							<th colspan="2" width="5%" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($products as $key => $item): ?>
						<tr>
							<td><?= $item['id']; ?></td>
							<td><?= $item['name']; ?></td>
							<td>
								<img src="<?= $item['image']; ?>" alt="" width="120" height="120">
							</td>
							<td><?= number_format($item['price']); ?></td>
							<td>
								<?= $item['qty'] ?>
							</td>
							<td>
								<?= number_format($item['price'] * $item['qty']); ?>
							</td>
							<td>
								<a href="controller/addcart.php?id=<?= $item['id']; ?>" class="btn btn-primary">Add cart</a>
							</td>
							<td>
								<a href="#" class="btn btn-success"> Buy now</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>