<?php
include 'config.php';
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];
$mobile=$_REQUEST["mobile"];
$g=$_REQUEST["gender"];
$address=$_REQUEST["address"];
echo "FirstName=".$fname; 
echo "<br>";
echo "LastName=".$lname;
echo "<br>";
echo "Password=".$password;
echo "<br>";
echo "Email=".$email;
echo "<br>";
echo "Mobile=".$mobile;
echo "<br>";
echo "ADDRESS=".$address;
echo "<br>";
echo "Gender=".$gender; 

$sql="insert into register(Firstname,LastName,password,Email,Mobile,gender,address) values('$fname','$lname','$password','$email',$mobile,'$g','$address')";
$i= mysqli_query($con,$sql);
        if($i>0){
          
       header("location:warning.php?msg=Registration is SuccessFull");
        }
?>
