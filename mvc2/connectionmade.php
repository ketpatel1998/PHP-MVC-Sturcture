<?php
	class DBconnection
	{
		function connect()
		{
			$conn = mysqli_connect("LocalHost","root","","dbmvc1");
			return $conn;
		}
	}
?>