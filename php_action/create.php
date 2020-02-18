<?php
include 'db_connection.php';
if($_POST)
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $age=$_POST['age'];
    $mail=$_POST['mail'];
    $gender=$_POST['gender'];
    $role=$_POST['role'];

    $str_arr=implode('',$role);
    $contact=$_POST['contact'];
    $sql="SELECT * FROM members WHERE mail='$mail'";
    $result=$connect->query($sql);
    if($result->num_rows > 0)
    {
    
        $msg="Sorry.... Email already taken";
        echo "<script type='text/javascript'>alert('$msg'); </script>";
    }
    else{
    $sql="INSERT INTO members (fname,lname,contact,age,mail,gender,role)VALUES('$fname','$lname','$contact',$age,'$mail','$gender','$str_arr')";
    if($connect->query($sql)===TRUE)
    {
        echo "<p>New Record Successfully Created</p>";
        //echo "<a href='../create.php'><button type='button'">;
        echo "";
        header('Location:view.php');
        }
    else
    {
        echo "Error" . $sql.' ' .$connect->connect_error;
    
    }
    $connect->close();
}
}
?>
<button><a href="insert.php">Back</a></button>