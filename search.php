<html>
    <head>
        <style>
            a{
                float:right;
                margin-right: 300px;
                font-size: 30px;
                
            }
            table{
                font-style: italic;
                font-size: 30px;
            }
            </style>
    </head>
    <body>
        <table border='1'>
            
            <tr>
                <th>BusId</th><th>BusName</th><th>Source</th><th>Destination</th><th>Date</th><th>Price</th><th>Time</th>
                </tr>
               
<?php
include 'config.php';
$source=$_POST["Source"];
$destination=$_POST["Destination"];
$date=$_POST["date"];
$sql="select * from buslist where Source like '%$source%' and Destination like '%$destination%' and Date like '%$date%'";
$r=  mysqli_query($con, $sql);

while($row=  mysqli_fetch_array($r)){ ?>
            
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["BusName"]; ?></td>
                   <td><?php echo $row["Source"]; ?></td>
                      <td><?php echo $row["Destination"]; ?></td>
                      <td><?php echo $row["Date"];?></td>
                                            <td><?php echo $row["price"];?></td>
                                             <td><?php echo $row["time"];?></td>
       
       
            
            <a href="bussuccess.php">Book</a>
   
   
  <?php 
}
?>
        </table>
    </body>
</html>
