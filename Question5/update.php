<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql="SELECT * FROM `users` WHERE `id`=$id";
$result=mysqli_query($conn,$sql);
$row= $result->fetch_assoc();
$username=$row['username'];
$email=$row['email'];
$gender=$row['gender'];
$city=$row['city'];
?>

<?php
if(isset($_POST['update']))
{
    $username= $_POST['username'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $city= $_POST['city'];
    $sql="UPDATE `users` SET username='$username',email='$email',gender='$gender',city='$city' WHERE ID='$id' ";
    if(mysqli_query($conn,$sql))
    {
        echo "Data Updated Successfully......";
        header("Location:showdataintable.php");
    }
    else
    {
        echo "Updated failed....";
    }
}
?>



<!DOCTYPE html>
<head>
<title>
Forms
</title>
</head>
<body>
<form method="POST" action="update.php?id=<?php echo "$id"?>">
USERNAME <input type="text" name="username" value="<?php echo "$username"?>" placeholder="Enter your username" required><br><br>
E-MAIL<input type="email" name="email" value="<?php echo "$email"?>" placeholder="Type your email" required><br><br>
<input type="radio" name="gender" value="male" required <?php if($gender=="male") echo "checked"?>/>Male
<input type="radio" name="gender" value="female" required <?php if($gender=="female") echo "checked"?>/>Female
<select name="city" value=<?php echo "$city"?>>
     <br>
     Select your city
        <option value="Rishikesh" <?php if($city=="Rishikesh"){echo "selected";}?>>Rishikesh</option>
        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>Delhi</option>
        <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
</select>
<br>
<br>
<input type="submit" name="update" value="Click here to update your data">
</form>
</body>
</html>