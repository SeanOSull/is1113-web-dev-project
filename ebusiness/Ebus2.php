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

        <script type="text/javascript" src="ebus2_validator.js"></script>

    </head>

    <body>

        <h1 class="mainheading">Please enter your payment details</h1>
      
        <form method="POST" action="Ebus3.php">
        <br/>
        <p>
            
            
            
          <label for="User_name">Full Name:</label>
        <label for="User_name"</label>
                <input id="User_name" placeholder="Cardholders Name"
                <br/>
            </p>
            <p>
            <br/>
          <label for="User_email">Email Address:</label>
        <label for="User_email"</label>
                <input id="User_email" placeholder="Cardholders Email"
              
</p>
            <br/>
<br/>

        

       

<p>
                    <label for="user_pin">Pin:</label>

                    

                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

<br/>
</p>

                  <button type="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>

            </form>

            <br/>
            
            <button onClick="enablebtnPurchase">Validate</button>

            <a href="../homepage.html" class="btn btn-success">Homepage</a>
            <a href="../ebusiness/Ebus1.php" class="btn btn-dark">Back</a>
             <a href="Ebus3.php" class="btn btn-dark">Ebus 3</a>
        
            <?php

            // Set session variables

            $_SESSION["total"] = $_POST["total"];
            

            ?>
            
            <?php

            // Set session variables

            $_SESSION["User_name"] = $_POST["User_name"];
            

            ?>

        <?php

            // Set session variables

            $_SESSION["User_email"] = $_POST["User_email"];
            

            ?>
    </body>

</html>