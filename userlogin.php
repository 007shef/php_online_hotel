
<?php
session_start();
if(!isset($_SESSION["id"])){
    header("location:login.php");
}
include 'config.php';

$password=$_GET["password"];
$email=$_GET["email"];


$sql="select * from register where  password='$password' and email='$email'";
$i= mysqli_query($con,$sql);
$count=  mysqli_num_rows($i);
        if($count>0){
          $_SESSION["id"]=$email;
          header("location:index.php");
        }
?>