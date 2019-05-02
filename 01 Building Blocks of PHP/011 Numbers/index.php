<!DOCTYPE html>
<html>
<head>
	<title>011 Numbers</title>
</head>
<body>
<?php 
$n1 = 3;
$n2 = 4;
$n3 = 3.65478;
?><br>

<?php echo $n3 +9-6; ?><br>
ceil:<?php echo ceil($n3); ?><br>
floor:<?php echo floor($n3); ?><br>
floor:<?php echo floor($n3); ?><br>
<?php echo "is {$n1} :integer". is_integer($n1); ?><br> <!-- 1 mean true or yes-->
<?php echo "is {$n3} :integer". is_integer($n3); ?><br> <!--nothing mean false or no-->
<?php echo "is {$n3} :float". is_float($n3); ?><br>
<?php echo "is {$n1} :numaric". is_numeric($n1); ?><br> 
<?php echo "is {$n3} :numaric". is_numeric($n3); ?><br> 
convert  decimal to binary: <?php echo decbin($n1); ?><br> 
convert  binary to decimal: <?php echo bindec(11); ?><br> 
find square roo of any number: <?php echo sqrt(8); ?><br> 
find absolute value between two numbers: <?php echo abs(-50+100); ?><br> 
find power of: <?php echo pow(2,2); ?><br> 
find reminder: <?php echo fmod(7, 6); ?><br> 
random number:<?php echo rand(); ?><br> 
rand number range :<?php echo rand(1,9); ?><br> 
</body>
</html>