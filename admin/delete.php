<?php
include 'config.php';
$id=$_REQUEST["id"];

$sql="delete from register where id=$id";
$i=mysqli_query($con,$sql);
        if($i>0){
            
       header("location:display.php");
        }
?>
