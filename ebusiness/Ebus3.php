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

        <h1 class="mainheading">RECEIPT</h1>

                

        <?php

        // Echo session variables that were set on previous page

        echo "Total is " . $_SESSION["total"] . ".";

        ?>
        <br/>
         <a href="../homepage.html" class="btn btn-success">Homepage</a>
</center>
    </body>

</html>