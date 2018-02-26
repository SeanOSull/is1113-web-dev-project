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

    </head>

    <body>

     <h1> 
           Perchase Receipt
        </h1>
        
        <p>
            <?php
                //Echo Session variables that were on previous page
                echo "Name: " . $_POST["User_name"];
            ?>
            <br />
            <?php
                //Echo Session variables that were on previous page
                echo "Email Address: " . $_POST["User_email"];
            ?>
            <br />
            <?php
                //Echo Session variables that were on previous page
                echo "Total: &euro; " . $_SESSION["total"].".";
            ?>
        </p>
</html>