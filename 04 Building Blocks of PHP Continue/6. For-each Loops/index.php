<!DOCTYPE html>
<html>
<head>
	<title>6. For-each Loops</title>
</head>
<body>
<?php 
// here we do not have to define condation or initial value
$numbers = array(8, 5, 6, 44, 55);
foreach ($numbers as $num ) {
	echo "Numbers: {$num}<br>";
}
 ?>
<hr>

<?php 
$foods =array(
		"item_number"=> 1050,
		"name"=>"pizza",
		"regin"=>"Italy"
		);
foreach ($foods as $key => $value) {
	echo "{$key} is:{$value}<br>";
}
 ?>
<hr>

<?php 
$foods =array(
		"item_number"=> 1050,
		"name"=>"pizza",
		"regin"=>"Italy",
		"package_price"=> 1.5
		);
foreach ($foods as $key => $value) {
	$Data = ucwords( str_replace("_", " ",$key) );
	if ($key == "package_price") {
		//is_bool , isset,empty ==> null ,is_null,is_int
		if( is_int($value)){ 
			$value; 
		}else{
			$value = " can not be determined";
		}
	}
	echo "{$Data} is:{$value}<br>";
}
 ?>
</body>
</html> 