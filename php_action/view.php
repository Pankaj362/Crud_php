

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}
		.bttn{height:200px;width:200px}
	</style>

</head>
<body>
<div class="bttn">
<a href="insert.php"><button>Create New Field</buttion></a>
</div>
<div class="manageMember">
	
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Role</th>
				<th>edit</th>
				<th>delete</th>
				
			</tr>
		</thead>
		<tbody>
<?php

include('db_connection.php');
$sql = "SELECT * FROM members ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array()) {
	?>	
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['fname'];?></td>
		<td><?php echo $row['lname'];?></td> 
		<td><?php echo $row['age'];?></td>
		<td><?php echo $row['contact'];?></td>
		<td><?php echo $row['mail'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['role'];?></td>

<td><a href='edit.php?id=<?php echo $row['id'] ?>'> Edit </a> </td>
<td><a href='delect.php?id=<?php echo $row['id'] ?>'> Delect </a> </td>

	</tr>
<?php
    }
} 
else {
    echo "0 results";
}

$connect->close();
?>

			
		</tbody>
	</table>
</div>

</body>
</html>
