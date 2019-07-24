<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo upload file php</title>
</head>
<body>
	<?php
	$state = $_GET['state'] ?? '';
	$nameFile = $_GET['file'] ?? '';
	?>

	<?php if($state === 'fail'): ?>
		<h3 style="color: red;">File bi loi khong the upload</h3>
	<?php endif; ?>

	<?php if($state === 'error'): ?>
		<h3 style="color: red;">Co loi xay ra khi upload</h3>
	<?php endif; ?>

	<?php if($state === 'success' && $nameFile): ?>
		<img src="uploads/images/<?= $nameFile; ?>" alt="">
	<?php endif; ?>

	<form action="server/upload.php" method="post" enctype="multipart/form-data">
		<label for="avatar"> Moi chon file</label>
		<input type="file" name="avatar" id="avatar">
		<br>
		<button type="submit" name="btnUpload"> Upload </button>
	</form>
</body>
</html>