<?php

	require("connectionmade.php");
	extract($POST);

	if(isset($_POST['nmbtnupdate']))
	{

		$hobbi = implode(",", $_POST['hob']);

		$id = $_POST["nmtxtid"];

		$name = $_POST["nmtxtname"];
		$email = $_POST["nmtxtemail"];
		$phone = $_POST["nmtxtphone"];
		$gender = $_POST["nmtxtgender"];
		$address = $_POST["nmtxtaddress"];
		$state = $_POST["nmtxtstate"];
		
		$q3 = "UPDATE tbl_userinfo SET 
		name = '$name',email = '$email',phone = '$phone',gender = '$gender',address = '$address',state = '$state',hobbies = '$hobbi' WHERE user_id = $id";
		$data = mysqli_query($try,$q3);
		if($data>0)
		{
			header("Location:showuserdata.php");
		}
		else
		{
			echo "Data is not Updated.";
		}
		exit();
	}


?>