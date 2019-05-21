
<!DOCTYPE html>
<html>
   <head>
      <title>11. Static Variables</title>
   </head>
   <body>
    <?php 
      function  NormalValue(){
        $value=1;
        echo $value."<br>";
        $value++;
      };
      NormalValue();
      NormalValue();
      NormalValue();
      echo " <hr>";
      //Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
      function  StaticValue(){
        static $value=1;
        echo $value." static <br>";
         $value++;
      };
      StaticValue();
      StaticValue();
      StaticValue();
     ?>
   </body>
</html>