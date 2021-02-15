<?php
if(isset($_POST['submit']))
{
    
    
    $v1=$_POST['var1'];
    if(!empty($v1))
    {
    $v2=$_POST['var2'];
    $sum=$v1+$v2;
    echo "$sum";
    }
}
else
{
    echo "Enter and Submit the data";
}
?>

<html>
    <head>
        <title>
             Sum of two numbers
        </title>
    </head>
    <body>
        <form method="POST" action="add.php">
            <input type="text" name="var1" placeholder="enter the first number">
            <br><br>
            <input type="text" name="var2" placeholder="enter the second number">
            <br><br>
            <input type="submit" name="submit" value="Click here to submit the data">
        </form>
    </body>
    
</html>