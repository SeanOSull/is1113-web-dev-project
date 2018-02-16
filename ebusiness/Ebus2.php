<?php

// Start the session

session_start();

?>

<!DOCTYPE html>

<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       <style>
       
       
          h1 {background:red;font-:45px;}
        
       </style>
      <center>
        <title>Enter Details</title>

        

        <!--jQuery-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script type="text/javascript" src="ebus2_validator.js"></script>

    </head>

    <body>

        <h1>Please enter your payment details</h1>
        
        <br/>
        
          <label for="User_name">Full Name:</label>
        <label for="User_name"</label>
                <input id="User_name" placeholder="Cardholders Name"
                <br/>
            
            <br/>
          <label for="User_email">Email Address:</label>
        <label for="User_email"</label>
                <input id="User_email" placeholder="Cardholders Email"

            <br/>


        

        

            <form action="Ebus3.php" method="POST">



                    <label for="user_pin">Pin:</label>

                    

                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

<br/>

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>

              

            </form>

            <br/>
            
            <button onClick="validateDetails()">Validate</button>

            <a href="../homepage.html" class="btn btn-success">Homepage</a>
             <a href="../ebusiness/Ebus1.php" class="btn btn-dark">Back</a>
<a href="../ebusiness/Ebus3.php" class="btn btn-success">Bus3</a>
            <?php

            // Set session variables

            $_SESSION["total"] = $_POST["total"];

            ?>

        </center>

    </body>

</html>