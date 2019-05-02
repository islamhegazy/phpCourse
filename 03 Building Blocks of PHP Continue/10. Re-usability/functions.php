<!DOCTYPE html>
<html>
   <head>
      <title>9. User Define Functions</title>
   </head>
   <body>
    <?php 

      function addation($n1,$n2){
        $result = $n1 + $n2;
        echo "the result is: {$result}<br>";
      };
   
      function addation_using_return($n1,$n2){
        $result = $n1 + $n2;
        return $result;
      };
     ?>

   </body>
</html>