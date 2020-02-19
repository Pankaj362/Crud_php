<?php
require_once 'db_connection.php';
if($_POST){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$contact=$_POST['contact'];
$mail=$_POST['mail'];
$gender=$_POST['gender'];
$roll['roll'];
$id=$_POST['id'];
$sql="UPDATE members SET id='$id',fname='$fname',lname='$lname',contact='$contact',age='$age',mail='$mail',gender='$gender',roll='$roll' WHERE id={$id}";
//print_r($sql); die;   
if($connect->query($sql)===TRUE){

        echo "<p>Succcessfully Updated</p>";
       echo "<a href='edit.php?id=".$id."'><button type='button'>Back</button></a>";
       echo "<a href='view.php'><button type='button>Home</button>";

    }
}
?>  