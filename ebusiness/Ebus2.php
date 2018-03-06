<?php

// Start the session

session_start();

 ?>

<!DOCTYPE html>

<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   
      
        <title>Enter Details</title>

         <link rel="stylesheet" href="Ebus.css" type="text/css" />

        <!--jQuery-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script type="text/javascript" src="Ebus2_validator.js"></script>
     


    </head>

    <body>

        <h1 class="mainheading">Please enter your payment details</h1>
      
        <form method="POST" action="Ebus3.php">
        <br/>
        <p>
            
            
            
          <label for="NAME">Full Name:</label>
        
                <input id="NAME" name="NAME" placeholder="Cardholders Name">
                <br/>
            </p>
            <p>
            <br/>
          <label for="EMAIL">Email Address:</label>
     
                <input type="email" id="EMAIL" name="EMAIL" placeholder="Cardholders Email">
              
</p>
  <BR>
        

       


                    <label for="user_pin">Pin:</label>

                    

                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

<br/>
</p>

                  <button type="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>

            </form>

            <br/>
            
            <button onClick="validateDetails()">Validate</button>



<input type="button" name="homepage" value="Homepage" onClick="window.location.href = '../homepage.html'"/>



            
             <input type="button" name="back" value="Back" onClick="window.location.href = '../ebusiness/Ebus1.php'"/>
       
            <?php
            $_SESSION["total"] = $_POST["total"];
            ?>
           
            
            
            <?php
             $_SESSION["NAME"] = $_POST["NAME"];
             ?>
             <?php
            $_SESSION["EMAIL"] = $_POST["EMAIL"];
          ?>
          
    </body>

</html>