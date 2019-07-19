<?php
include 'config.php';
$hid=$_REQUEST["hid"];
$imgname=$_FILES["img"]["name"];
$tmp=$_FILES["img"]["tmp_name"];
move_uploaded_file($tmp , "../image/".$imgname);
$path="image/".$imgname;

$sql="insert into subimage(hid,subimage)values($hid,'$path')";
$i=  mysqli_query($con, $sql);
if($i>0){
  
  header("location:subimage.php");  
    
}

?>

