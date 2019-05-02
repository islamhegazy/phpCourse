<!DOCTYPE html>
<html>
<head>
	<title>Strings</title>
</head>
<body>
<?php 
//string 
$color = "red";
;
echo "{$color} is my Fav<br>";

$fName = "islam ";
$lName = "hegazy";

$combine  = $fName ;
$combine .=$lName;
echo "{$combine} <br>";
?>
<hr>
Uppercase first letter: <?php echo ucfirst($combine) ?><br>
Uppercase first letter in each word: <?php echo ucwords($combine) ?><br>
lowercase first letter in each word: <?php echo strtolower($combine) ?><br>
Uppercase all letters : <?php echo strtoupper($combine) ?><br>

<hr>
Repeat: <?php echo str_repeat($combine, 3)?>;<br>
Make subtring from one point to another: <?php echo substr($combine, 3,5)?><br>
Find postion of any specific word: <?php echo strpos($combine, "hegazy")?><br>
Find character : <?php echo strchr($combine, "h");?>

<hr>
Total Lenght of string: <?php echo strlen($combine)?><br>
Trim the space before B and After D:  <?php echo "A" . trim(" B C D ") . "E"?>;<br>
Find specific and show after:<?php echo  strstr($combine, "ga")?>;<br>
Replace Word with new:<?php echo  str_replace("ga", "zz", $combine)?>;<br>
</body>
</html>