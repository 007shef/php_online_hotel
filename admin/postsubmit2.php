<?php
include 'config.php';
$location=$_REQUEST["location"];

$hname=$_REQUEST["hname"];

$price=$_REQUEST["price"];

$offerprc=$_REQUEST["offerprc"];
$imgname=$_FILES["img"]["name"];
$tmp=$_FILES["img"]["tmp_name"];
move_uploaded_file($tmp , "../image/".$imgname);
$path="image/".$imgname;

$sql="insert into postadd2(location,HotelName,Price,OfferPrice,Image)values('$location','$hname',$price,$offerprc,'$path')";
$i=  mysqli_query($con, $sql);
if($i>0){
    session_start();
  $id=  mysqli_insert_id($con);
      $_SESSION["id"]=$id;

  header("location:subimage.php");  
    
}

?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

