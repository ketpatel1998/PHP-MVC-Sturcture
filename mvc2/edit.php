<?php

	
	require("dao.php");
	$da = new Dao();
	extract($_GET);
	$j = "id = ".$id;

	$data = $da->select("regform2",$j);
	//$q1 = "SELECT * FROM regform2 WHERE id = '$id'";

	//$data = mysqli_query($try,$q1);
	$result = mysqli_fetch_array($data);



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="d1">
		<div id="d2">
			<h3>Updation Form</h3>
		<form action="controller.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $id; ?>" name="nmtxtid">
			Name : <input type="text" value="<?php echo $result["name"]; ?>" id="txtname" name="nmtxtname"><br>
			Email : <input type="email" value="<?php echo $result["email"]; ?>" id="txtemail" name="nmtxtemail"><br>
			Phone : <input type="phone" value="<?php echo $result["phone"]; ?>" id="txtphone" name="nmtxtphone"><br>
			Gender : <input type="radio" value="M" <?php if($result['gender']=="M"){ echo "checked";}?> name="nmtxtgender">Male
					<input type="radio" value="F" <?php if($result['gender']=="F"){ echo "checked";}?> name="nmtxtgender">Female<br>
			Address : <textarea style="margin-top:10px;" id="txtaddress"  value="<?php echo trim($result['address']); ?>" name="nmtxtaddress"></textarea><br>
			State : <select style="margin-top: 10px;" name="nmtxtstate">
							<option  value="<?php echo $result['state'];?>" ><?php echo $result['state'];?></option>
							<option>Gujarat</option>
							<option>Delhi</option>
							<option>Mumbai</option>
							<option>Rajasthan</option>
							<option>Tamil Nadu</option>
					</select><br>
					<?php
						$chk = $result['interest'];
						$in = explode(',', $chk)
					?>
			Hobbies : <input <?php if(in_array("Gaming", $in)){echo "checked";}?> type="checkbox" value="Gaming" name="hob[]">Gaming
					<input <?php if(in_array("Playing", $in)){echo "checked";}?> type="checkbox" value="Playing" name="hob[]">Playing
					<input <?php if(in_array("Reading", $in)){echo "checked";}?> type="checkbox" value="Reading" name="hob[]">Reading
					<input <?php if(in_array("Programming", $in)){echo "checked";}?> type="checkbox" value="Programming" name="hob[]">Programming<br>
			<input type="submit" value="Update" name="nmbtnupdate">
		</form>
		</div>
	</div>
</body>
</html>