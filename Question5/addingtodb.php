<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];    
    $sql="INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";         
    mysqli_query($conn,$sql);
}
else
{

    echo "Please add some details and then press submit button";
}
?>
<html>
   <head>
       <title>
             Info
       </title>
   </head>
   <body>
        <br>
        <form method="POST" action="addingtodb.php">
        USERNAME <input type="text" name="username" placeholder="Enter your username" required><br><br>
        E-MAIL<input type="email" name="email" placeholder="Type your email" required><br><br>
        <input type="radio" value="male" name="gender" required>male
        <input type="radio" value="female" name="gender">female<br>
        <select name="city">
        Select your city
        <option value="Rishikesh">Rishikesh</option>
        <option value="Dehradun">DEHRADUN</option>
        <option value="Delhi" selected>Delhi</option>
        <option value="Mussories">Mussorie</option>
        </select>
        <br>
        <input type="submit" name="submit" value="click here to submit your info">
</select>
   </body>
</html>
