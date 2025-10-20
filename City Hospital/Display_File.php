<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display Medical Reports</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 20px;
        
      }
      .div1{
        margin-left: 300px;
      }
      h1{
        color: crimson;
      }
    </style> 
  </head>
  <body bgcolor="#9FE9F2">
    <h1 align="center">Medical Reports</h1>

    <div class="div1">
      <?php
      include "DB_Operation.php"; 

      $sql="SELECT pdf from pdf_file";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html>
