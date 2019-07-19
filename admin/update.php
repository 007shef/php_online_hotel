<?php
$id=$_REQUEST["id"];
$u=$_REQUEST["FirstName"];
$a=$_REQUEST["LastName"];
$g=$_REQUEST["password"];
$e=$_REQUEST["Email"];
$m=$_REQUEST["Mobile"];
$s=$_REQUEST["gender"];
$t=$_REQUEST["address"];


$con=mysqli_connect("localhost","root","","tour");
if(!$con){
    die("not connected");
}
echo "connected";
$sql="update register set FirstName='$u',LastName='$a',password='$g',Email=$m,Mobile='$e' ,gender='$s' ,address='$t' where id=$id";
$i=mysqli_query($con,$sql);
        if($i>0){
            echo "inserted";
       header("location:success.php");
        }
?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

