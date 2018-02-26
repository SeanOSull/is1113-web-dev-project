<?php

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
        
        <p class="p">
            <?php
               
                echo "Name: " . $_SESSION["User_name"];
            ?>
            <br />
            <?php
              
                echo "Email Address: " . $_SESSION["User_email"];
            ?>
            
            <br />
            <?php
             
                echo "Total: &euro; " . $_SESSION["total"].".";
            ?>
        </p>
</html>