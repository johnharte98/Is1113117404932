<!DOCTYPE html>
<html lang="en">
  
    <head>
      <meta charset="utf-8"/>
      
        <title>Select Product</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
     
        <h3>Product Selection</h3>
            
            <br/>
            
            <!--Product Choices-->
            <form method="POST" action="Ebus2.php">
              
              
              <label for="salesforce">SalesForce @ $100
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              </label>
              
              <br/>
              
              <label for="cloud9">Cloud 9 @ $200
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
              </label>
              
              <br/>
              
              <label for="aws">Amazon Web Services @ $300
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              </label>
               
              <br/>
              
              <label for="gmail">Gmail @ $400
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              </label>
              
              <br/>
              <br/>
              
              <!--Labelling subtotal, discount, vat and total price-->
              <label for="subtotal">Sub Total
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discountAmt">Discount @ 5%
              <input type="text" id="discountAmt" name="discountAmt" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vatAmt">VAT @ 10%
              <input type="text" id="vatAmt" name="vatAmt" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="totalPrice">Total
              <input type="text" id="totalPrice" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
          <!--Used to navigate to details and pin-->
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <!--Calculating cost of each item using function-->
            <button onClick="calcSub()">Calculate Cost</button>
            
            <br/>
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>