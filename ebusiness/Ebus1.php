<!DOCTYPE html>

<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <style>
                    
* {
    box-sizing: border-box;
}
.mainheading{
    border: 1px solid red;
    padding: 15px;
}

                  body {
    background-color: lightblue;
}

h1 {
    background-color: yellow;
}
      
      
      
      
      
      
  </style>
       <center>
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

                <input type="radio" id="Cloud9" name="product" onClick="disablebtnProceed()"/>

                Cloud9 @ $200

              </label>
              
               <br/>
               
               
                <label for="AmazonWebServices">

                <input type="radio" id="AmazonWebServices" name="product" onClick="disablebtnProceed()"/>

                AmazonWebServices @ $300

              </label>

 <br/>
              
               <label for="Gmail">

                <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>

                Gmail @ $400

              </label>


              

              <br/>

               <br/>

              

              <label for="subtotal">

                Sub Total

                <input type="text" id="subtotal" value="0.00" readonly/>

              </label>

              

              <br/>
              <label for="Discount @ 5%">
  Discount @ 5%
  <input type="text" id="Discount @ 5%"  value="0.00" readonly/>
</label>



<br/>
              

              <label for="total">

                Total

                <input type="hidden" id="total" name="total" value="0.00" readonly/>

              </label>

    

              <br/>

              

              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>

            

            </form>

            

            <br/>

            <button onClick="calcSub()">Calculate Cost</button>

            <a role="button" href="Ebus1.php">Clear Choice</a>
            <br/>
               <a href="../homepage.html" type="button" class="btn btn-success">Home</a>

</center>

    </body>

</html>