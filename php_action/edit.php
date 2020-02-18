<?php

include('db_connection.php');
$sql = "SELECT * FROM members ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$row = $result->fetch_array() ;

    
} 
else {
    echo "0 results";
}

$connect->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Member</legend>

	<form action="update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
                <th>First Name:</th>
                <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $row['fname'];?>"></td>
    </tr>
    <tr>
                 <th>Last Name:</th>
                <td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $row['lname']?>"></td>
    </tr>
    <tr>
                 <th>Contact No:</th>
                <td><input type="text" name="contact" placeholder="Contact No" value="<?php echo $row['contact'];?>"></td>
    </tr>
    <tr>
                 <th>Age:</th>
                <td><input type="text" name="age" placeholder="Age" <?php echo $row['age'];?>></td>
                <th>Email:</th>
                <td><input type="email" name="mail" placeholder="Email" <?php echo $row['mail'];?>></td>
    </tr>

    </tr>
    <tr>
				<input type="hidden" name="id" value="<?php echo $row['id']?>" />
                <td><input type="submit" value="Save Changes"></td>
    </tr>
		</table>
	</form>

</fieldset>

</body>
</html>
