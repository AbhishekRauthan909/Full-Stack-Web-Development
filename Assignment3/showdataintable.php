<?php
include('config.php');
?>
<?php
    $sql="SELECT * FROM `users`";
    $data=mysqli_query($conn,$sql);
    if($data->num_rows>0){
    ?>

        <table border='3px'>
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Username</th>
                     <th>Email</th>
                     <th>Gender</th>
                     <th>City</th>
                 </tr>
             <thead>
            <tbody>
                  <?php
                  while($row=$data->fetch_assoc())
                  {?>
                  <tr>
                   
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['username']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['gender']?></td>
                      <td><?php echo $row['city']?></td>
                  </tr>
                  <?php } ?>
            </tbody>
        </table>
<?php 
} ?>
<html>
    <head>
        <title>
        Details in Table
        </title>
    </head>
    <body>
    </body>
</html>