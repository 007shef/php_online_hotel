<table border="1">
    <tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Password</th><th>Email</th><th>Mobile</th><th>Gender</th><th>Address</th><th colspan="2">Action</th></tr>
<?php
include 'config.php';
$sql="select *from register";
$r=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($r)){
    ?>  
   <tr><td><?php echo $row["id"];?></td>
    <td><?php echo $row["FirstName"];?></td>
        <td><?php echo $row["LastName"];?></td>
    <td><?php echo $row["password"];?></td>
    <td><?php echo $row["Email"];?></td>
       <td><?php echo $row["Mobile"];?></td>
              <td><?php echo $row["gender"];?></td>
                     <td><?php echo $row["address"];?></td>
   <td> <a href='edit.php?id=<?php echo $row["id"];?>'>EDIT</a></td>
    <td> <a href='delete.php?id=<?php echo $row["id"];?>'>DELETE</a></td>
    </tr>
     <?php
}
     ?>
</table>