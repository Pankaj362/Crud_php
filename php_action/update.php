<?php
require_once 'db_connection.php';
if($_POST){
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$age=$_REQUEST['age'];
$contact=$_REQUEST['contact'];
$mail=$_REQUEST['mail'];
$gender=$_REQUEST['gender'];
$roll=$_REQUEST['roll'];
$id=$_REQUEST['id'];
$sql="UPDATE members SET id='$id',fname='$fname',lname='$lname',contact='$contact',age='$age',mail='$mail',gender='$gender',roll='$roll' WHERE id={$id}";
//print_r($sql); die;   
if($connect->query($sql)===TRUE){

        echo "<p>Succcessfully Updated</p>";
       echo "<a href='edit.php?id=".$id."'><button type='button'>Back</button></a>";
       echo "<a href='view.php'><button type='button'>Home</button></a>";

    }
}
?>  