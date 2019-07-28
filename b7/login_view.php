<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Login</title>
	
</head>
<body>
	<h1>Login </h1>
	<form action="server/login.php" method="post">
		<label for="user"> Username </label>
		<input type="text" id="user" name="user">
		<br><br>
		<label for="pass"> Password </label>
		<input type="password" id="pass" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>