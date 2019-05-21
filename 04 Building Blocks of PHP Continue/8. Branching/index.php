<!DOCTYPE html>
<html>
   <head>
      <title>8. Branching statements</title>
   </head>
   <body>
      <h1> Branching statements</h1>
      <h2>or decision making statement</h2>
      <?php 
         $Names = array('islam', 'ali', 'ahmed', 'mohamed');
         for ($i=1; $i < sizeof($Names) ; $i++) { 
         	echo "{$Names[$i]}<br>";
         }
           ?>
      <hr>
      <?php 
         $Names = array('islam', 'ali', 'ahmed', 'mohamed');
         for ($i=0; $i < sizeof($Names) ; $i++) { 
         	if ($Names[$i] == "ahmed") { //remove ahmed
         		continue;
         	}
         	echo "{$Names[$i]}<br>";
         }
         
           ?>
      <hr>
      <?php 
         $Names = array('islam', 'ali', 'ahmed', 'mohamed');
         for ($i=0; $i < sizeof($Names) ; $i++) { 
         	if ($Names[$i] == "ahmed") { //until ali
         		break;
         	}
         	echo "{$Names[$i]}<br>";
         }
         
           ?>
   </body>
</html>