
<html><title>LOGIN</title>
    <head>
        <style>
            p{
                font-size:200%;
                color: #00cc99;
                margin-left:200px;
                margin-top: 100px;
                
            }
            body{
                background:gold url("image/TOUR.jpg") repeat fixed ;
            }
        </style>
    </head><?php
if(isset($_GET["msg"])){
    echo $_GET["msg"];
}

?>
    <body>
<p style="text-align:center;float:bottom;margin-top:200px;margin-right:200px;font-size:50px;">Please 
<br><a href="login.php">Login </a>Here <br>Or <br><a href="signup.php">Signup</a> Here</p>
</body>
</html>