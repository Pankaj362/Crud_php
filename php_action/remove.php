<?php
require_once 'db_connection.php';
if($_POST){
    $id=$_POST['id'];
$sql="DELETE FROM members WHERE id={$id}";
if($connect->query($sql)===TRUE){
echo "<p>Successfully removed!!</p>";
echo "<a href='view.php'><button type='button'>Back</button></a>";
}
else
{
    echo "Error   :".$connect->error;
}
}
?>