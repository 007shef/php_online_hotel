<!doctype html>
<html>
  <head>
      <!DOCTYPE HTML>
<html>
<head>
<script>
function test()
{
var name=document.getElementById("a").value;
if(name==""||name==null){
document.getElementById("err").innerHTML="Enter the email";
return false; 
}
}
</script>

      
   
    <title>SIGN UP </title>
    <link rel="stylesheet" href="styles/style2.css">
      
  <style>
      table{
          width:75%;
          text-align:center;
      }
      form{
          width:550px;
          min-height:200px;
         background-color:darkslateblue;
          font-size:150%;
          font-style: inherit;
          position:absolute;
          margin-left:200px;
          
          
      }
      input[type=submit]{
          margin-left:100px;
      }
      body{
           background-image:url('image/sign.jpg');
          background-color:forestgreen;
     }
    input[type=text],input[type=password],input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
    
}
.button {
    color: magenta;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 100px;
    text-align: center;
    
    margin-right: 200px;
    background-color: darksalmon;
    
}
  </style>
  </head>
  <body>
      <div class="button">SignUp</div>
  <div class="register">
  <form action="register.php" onsubmit="return test()">
      <table>
          
          <tr>
              <td>FirstName</td>
              <td><input type="text" name="fname" placeholder="Enter Firstname"></td>              
              
          </tr>         
            <tr>
              <td>LastName</td>
              <td><input type="text" name="lname" placeholder="Enter Lastname"></td>              
              
          </tr>  
          <tr>
              <td>Password</td>
              <td><input type="password" name="password" placeholder="Enter password"></td>              
              
          </tr> 
           <tr>
              <td>Email</td>
              <td><input type="email" name="email" placeholder="Enter email" id="a"></td>              
              
          </tr> 

        
          <tr>
              <td>Mobile</td>
              <td><input type="text" name="mobile" placeholder="enter 10 digit contact_no"></td>              
              
          </tr> 
        <tr>
              <td>Gender</td>
              <td><input type="radio" name="gender" value="m">MALE 
              <input type="radio" name="gender" value="f">FEMALE 
              </td>
              
          </tr> 
        
<tr>
              <td>Address</td>
              <td><input type="text" name="address" placeholder="Enter address" </td>
              
          </tr> 
          <tr>
              
              <td><input type="submit" value="Register"></tr>
          

      </table>   
      
      
  </form>
      </div>
  
   
  </body>
</html>
