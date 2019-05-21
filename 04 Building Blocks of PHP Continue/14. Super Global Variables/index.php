
<!DOCTYPE html>
<html>
   <head>
      <title>14. Super Global Variables</title>
   </head>
   <body>
    <?php 
    /* they always accessible regardless og their scope and
    you can access them from any function ckass ir file without 
    having to do anything special and they can accessible 
    throughout our php file and there is 9 type of theme.

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_FILES
    $_ENV
    $_SESSION
      
    // User Request on web | 3 most important Super Global 
    $_POST --> used in web forms
    $_GET --> urls/links(user searching on a web)
    $_COOKIE --> give user result by his pervious track
    */

    /*
    $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

    PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
    */

    $x = 75; 
    $y = 25;
    function addition() { 
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 

    }
    addition($GLOBALS); 
    print_r($GLOBALS);
    echo "<br>"; 
    echo $z; 
     ?>  
   </body>
</html>