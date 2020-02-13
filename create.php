<?php
include 'db_connection.php';
if($_POST)
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$POST['contact'];
    $age=$POST['age'];

    $sql="INSERT INTO members (fname,lname,contact,age)VALUES('$fname','$lname','$contact',$age)";
    if($connect->query($sql)===TRUE)
    {
        echo "<p>New Record Successfully Created</p>";
        //echo "<a href='../create.php'><button type='button'">;
        echo "";
    }
    else
    {
        echo "Error" . $sql.' ' .$connect->connect_error;
    
    }
    $connect->close();
}

?>