<?php

include_once 'connectionmade.php';
include_once 'interface1.php';

class dao implements interface1{
	private $conn;
	function __construct()
	{
		$db = new Dbconnection();
		$this->conn=$db->connect();
	}

	function insert($table,$value)
	{
		$field ="";
		$val = "";
		$i = 0;
		foreach($value as $k => $v)
		{
			$v = str_replace("'","",$v);
			if($i == 0)
			{
				$field.=$k;
				$val.="'".$v."'";
			}
			else
			{
				$field.=",".$k;
				$val.=",'".$v."'";
			}
			$i++;
		}
		return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->conn));

	}
}
?>