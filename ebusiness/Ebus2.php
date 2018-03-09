<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset="utf-8"/>
        
        <title> Enter Details</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        <!--Payment and Customer Details-->
        <h3>Enter payment details</h3>

            <form action = "Ebus3.php" method = "POST">
            
            <label for="name">Name:
            <input type="text" name="name" id="name"/>
            </label>
              
              <br/>
              
            <label for="email">Email:
            <input type="text" name="email" id="email"/>
            </label>
              
              <br/>
              
            <label for="address">Address:
            <input type="text" name="address" id="address"/>
            </label>
              
              <br/>
                
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            <br/>
            
            <button onClick="validateDetails()">Validate</button>
        <!--setting session variables-->
        <?php
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
    </body>
    
</html>