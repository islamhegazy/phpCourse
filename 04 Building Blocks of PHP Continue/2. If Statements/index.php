<!DOCTYPE html>
<html>
<head>
	<title>2. If Statements</title>
</head>
<body>
<?php 
$weather = "sunny";
if ($weather =="sunny") {
	echo "weather is pleasent";
}else{
	echo "weather is not pleasent";
}
 ?>
<hr>
<?php 
$a=4;
$b=2;
$c= "can no be out";
echo $c . "<br>";
if ($b > 0) { // if true the $c will change else not change
	$c = $a /$b;
}
echo $c;

 ?>

</body>
</html> 