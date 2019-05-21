
<!DOCTYPE html>
<html>
   <head>
      <title>12. Local Variables</title>
   </head>
   <body>
    <?php 
      function  Addation(){
       $a=5; // local value
       $b=2;
       $c= $a+$b;
       echo $a."<br>";
       echo "Addation is {$c}<br>";
      };
     Addation();
     ?>
   </body>
</html>