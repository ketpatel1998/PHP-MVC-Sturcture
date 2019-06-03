<?php
	
	require("dao.php");
	
	$d = new Dao();

?>

<!DOCTYPE html>
<html>
<head>
	<title>All Entry Of Table</title>
	<style type="text/css">
		table,tr,td,th{
			border-collapse: collapse;
			text-align: center;
			border:1px solid black;
			padding: 5px;
			margin-bottom: 10px;

		}
	</style>
</head>
<body>
	<table>
		<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Address</th>
		<th>State</th>
		<th>Hobbies</th>
		<th>Mode</th>
		</tr>
		<?php
			$data=$d->select("regform2");
			//$q = "select * from tbl_userinfo";
			//$data = mysqli_query($try,$q);
			$i = 0;
			while($result=mysqli_fetch_array($data))
			{

				$i++;
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $result["name"]; ?></td>
			<td><?php echo $result["email"]; ?></td>
			<td><?php echo $result["phone"]; ?></td>
			<td><?php echo $result["gender"];?></td>
			<td><?php echo $result["address"]; ?></td>
			<td><?php echo $result["state"]; ?></td>
			<td><?php echo $result["interest"]; ?></td>
			<td><a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
				<a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
		</tr>
		<?php
			}
		?>
	</table>
	<a href="delete_multiple.php">Would you like to delete multiple pages?</a>
</body>
</html>