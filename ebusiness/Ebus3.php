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
            h1 {background-color:Red}
        </style>

    </head>

    <body>

        <h1>RECEIPT</h1>

                

        <?php

        // Echo session variables that were set on previous page

        echo "Total is " . $_SESSION["total"] . ".";

        ?>
        <br/>
         <a href="../homepage.html" class="btn btn-success">Homepage</a>
</center>
    </body>

</html>