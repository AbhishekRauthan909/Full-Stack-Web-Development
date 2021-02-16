<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="web";
$conn=mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
    echo "connection successfull";
}
else
{
    echo "connection failed";
}
?>