<?php
	include_once "connectionmade.php";
	include_once "interface1.php";
	class Dao implements interface1{
		private $conn;
		function __construct()
		{
			$db = new DBconnection();
			$this->conn = $db->connect();
		}
		function insert($table,$value)
		{
			$field = "";
			$val = "";
			$i = 0;
			foreach ($value as $k => $v) {
				# code...
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
			return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES ($val)") or die(mysqli_error($this->conn));
		}
		function select($table,$where="")
		{
			if($where!="")
			{
				$where = "where ".$where;
			}

			$se = mysqli_query($this->conn,"SELECT * FROM $table $where") or die(mysqli_error($this->conn));
			return $se;
		}
		function update($table,$value,$where="")
		{
			if($where!="")
			{
				$where = "where ".$where;
			}
			$val = "";
			$i=0;
			foreach ($value as $k => $v) {
				# code...
				if($i==0)
				{
					$val.=$k."='".$v."'";
				}
				else
				{
					$val.=",".$k."='".$v."'";
				}
				$i++;
			}
			return mysqli_query($this->conn,"UPDATE $table SET $val $where");
		}
		function delete($table,$where="")
		{
			if($where != "")
			{
				$where = "where ".$where;
			}
			return mysqli_query($this->conn,"DELETE FROM $table $where");
		}

	}

?>