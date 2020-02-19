

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
		
	echo"<tr>
		<td>".$row['fname']."</td>
		<td>".$row['lname']."</td> 
		<td>".$row['age']."</td>
		<td>".$row['contact']."</td>
		<td>".$row['mail']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['roll']."</td>

<td><a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a></td>
<td><a href='delect.php?id=".$row['id']."'><button type='button'>Delete</button></a></td>

	</tr>";
  }
} 
else {
    echo "0 results";
}

?>

			
		</tbody>
	</table>
</div>

</body>
</html>
