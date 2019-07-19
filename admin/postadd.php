<!doctype html>
<html>
    <head>
        <style>
           
            
            </style>
        <title>Admin Account</title>  
        <link href="style.css" rel="stylesheet">
    </head>    
    <body>
        <div class="table">
            <table>
                <form action="postsubmit.php" method="post" enctype="multipart/form-data">
             
            <tr><td>Location:</td><td><input type="text" name="location"></td></tr>
            <tr><td>HotelName:</td><td><input type="text" name="hname"></td></tr>
           <tr><td>Price:</td><td><input type="text" name="price"></td></tr>
            <tr><td>OfferPrice:</td><td><input type="text" name="offerprc"></td></tr>
            <tr><td>Image:</td><td><input type="file" name="img"></td></tr>
            <tr><td>AC:</td><td><select name="ac">
                        <option value="available">AC</option>
                        <option value="not Available">NonAc</option></td>
            </select>
                    </tr>
              <tr>
           <td> <input type="submit" value="submit"></td></tr>
         
        </form>
                </table>
            </div>
    </body>
</html> 