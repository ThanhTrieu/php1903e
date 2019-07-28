<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo multi upload file</title>
</head>
<body>
	<?php 
		$state = $_GET['state'] ?? '';
		$files = $_GET['name'] ?? '';
		$arrImg = [];
		if($state === 'success' && $files){
			$arrImg = explode(',', $files);
		}
	?>
	<h1>Uplaod file php</h1>
	<form action="server/upload-v2.php" method="post" enctype="multipart/form-data">
		<label for="avatar"> Moi chon file</label>
		<input type="file" id="avatar" name="avatar[]" multiple="multiple">
		<br><br>
		<button type="submit" name="btnUpload"> Upload </button>
	</form>

	<?php foreach($arrImg as $key => $img): ?>
		<img src="uploads/images/<?= $img; ?>" width="80" height="80">
	<?php endforeach; ?>
</body>
</html>