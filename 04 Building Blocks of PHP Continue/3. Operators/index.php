<!DOCTYPE html>
<html>
<head>
	<title>3. Operators</title>
</head>
<body>
<?php 
$a=1;
$b=1;
$c=2;
$d=2;
$e=3;
if ($a == $b and $c == $d){ // or &&
	echo "all equal<br>";
}
if ($a == $b or $c == $e){ // or ||
	echo "all not equal<br>";
}

 ?>
<hr>
prefix: <?php $a=5; echo ++$a;  ?> <br>
postfix:<?php $b=5; echo $b++; ?> <br>
<hr>
Ternary operator: condition ? true : false;<br>
<?php 
$a=1;
$b=2; 
$result = $a > $b ? "a is greater than b" : "b is greater than a";
echo $result; ?>
</body>
</html> 