<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="php_crud";

//create conntection

$connect=new mysqli($localhost,$username,$password,$dbname);

//Check the connection

if($connect->connect_error)
{
    die("Connection Failed : ".$connect->connect_error);
}
    else
    {
        //echo "Successfully Connected";
    }
?>