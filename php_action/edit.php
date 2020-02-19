<?php

include('db_connection.php');
$sql = "SELECT * FROM members ";
$result = $connect->query($sql);

if($_GET['id']) {
    $id=$_GET['id'];
    
$sql="SELECT * FROM members WHERE id={$id}";
$result=$connect->query($sql);
$row = $result->fetch_assoc() ;
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
                <td><input type="text" name="age" placeholder="Age" value="<?php echo $row['age'];?>"></td>
     <tr>           
                <th>Email:</th>
                <td><input type="email" name="mail" placeholder="Email" value="<?php echo $row['mail'];?>"></td>
    </tr>
    <tr>
                 <th>Gender:</th>
                <td><input type="radio" name="gender"value="male" <?php if($row['gender']=="male") {echo "checked";}?>/> Male
                <input type="radio" name="gender" value="fmale" <?php if( $row['gender']=="fmale") {echo "checked";}?>/> Female</td>
    </tr>
    <?php 	$a=$row['roll'];
				$role=explode(",",$a);
	?>
			<tr>
				<th>roles</th> 
				<td><input <?php if(in_array("Admin",$role)){echo "checked";}?> type="checkbox" name="$role[]" value="Admin"/>Admin</td>
				<td><input <?php if(in_array("Subadmin",$role)){echo "checked";}?> type="checkbox" name="$role[]" value="Subadmin"/>subadmin</td>
				<td><input <?php if(in_array("User",$role)){echo "checked";}?> type="checkbox" name="$role[]" value="User"/>user</td>
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
<?php
}
?>