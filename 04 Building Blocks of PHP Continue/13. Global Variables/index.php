
<!DOCTYPE html>
<html>
   <head>
      <title>13. Global Variables</title>
   </head>
   <body>
    <?php 
      $myNumber = 44453; // global scope
      function  Addation(){
       $a=5; // local value
       $b=2;
       $c= $a+$b;

       global $myNumber; // use global into function
       echo $myNumber."<br>";

       echo $a."<br>";
       echo "Addation is {$c}<br>";
      };

     Addation();

     ?>
   </body>
</html>