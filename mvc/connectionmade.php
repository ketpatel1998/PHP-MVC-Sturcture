<?php
	class Dbconnection
	{
		function connect()
		{
			$connection = mysqli_connect("LocalHost","root","","dbmvc1");	
			return $connection;
		}
	}
?>