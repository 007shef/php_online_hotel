<!doctype html>
<html>
    <head>
        <title>Admin Account</title>  
        <link rel="stylesheet"  href="style.css">
    </head>    
    <body>
        <form action="bussubmit.php" method="post">
            <table>
            <tr><td>Source:</td><td><input type="text" name="Source"></td></tr>
           <tr><td>Destination:</td><td><input type="text" name="Destination"></td></tr>
            <tr><td>Date:</td><td><input type="Date" name="Date"></td></tr>
            <tr><td>BusName:</td><td><input type="text" name="BusName"></td></tr>
           <tr><td>Price:</td><td><input type="text" name="price"></td></tr>
            <tr><td>Time:</td><td><input type="time" name="time"></td></tr>
            <tr><td><input type="submit" value="submit"></td></tr>
            </table>
        </form>
    </body>
</html>