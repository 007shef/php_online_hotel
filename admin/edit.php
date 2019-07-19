<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <style>
            
        </style>    </head>
<form action="update.php" method="get">
<table border="1">
    <tr> <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Password</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
                <th>Gender</th>
                        <th>ADDRESS</th>


        <th colspan="2">Action</th>
        </tr>
<?php
$id=$_REQUEST["id"];
$con=mysqli_connect("localhost","root","","tour");
if(!$con){
    die("not connected");
}
echo "connected";
$sql="select * from register where id =$id";
$r=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($r)){?>
         <tr><td><input type="text" name="id" value="<?php echo $row["id"];?>"readonly></td>
          <td><input type="text" name="FirstName" value="<?php echo $row["FirstName"];?>"></td>
          <td><input type="text" name="LastName" value="<?php echo $row["LastName"];?>"></td>
          <td><input type="text" name="password" value="<?php echo $row["password"];?>"></td>
          <td><input type="text" name="Email" value="<?php echo $row["Email"];?>"></td>
          <td><input type="text" name="Mobile" value="<?php echo $row["Mobile"];?>"></td>              
                    <td><input type="text" name="gender" value="<?php echo $row["gender"];?>"></td>              
          <td><input type="text" name="address" value="<?php echo $row["address"];?>"></td>              

          <td><input type="submit" value="update" ></td></tr>
        
       <?php
        }
         ?>
         </table>
    </form>
          
  