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

        <h1 class="mainheading">Purchase Receipt</h1>

                
<p>
        <?php

        // Echo session variables that were set on previous page
 echo "Name:  " . $_SESSION["total"] . ".";
?>
<br/>
</p>
<p>
        <?php

        // Echo session variables that were set on previous page
  echo "Email: " . $_SESSION["total"] . ".";
  ?>
  <br/>
  </p>
  <p>
        <?php

        // Echo session variables that were set on previous page
  
        echo "Total price: " . $_SESSION["total"] . ".";
       

        ?>
        <br/>
        </p>
        <p>
         <a href="../homepage.html" type="submit" class="btn btn-success">Homepage</a>
         
         </p>
</center>
    </body>

</html>