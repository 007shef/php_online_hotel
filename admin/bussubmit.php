
<?php
include 'config.php';
$Source=$_REQUEST["Source"];
$Destination=$_REQUEST["Destination"];
$date=$_REQUEST["Date"];
$b=$_REQUEST["BusName"];
$price=$_REQUEST["price"];
$time=$_REQUEST["time"];
$sql="insert into buslist(Source,Destination,Date,BusName,price,time) values('$Source','$Destination',now(),'$b',$price,now())";
$i=  mysqli_query($con, $sql);
if($i>0){
header("location:bussuccess.php");

}
?>