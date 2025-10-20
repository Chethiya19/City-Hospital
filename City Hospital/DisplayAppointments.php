<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display Patient Appointments</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 20px;
        
      }
      .div1{
        margin-left: 20px;
      }
      h1{
        color: crimson;
      }
    </style> 
  </head>
  <body bgcolor="#9FF9F4">
    <h1 align="center">Patient Appointments</h1>
    <div class="div1">
    <?php
        include "DB_Operation.php"; 

            $sql = "SELECT * FROM appointment";
            $result = mysqli_query($conn,$sql);
            $numRows = mysqli_num_rows($result);
            if($numRows>0){
                ?> 
                <table border="1" bordercolor="#000000" width="80%" height="100%" bgcolor="#B3E0E3" align="center" id="viewtable">
                    <tr>
                        <th>Appointment<br>Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Specialization</th>
                        <th>Doctor</th>
                        <th>Date Of Appointment</th>
                        <th>Branch</th>
                        <th>Reason Of Consultation</th>
                    </tr>
                    <?php 
                        while($row = mysqli_fetch_row($result)){
                    ?> 
                    <tr align="center">
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>  
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td><?php echo $row[7]; ?></td> 
                        <td><?php echo $row[8]; ?></td>
                        <td><?php echo $row[9]; ?></td> 
                    </tr> 
                    <?php 
                        }
                    ?>
                </table>
                <?php
            } else {
                $msg = "<p style=color:red;> Appointments Not Found!</P>";
            }
        
    ?>
    </table>
    </div>
  </body>
</html>
