<!doctype html>
<html>
<head>
    <style>
        body{
            background-image: url('image/signup.jpg');
        }
   
                </style>
<link rel="stylesheet" href="styles/style2.css">

<meta name="viewport" content="width=device-width initial-scale=1.0">
</head>
<body>
<div id="header"> BOOKINGS </div>
<?php include 'config.php';  
$id=$_REQUEST["id"];
$sql="select * from postadd where id=$id";
$r=  mysqli_query($con, $sql);


?>
<div class="r">
<div id="left">
    <?php
      while($row=  mysqli_fetch_array($r)){
                    ?>   
            <div class="gallery">
                
                
                    
                <a target="__blank" href="book.php?id=<?php echo $row["id"]; ?>"> 
                <img src="<?php echo $row["Image"]; ?>">
                </a>
                <div class="desc">
                    <span><?php echo $row["location"]; ?>|<?php echo $row["HotelName"]; ?> 
                        Price:<del><?php echo $row["Price"];?></del></span>
                    <span>OFFER_Price:<?php echo $row["OfferPrice"];?></span>
                    <span><a href="book.php">BOOK</a></span>
                
                   
                </div>
            </div>
                    <?php }  ?>
                    

</div>
<div id="content">
</div>

</div>
<div id="footer">
footer</div>
</body>
</html>


