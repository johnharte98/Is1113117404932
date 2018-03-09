<?php
session_start();
?>
<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8"/>
        
        <title>RECEIPT</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
    </head>
    <body>
       
        <h3>Receipt</h3>
        
        <!--Setting Echo Variables-->
       
      <p>
      <?php
      echo "Total is $" . $_SESSION["total"] . ".";?> 
      </p>
      <a href="../homepage.html" class="btn btn-success">home</a>
    </body>
</html>