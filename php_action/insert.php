<?php include('db_connection.php');?>
<html>
<body>
<form action="create.php" method="post">
    <p>First Name</p>
<input type="text" name="fname"><br><br>
<p>Last Name</p>
<input type="text" name="lname"><br><br>
<p>Age</p>
<input type="text" name="age"><br><br>
<p>Contact No.</p>
<input type="text" name="contact"><br><br>
<p>Email.</p>
<input type="email" name="mail"><br><br>
<p>Gender.</p>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="fmale">Female<br><br>
<input type="checkbox" name="role" value="admin">Admin
<input type="checkbox" name="role" value="subadmin">Sub Admin
<input type="checkbox" name="role" value="user">User<br><br>
<button type="submit">Submit</button> 
</form>
</body>
</html>