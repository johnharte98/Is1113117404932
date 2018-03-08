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
        <?php
        echo "Name: " . $_SESSION["name"] . ".";
        ?>
        
        <p>
        <?php
        echo "E-Mail: " . $_SESSION["email"] . ".";
        ?>
        </p>
         
        <p>
        <?php
        echo "Address is $" . $_SESSION["address"] . ".";
        ?>
        </p>
        
      <p>
      <?php
      echo "Total is $" . $_SESSION["total"] . ".";?> 
      </p>
    </body>
</html>