<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo CURL PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Don vi tien te" id="money">
				  <div class="input-group-append">
				    <span class="input-group-text" id="search">Tim kiem</span>
				  </div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div id="data"></div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			$('#search').click(function() {
				let money = $('#money').val().trim();
				let self = $(this); // $('#search') - global
				if(money){
					$.ajax({
						url: "controller/money.php",
						type: "POST",
						data: {money: money},
						beforeSend: function(){
							self.text('Loading ... ');
						},
						success: function(result){
							self.text('Tim kiem');
							$('#data').html(result);
						}
					});
				}
			});
		});
	</script>
</body>
</html>