
<html>
    <head>
       
        <style>
            h1{
                color:darkolivegreen;
                margin-left: 40px;
                
            }
            .table{
                min-height: 500px;
                
        
            }
                         form{
          width:450px;
          min-height:300px;
         background-color:pink;
          font-size:250%;
          font-style: inherit;
          position:absolute;
          border-radius: 20px;
                          margin-top: 50px;
                          box-shadow: 10px 10px 10px darksalmon;
                        

          
          
      }
      body{
          background-color:forestgreen;
                    background-image:url('image/login.jpg');

      }
      input[type=submit]
      {
          width:150%;
          margin-left: 50px;
      }
      
     

            input[type=text],input[type=password],input[type=email]{
                 width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
        
           </style>
    </head>
    <body>
<form action="userlogin.php" method="get">
    <div class="table">
    <table>
        <h1>LOGIN</h1>
        <tr>
<td>Email:</td><td><input type="email" name="email"></td></tr><br>
<tr>
 <td>Password:</td><td><input type="password" name="password"></td>
</tr>
<tr><td><input type="submit" value="LOGIN"></td></tr>
</table>
        </div>
</form>
        </body>
        </html>


