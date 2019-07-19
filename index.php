  <!DOCTYPE html>
<html>
<head>
<style>
.error {
	color: #FF0000;

    
}


    

.more{
    margin-top:800px;
    float:bottom;
    margin-left: 500px;
    font-size: 50px;
}
h1{
    color:black;
    font-style:italic;
    font-size: 30px;
    float:left;
    margin-left: 50px;
    
    
}
#header{
    font-size:40px;
    font-style:oblique;
    width:200px;
    color:royalblue;
    font-weight: bold;
    
    
}
#header:hover{
    background-color: darkcyan;
}

</style>
<title>OnLine Travel System</title>
<link rel="stylesheet" href="themes/default/default.css" type="text/css"
	media="screen" />
<link rel="stylesheet" href="styles/nivo-slider.css" type="text/css"
	media="screen" />
<link rel="stylesheet" href="styles/style.css" type="text/css"
	media="screen" />

</head>

<body>

	<div id="header-wrapper" class="container">
		<div id="header">
                   <h1>Safarnama</h1>
                </div>
       
                
                
			<div id="menu">
                             
                          
				<ul>
					<li class="active"><a href="index.html" accesskey="1" title="">Homepage</a>
					</li>
					<li><a href="signup.php" accesskey="2" title="" id="regs">Registration</a>
					</li>
					<li><a href="login.php" accesskey="3" title="" id="login">Login</a>
					</li>
                                        <li><a href="tour.php" accesskey="3" title="" id="tour">Tour</a>
					</li>

					
					<li><a href="contact.php" accesskey="5" title="" id="cont">Contact
							Us</a>
					</li>
                                        <li><a href="admin/login.php" accesskey="2" title="" id="regs">Admin</a>
					</li>
			
				</ul>
			</div>
		</div>
            </div>
            
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
				<img src="images/gets-bombay.jpg" data-thumb="gets-bombay.jpg" alt=""
				 title="GATEWAY OF INDIA" /> 
			
                               
                                
                                    <img src="images/india-gate.jpg" data-thumb="images/india-get.jpg"
                                         data-transition="slideInLeft"
                                         alt="" title="INDIA GATE"/> <img src="images/up.jpg"
					data-thumb="images/up.jpg"
                                        title="bada Imambara" />
				<img src="images/charminaar.jpg" data-thumb="images/charminaar.jpg" alt=""
					data-transition="slideInLeft" TITLE="CHARMINAR" />
                                <img src="images/nemo.jpg"
                                     data-thumb="images/nemo.jpg" alt="" title="Taj Mahal" <a href="">
			
                    </div>
                    <?php
                    include 'config.php';
                    $sql="select * from postadd";
                    $r=  mysqli_query($con, $sql);
                    
                    
                 while($row=  mysqli_fetch_array($r)){
                     
                    ?>   
            <div class="gallery">
                    
                <a target="__blank" href="disp.php?img=<?php echo $row["Image"] ;?>&id=<?php echo $row["id"]; ?>&offer=<?php echo $row["OfferPrice"];?>&n=<?php echo $row["HotelName"]; ?>&AC=<?php echo $row["AC"] ;?>"> 
                <img src="<?php echo $row["Image"]; ?>">
                </a>
                <div class="desc">
                    <?php echo $row["location"]; ?>|<?php echo $row["HotelName"]; ?> 
                        <hr>Price:<del style="color:red;"><?php echo $row["Price"];?></del>
                    OFFER_Price:<?php echo $row["OfferPrice"];?>
                     <a target="__blank" href="disp.php?img=<?php echo $row["Image"] ;?>&id=<?php echo $row["id"]; ?>&offer=<?php echo $row["OfferPrice"];?>&n=<?php echo $row["HotelName"]; ?>&AC=<?php echo $row["AC"]; ?>">
                   BOOK</a>
                    
                </div>
                </div>
                   
            
                    <?php }  ?> 
           	<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    });
    </script>
   <div class="more">
                 <a href ="index2.php" style="background-color: yellow;">More</a></div>         
                 
</body>
</html>