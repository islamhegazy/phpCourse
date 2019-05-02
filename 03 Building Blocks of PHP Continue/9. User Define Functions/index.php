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
    	addation(2,2);
    	addation(2000,2.66);
    	echo "<hr>";
    	function addation_using_return($n1,$n2){
    		$result = $n1 + $n2;
    		return $result;
    	};
	 	echo  "the result is:" . addation_using_return(5,5);
     ?>

    <p> //you can not redefine your function</p>
   </body>
</html>