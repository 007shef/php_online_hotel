<!doctype html>
<html>
  <head>
     
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo | xZoom Jquery Zoom Gallery</title>
    <link rel="stylesheet" href="styles/style2.css">
    
    
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/demo.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
  <!-- xzoom plugin here -->
  <script type="text/javascript" src="dist/xzoom.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/xzoom.css" media="all" /> 
  <!-- hammer plugin here -->
  <script type="text/javascript" src="hammer.js/1.0.5/jquery.hammer.min.js"></script>  
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link type="text/css" rel="stylesheet" media="all" href="fancybox/source/jquery.fancybox.css" />
  <link type="text/css" rel="stylesheet" media="all" href="magnific-popup/css/magnific-popup.css" />
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.js"></script>
  <script type="text/javascript" src="magnific-popup/js/magnific-popup.js"></script>   
  <style>
      body{
          background-image: url(image/sign.jpg);
      }
      .header{
          margin-top: 100px;
          margin-left: 400px;
         font-weight: bold;
          font-size:50px;
          
          width:500px;
          color:darkred;
      
      }
      .style{
          width:300px; 
          height: 300px;
          border:1px solid white; 
          float:left ;
          font-size:30px;
          textarea:160px;
          background-color: darkred;
          box-shadow: 10px 10px 10px grey;
          
      }
      </style>
  </head>

  <body>
  <div class="header">BOOKINGS </div>
  <div class="container">
    
    <!-- magnific start -->
    <section id="magnific">
    <div class="row">
      
      <div class="large-5 column" style="float:center;">
        <div class="xzoom-container">
   <?php   $img=$_REQUEST["img"];  ?>         
 <img class="xzoom5" id="xzoom-magnific" src="<?php echo $img; ?>" xoriginal="<?php echo $img; ?>" width="400" />
<div class="xzoom-thumbs">
 <a href="<?php echo $img; ?>"><img class="xzoom-gallery5" width="100" src="<?php echo $img; ?>"  xpreview="<?php echo $img; ?>" title="The description goes here"></a>
<?php
session_start();
$id=$_REQUEST["id"];
$con=  mysqli_connect("localhost","root","","tour");
$sql ="SELECT * FROM subimage where hid=$id";
$r=  mysqli_query($con, $sql); ?>


<?php while($row=  mysqli_fetch_array($r)){
  ?>

<a href="<?php echo $row["subimage"]; ?>"><img class="xzoom-gallery5" width="80" src="<?php echo $row["subimage"]; ?>" title="The description goes here"></a>
   
<?php
}

?>
           
          </div>
        </div>    
          
      </div>
        <div class="style">
            <?php 
            $p=$_REQUEST["offer"];
        
           
            echo   "<br>";
            echo  "Price= ".$p;  
           
           
            ?>
            <form action="placeorder.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ;?>"> <br> 
                <input type="hidden" name="price" value="<?php echo $p ;?>"> <br>
                <input type="hidden" name="hname" value="<?php echo $n ;?>"> <br>
                Number Of Members<select name="member" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <input type="submit" value="Place Order">    
                
            </form>
            
        </div>
    </div>
    
    <!-- magnific end -->
  </div>
  </section>
    <script src="js/foundation.min.js"></script>
    <script src="js/setup.js"></script>
    
    <script>
    $(document).ready(function(){
       $("form").submit(function(){
          <?php
              session_start();
          
           if(!isset($_SESSION["id"]))
               { 
      
               header("location:warning.php");
     }
     
     ?>
     return false;
      });
      });
     </script>   
  </body>
</html>
