<html>
<body>
<style>
fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
</style>
<fieldset>
<legend>Add Member</legend>
<form action="php_action/create.php" method="post">
<table>
<tr>
<th>First Name:</th>
<td><input type="text" name="fname" placeholder="First Name"></td>
</tr>
<tr>
<th>Last Name:</th>
<td><input type="text" name="lname" placeholder="Last Name"></td>
</tr>
<tr>
<th>Contact No:</th>
<td><input type="text" name="contact" placeholder="Contact No"></td>
</tr>
<tr>
<th>Age:</th>
<td><input type="text" name="age" placeholder="Age"></td>
</tr>
<tr>
<th>Gender:</th>
<td><input type="radio" name="gender" value="male"></td>
<td><input type="radio" name="gender" value="fmale"></td>
</tr>
<tr>
<td><button type="submit">Save Change</button></td>
<td><a href="create.php"><button type="button">Back</button></a></td>
</tr>

</table>
</form>
</fieldset>
</body>
</html>