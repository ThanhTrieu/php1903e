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
						<?php foreach($cart as $key => $item): ?>
						<tr id="row_<?= $item['id_pd']; ?>">
							<td>
								<?= $item['id_pd']; ?>
							</td>
							<td><?= $item['name_pd']; ?></td>
							<td>
								<img src="<?= $item['img_pd']; ?>" alt="" width="120" height="120">
							</td>
							<td><?= number_format($item['price_pd']); ?></td>
							<td>
								<input type="number" value="<?= $item['qty_pd'] ?>" name="qty_pd">
							</td>
							<td>
								<?= number_format($item['price_pd'] * $item['qty_pd']); ?>
							</td>
							<td>
								<button class="btn btn-primary update">update</button>								
							</td>
							<td>
								<button class="btn btn-danger delete">Delete</button>
								<input type="hidden" class="idCart" value="<?= $item['id_pd']; ?>">
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js
" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			// bat su kien delete cart
			$('button.delete').click(function() {
				//alert('delete');
				let idCart = $(this).next().val().trim();
				if($.isNumeric(idCart)){
					// ajax
					$.ajax({
						url:"deleteCart.php",
						type: "POST",
						data: {id: idCart},
						success: function(data){
							data = $.trim(data);
							if(data === 'OK'){
								$('#row_'+idCart).hide();
							}
						}
					});
				}
			});

			// bat su kien update cart
			$('button.update').click(function() {
				let self = $(this);
				// lay ra duoc so luong tuong ung va id cart tuong ung
				let qty = $(this).parent().prev().prev().find('input[type=number]').val().trim();
				let idCart = $(this).parent().next().find('input[class=idCart]').val().trim();
				//console.log(qty, idCart);
				if($.isNumeric(qty) && $.isNumeric(idCart)){
					// ajax
					$.ajax({
						url: "updateCart.php",
						type: "POST",
						data: {id: idCart, qty: qty},
						success: function(data){
							data = $.trim(data);
							if(data !== 'ERR'){
								// gan lai money
								self.parent().prev().text(data);
							}
						}
					});
				}
			});
		});
	</script>

</body>
</html>