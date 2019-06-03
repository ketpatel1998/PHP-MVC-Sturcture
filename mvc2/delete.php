<?php
	
	require("dao.php");
	$da = new Dao();
	extract($_GET);
	$j = "id = ".$id;
	$q1 = $da->delete("regform2",$j);
	//$q = "DELETE FROM tbl_userinfo where user_id = '$id'";

	//$q1 = mysqli_query($try,$q);

	if($q1>0)
	{
		header("Location:showuserdata.php");
	}
	else
	{
		echo "Data is not deleted";
	}
?>