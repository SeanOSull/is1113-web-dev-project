<?php

// Start the session

session_start();

 ?>
 
<!DOCTYPE html>

<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="utf-8">
        <title>RECEIPT</title>
           <link rel="stylesheet" href="Ebus.css" type="text/css" />
   
    </head>

    <body>
        
     <h1 class="mainheading"> Purchase Receipt</h1>
      
        
        <p>
            <div class="receipt">

      

    
                

        <?php

        $_SESSION["NAME"] = $_POST["NAME"];

        $_SESSION["EMAIL"] = $_POST["EMAIL"];

    
        

        echo "<h4 id='NAME'>Name: " . $_SESSION['NAME'] . "</h4>";

        echo "<h4 id='EMAIL'>Email: " . $_SESSION['EMAIL'] . "</h4>";

        


       
       
       
       
       
       
        echo "<h4 id='total'>Total: $" . $_SESSION['total'] . "</h4>";

      
        

        echo "<h2>Thank You For Your Order!</h2>";


        ?>
         
          <br>
        
        
        </div>
        <br>
        <p>
         <input type="button" name="Homepage" value="Homepage" onClick="window.location.href = '../homepage.html'" />
         </p>
         
         
        </body>
</html>