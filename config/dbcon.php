<?php
$hostname="localhost";
$username="root";
$password="";
$database="phpecom";

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die('Connection Failed :'.mysqli_connect_error());
}

?>