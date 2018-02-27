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

            
            
   
            
                echo "<h4 id='NAME'>Name: " . $_SESSION["NAME"] . "<h4/>"; 
           
                
                echo "Email: " . $_SESSION["EMAIL"].".";
            
                ?>
                <br/>
                <?php
                echo "Total: &euro; " . $_SESSION["total"].".";
                
                
          ?>
         
          <br/>
        </p>
        </div>
</html>