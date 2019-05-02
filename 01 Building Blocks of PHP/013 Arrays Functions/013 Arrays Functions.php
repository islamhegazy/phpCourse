<!DOCTYPE html>
<html>
<head>
	<title>013 Arrays Functions</title>
</head>
<body>
<?php 
$names= array('islam','ahmed','ali'); 
array_pop($names); //The array_pop() function deletes the last element of an array.
array_push($names, "saied"); // add element at last element of an array.
print_r($names) //print_r — Prints human-readable information about a variable

?><br>
<hr>
total number of this array:<?php echo count($names); ?><br> <!--total number of this array-->
Max of array:<?php echo max($names); ?><br>
Min of array:<?php echo min($names); ?><br>
is array has value of ahmed:<?php echo in_array("ahmed", $names); ?><br>
sort array:<?php echo sort($names); ?><br> <!-- sort arrays in ascending order -->
<?php print_r($names);?>
rsort array:<?php echo rsort($names); ?><br> <!-- sort arrays in descending  order -->
<?php print_r($names);?>

<hr>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old. <br>";
print_r(array_keys($age));
?><br><br>

ksort array  according to the key:<?php echo ksort($age); ?><br> <!-- sort associative arrays in ascending order, according to the key -->
<?php print_r($age);?><br><br>

krsort array  according to the key:<?php echo krsort($age); ?><br> <!-- sort associative arrays in descending order, according to the key -->
<?php print_r($age);?><br><br>

arsort array according to the value:<?php echo arsort($age); ?><br> <!-- sort associative arrays in descending order, according to the value -->
<?php print_r($age);?><br><br>

The implode:<?php echo implode(" ",$age); ?><br> <br><!--  returns a string from the elements of an array-->

<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?><!--   breaks a string into an array.-->
</body>
</html> 