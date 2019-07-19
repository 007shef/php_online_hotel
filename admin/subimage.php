
<!doctype html>
<html>
    <style>
        form{
            font-size: 50px;
            margin-top: 150px;
            text-align: left;
        }
    </style>
    <head>
        <title>Admin Account</title>  
        <link href="style.css" rel="stylesheet">
    </head>  
    
    <body>
        <?php
        session_start();
        $hid=$_SESSION["id"];
        ?>
        
        <form action="postsub.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="hid" value="<?php echo $hid; ?>">
           Sub Image:<input type="file" name="img">
            <input type="submit" value="submit"><br><br>
            Exit:<a href="index.php">exit
        </form>
        
    </body> 
</html>
