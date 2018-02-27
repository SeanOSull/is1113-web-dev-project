<?php

// Start the session

session_start();

 ?>
 
<!DOCTYPE html>

<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <center>
        <title>RECEIPT</title>
           <link rel="stylesheet" href="Ebus.css" type="text/css" />
        <style>
     p
     .double {border-style: double;
         
     }             

                  body {
    background-color: lightblue;
}

h1 {
    background-color: yellow;
}
        </style>

    </head>

    <body>

     <h1> 
           Perchase Receipt
        </h1>
        
        <p>
            <div class="receipt">

       

    
                

        <?php

        $_SESSION["NAME"] = $_POST["NAME"];

        $_SESSION["EMAIL"] = $_POST["EMAIL"];

        

        

        

        echo "<h4 id='receiptname'>Name: " . $_SESSION['NAME'] . "</h4>";

        echo "<h4 id='receiptemail'>Email: " . $_SESSION['EMAIL'] . "</h4>";

        

        echo "<div align='center' class='receiptpricewrapper'>";

        

        echo "<h4 align='center' id='prouctname'>Salesforce</h4>";

        

        echo "<h4 id='receiptprice'>Subtotal: " . $_SESSION['subtotal'] . "</h4>";

        echo "<h4 id='receiptprice'>Vat: " . $_SESSION['Vat @ 10%'] . "</h4>";

        echo "<h4 id='receiptprice'>Discount: " . $_SESSION['Discount @ 5%'] . "</h4>";

        echo "<h4 id='receiptprice'>Total: " . $_SESSION['total'] . "</h4>";

      
        

        echo "<h2>Thank You For Your Order!</h2>";

        

        

        ?>
         
          <br/>
        </p>
        </div>
</html>