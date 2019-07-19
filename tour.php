<!DOCTYPE html>

<html>
    <head>
        <style>
            
ul{
    list-style-type: none;
     margin:auto;
   
    padding:0;
    
}
li a{
    display:block;
    padding:6px 15px;
    color:white;
    border-radius:6px;
    background-color:green;
    text-transform: uppercase;
}
li{
    float:left;
    
}
li a:hover{
    background-color: darkorange;
    
}
title{
    font-weight: bold;
    color:yellow;
}
 
#header{
    width:100%;
        height:150px;
    
    border-radius:8px;
    background-color:orange;
  
    text-align: center;
    
}

#content{
     height:500px;
  
    padding:15px;
    background-image: url(image/bus.jpg);
    float:left;
        width:100%;
}


*{
    box-sizing:border-box;
}


.row::after
{
    clear:both;
    display:block;
    content:"";
}


        </style>
        <link  href="css.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title> BUS RESERVATION</title>
    </head>
    <body>
         <div id="header">
             <?php include 'header.php'?>
           
             <form action="search.php" method="post">
            Source:<input type="text" name="Source">
            Destination:<input type="text" name="Destination">
            Date:<input type="date" name="date">
            <input type="submit" value="Search">
            </form>
      
           </div>
        <div class="row">
            <div id="content">
              

            </div>
            </div>
            <div id="footer" style="background-color: darkorchid;">
                Safarnama.com</div>
    
        
        
        
        
        
        
    

    </body>
   
</html>
