<!DOCTYPE html>

<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <link rel="stylesheet" href="Ebus.css" type="text/css" />
       
        <title>Select Product</title>

        

        <!--jQuery-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script type="text/javascript" src="cost_calc.js"></script>



    </head>

    

    <body>

  

            <h1 class="mainheading">Select a Product</h1>

            

            <br/>

            

            <form method="POST" action="Ebus2.php">

              

              <label for="salesforce">

                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>

                SalesForce @ $100

              </label>

              

              <br/>
              
              
              
              

              <label for="Cloud 9">

                <input type="radio" id="Cloud9" name="product" checked onClick="disablebtnProceed()"/>

                Cloud9 @ $200

              </label>
              
               <br/>
               
               
                <label for="AmazonWebServices">

                <input type="radio" id="AWS" name="product" checked onClick="disablebtnProceed()"/>

                AmazonWebServices @ $300

              </label>

 <br/>
              
               <label for="Gmail">

                <input type="radio" id="Gmail" name="product" checked onClick="disablebtnProceed()"/>

                Gmail @ $400

              </label>


              

              <br/>

               <br/>

                <br/>

              <label for="subtotal">

                Sub Total

                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>

              </label>

              <br>

            

              <br>
              
              <label> 
  Discount @ 5%
  <input type="text" id="Discount @ 5%" name="Discount @ 5%"  value="0.00" readonly/>
</label>

<br/>

            

<br/>
              <label for="Vat @ 10%">
              
              Vat @ 10%
              
          <input type="text" id="Vat @ 10%" name="Vat @ 10%" value="0.00" readonly/>
        
        </label>
              <br/>

            

<br/>

              <label for="total">

                Total

                <input type="text" id="total" name="total" value="0.00" readonly/>

              </label>
             
              <br/>
              
            <label for="(-Discount,+Vat)">

                (-Discount,+Vat)

                <input type="hidden" name="(-Discount,+Vat)"  readonly/>

              </label>
    

              <br/>
<br/>
    
<br/>
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>

            

            </form>

            

            <br/>

            <button onClick="calcSub()">Calculate Cost</button>
            
            
             <input type="button" name="clear" value="Clear Choice" onClick="window.location.href = 'Ebus1.php'"/>
       

     <input type="button" name="homepage" value="Homepage" onClick="window.location.href = '../homepage.html'"/>
            

    </body>

</html>