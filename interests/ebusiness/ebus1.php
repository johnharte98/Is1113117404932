<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
       <!--Query-->
       <script src= "https //ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js /script"</script></script>
       <scipt type= "text/javascript" src="cost_calc.js"></scipt>
       
       
     </head>
    
    <body>
        <h4>Select a Product<h4/> 
        
        <br/>
        
        <form method= "POST" action="ebus1.php">
        
        <label for="salesforce">
        <input type="ratio" id="salesforce" name="product" checked onCLick="disablebtnProceed()"/>
        Salesforce @ $100
        </label>
        
       <br/>
       
       <label for="aws">
        <input type="ratio" id="aws" name="product" onCLick="disablebtnProceed()"/>
        AWS @ $300
        </label>
        
       <br/>
       <br/>
       
       <label for="subtotal">
        Sub Total
        <input type="text" id="Total" value="0.00" readonly/>
        </label>
        
       <br/>
       
       <label for="Total">
        Total
        <input type="text" id="Total" value="0.00" readonly/>
        </label>
        
       <br/>
       
       <button type="submit" id="btnProceed" disable>Add to Shopping Cart</button>
       
       </form>
       
       <br/>
       button onClick="calcSub()">Calculate Cost</button>
       <a role="button" href="ebus1.php">Clear Choice</a>
       
    </body>

</html>