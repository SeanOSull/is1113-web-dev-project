<?php

// Start the session

session_start();

 ?>

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
      
        <title>Enter Details</title>

        

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
     
                <input id="EMAIL" name="EMAIL" placeholder="Cardholders Email">
              
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



            <a href="../ebusiness/Ebus1.php" class="btn btn-dark">Back</a>
             
       
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