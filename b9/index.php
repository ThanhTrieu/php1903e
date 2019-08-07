<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo send mail php</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
				<h1 class="text-center"> Send mail php</h1>
				<form class="border mt-3 p-3" action="server/sendmail.php" method="POST">
					<div class="form-group">
						<label for="email"> Email</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
					<div class="form-group">
						<label for="subject"> Subject</label>
						<input type="text" class="form-control" name="subject" id="subject">
					</div>
					<div class="form-group">
						<label for="content"> Content</label>
						<textarea name="content" id="content" class="form-control" rows="5"></textarea>
					</div>
					<button type="submit" name="btnSendmail" class="btn btn-primary"> Send </button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>