<?php 
//include("functions.php"); (it mean if u getting the file it's ok and you are not getting it it's also ok )
require("functions.php"); //(you must have to include this file otherwise the file not work)

//include_once() //It prevents including the same file twice.

//require_once()//It prevents including the same file twice.
?>
<!DOCTYPE html>
<html>
   <head>
      <title>10. Re-usability</title>
   </head>
   <body>
    <?php 
     	addation(2,2);
    	addation(2000,2.66);
  		echo "<hr>";
  		echo  "the result is:" . addation_using_return(5,5);
     ?>

   </body>
</html>