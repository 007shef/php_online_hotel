  <!DOCTYPE html>
<html>
<head>
<style>


.more{
    
    float:bottom;
   
    font-size: 50px;
}
h1{
      color:aqua;
    background-color: darkred;
    text-align: center;
   
}
a{
    font-size: 40px;
    color:darkblue;
}

</style>
<title>OnLine Travel System</title>

<link rel="stylesheet" href="styles/style.css" type="text/css"
	media="screen" />

</head>

<body>    
    
          <div class="more">
              <h1>Safarnama</h1>
                 <a href="index.php">Home</a></div>         
                 
   
                    <?php
                    include 'config.php';
                    $sql="select * from postadd";
                    $r=  mysqli_query($con, $sql);
                    
                    
                 while($row=  mysqli_fetch_array($r)){
                     
                    ?>   
            <div class="gallery">
                    
                <a target="__blank" href="disp.php?img=<?php echo $row["Image"] ;?>&id=<?php echo $row["id"]; ?>&offer=<?php echo $row["OfferPrice"];?>&n=<?php echo $row["HotelName"]; ?>"> 
                <img src="<?php echo $row["Image"]; ?>">
                </a>
                <div class="desc">
                    <span><?php echo $row["location"]; ?>|<?php echo $row["HotelName"]; ?> 
                        <hr>Price:<del><?php echo $row["Price"];?></del></span>
                    <span>OFFER_Price:<?php echo $row["OfferPrice"];?></span>
                     <span><a target="__blank" href="disp.php?img=<?php echo $row["Image"] ;?>&id=<?php echo $row["id"]; ?>&offer=<?php echo $row["OfferPrice"];?>&n=<?php echo $row["HotelName"]; ?>">BOOK</a></span>
                    
                   
                </div>
                </div>
                   
            
                    <?php }  ?> 
           
  </body>
</html>