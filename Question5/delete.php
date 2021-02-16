<?php
include ('config.php');
$id=$_GET['id'];
$sql="DELETE from `users` WHERE id=$id";
if(mysqli_query($conn,$sql))
{
    header("Location:showdataintable.php");
}
else
{
    echo "Deletion failed";
}
?>