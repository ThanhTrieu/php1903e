<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Funny birthday</title>
</head>
<body>
	<?php
		$state = $_GET['state'] ?? '';
		$days  = $_GET['days'] ?? '';
		$date = $_GET['date'] ?? '';
	?>
	<?php if($state === 'waiting'): ?>
		<h4>Chua toi sinh nhat - con <?= $days ?> ngay nua</h4>
	<?php elseif($state === 'happy'): ?>
		<h4>Chuc mung sinh nhat</h4>
	<?php elseif($state === 'pass'): ?>
		<h4>Sinh nhat ban qua roi</h4>
	<?php endif; ?>

	<form action="server/birthday.php" method="post">
		<label for="birthday"> Nhap ngay sinh cua ban</label>
		<input type="date" name="birthday" id="birthday" value="<?= $date; ?>">
		<br><br>
		<button type="submit" name="btnBirthday">Kiem tra</button>
	</form>
</body>
</html>