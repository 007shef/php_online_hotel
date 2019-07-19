<?php
include 'config.php';
session_start();

if(empty($_SESSION["id"])){
      
   $_SESSION["price"]=$price;
    header("location:warning.php");
    
}
else{
    
   $email=$_SESSION["id"];
   $price=$_REQUEST["price"];
   $name=$_REQUEST["hname"];
   echo "email=".$email;
  $sql="insert into ordering(Email,HotelName,Date) values ('$email','$name',now())";
  $i=mysqli_query($con, $sql);
    if($i>0){
        header("location:ordersuccess.php?msg=Your order is SuccessFull");
        
        }
}
    


?>