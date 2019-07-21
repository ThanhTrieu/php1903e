<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo send data method GET</title>
</head>
<body>
	<h1>Demo send data method GET</h1>
	<a href="index2.php?age=20&name=abc&add=HaNoi"> Send Data to index2</a>
	<br><br>
	<form action="server/login.php" method="get">
		<label for="user"> User</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="pass"> Password</label>
		<input type="password" name="pass" id="pass">
		<br><br>
		<button name="login" type="submit"> Login</button>
	</form>

	<br><br>
	<h3>Loin form with method post</h3>
	<form action="server/login_post.php" method="post">
		<label for="user"> User</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="pass"> Password</label>
		<input type="password" name="pass" id="pass">
		<br><br>
		<button name="login" type="submit"> Login</button>
	</form>
</body>
</html>