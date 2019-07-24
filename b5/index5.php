<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Ajax - Jquery</title>
</head>
<body>
	<div>
		<input id="txtKeyword" type="text" placeholder="nhap ten nghe sy hoac ma nghe sy">
		<button type="button" id="btnSearch"> Tim Kiem</button>
		<img id="loading" style="display: none;" src="img/tenor.gif" width="30" height="30">
		<br><br>
		<!-- do du lieu tu server ajax vao day -->
		<div id="content"></div>
	</div>
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	<script type="text/javascript">
		$(function(){
			// bat su kien click cho button
			$('#btnSearch').click(function(){
				// lay du lieu ma nguoi dung nhap vao o text
				let keyword = $('#txtKeyword').val().trim();
				//alert(keyword);
				if(keyword.length > 0){
					// tien hanh gui du  lieu bang ajax
					$.ajax({
						url: "server/ajax.php",
						// url ~~ action cua form
						type: "post",
						// type ~~ method cua form
						data: {key : keyword},
						// ben phia serve se nhan thong key cua object data
						beforeSend: function(){
							// truoc khi cho doi ket tra ve thong bao cho nguoi dung la dang lam cai gi do
							// hien thi anh loading data
							$('#loading').show();
						},
						success: function(result){
							// ham cho doi ket qua tu server tra ve
							// an anh loading data
							$('#loading').hide();
							// ket qua ben phia server tra ve se duoc luu vao "result"
							$('#content').html(result);
						}
					});
				} else {
					alert('Vui long nhap tu khoa');
				}
			});
		});
	</script>
</body>
</html>