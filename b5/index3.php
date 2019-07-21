<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo php</title>
	
</head>
<body>
	<?php 
		// xu ly nhan ket qua tu server/number.php tra ve
		$state = $_GET['state'] ?? '';
		$n1 = $_GET['n1'] ?? '';
		$n2 = $_GET['n2'] ?? '';
		$kq = $_GET['result'] ?? '';
	?>

	<?php if($state === 'fail'): ?>
		<h6 style="color: red">Vui long nhap du lieu la so</h6>
	<?php endif; ?>

	<form action="server/number.php" method="post">
		<label for="hs1"> number 1</label>
		<input type="text" name="number1" id="hs1" value="<?= $n1; ?>">
		<br><br>
		<label for="hs2"> number 2</label>
		<input type="text" name="number2" id="hs2" value="<?= $n2; ?>">
		<br><br>
		<button name="sum" type="submit"> Sum </button>
	</form>
	<?php if($state === 'ok'): ?>
		<h3>Ket Qua: <?= $kq; ?></h3>
	<?php endif; ?>
</body>
</html>