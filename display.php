<?php
session_start();
$id=$_SESSION["id"];
$con=  mysqli_connect("localhost","root","","city");
$sql ="SELECT * FROM images";
$r=  mysqli_query($con, $sql); ?>


<?php while($row=  mysqli_fetch_array($r)){
  ?>

<a href="disp.php?img=<?php echo $row["image"];?>&id=<?php echo $row["id"];?>"><img src="<?php echo $row["image"]; ?>" width="100" height="100" > </a>   
<?php
}

?>