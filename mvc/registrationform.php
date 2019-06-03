<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		#d1{
			padding: 20px;
			border:1px solid black;
		}
		#d2{
			margin-left:  510px;
		}
		h3{
			margin-left: 40px;
		}
		input{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div id="d1">
		<div id="d2">
			<h3>Registration Form</h3>
		<form action="controller.php" method="POST" enctype="multipart/form-data">
			Name : <input type="text" id="txtname" name="nmtxtname"><br>
			Email : <input type="email" id="txtemail" name="nmtxtemail"><br>
			Phone : <input type="phone" id="txtphone" name="nmtxtphone"><br>
			Gender : <input type="radio" value="M" checked="checked" name="nmtxtgender">Male
					<input type="radio" value="F" name="nmtxtgender">Female<br>
			Address : <textarea style="margin-top:10px;" id="txtaddress" name="nmtxtaddress"></textarea><br>
			Password : <input type="password" required name="nmpassword"><br>
			Confirm-Password : <input type="password" required name="nmconfirmpassword"><br>
			State : <select style="margin-top: 10px;" name="nmtxtstate">
							<option>Select</option>
							<option>Gujarat</option>
							<option>Delhi</option>
							<option>Mumbai</option>
							<option>Rajasthan</option>
							<option>Tamil Nadu</option>
					</select><br>
			Hobbies : <input type="checkbox" value="Gaming" name="hob[]">Gaming
					<input type="checkbox" value="Playing" name="hob[]">Playing
					<input type="checkbox" value="Reading" name="hob[]">Reading
					<input type="checkbox" value="Programming" name="hob[]">Programming<br>
			<input type="submit" name="nmbtnsubmit">
		</form>
		</div>
	</div>
</body>
</html>