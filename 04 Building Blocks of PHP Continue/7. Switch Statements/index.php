<!DOCTYPE html>
<html>
<head>
	<title>7. Switch Statements</title>
</head>
<body>
<?php 
$weather=null;
switch ($weather) {
	case 'sunny':
		echo "the weather is quite";
		break;
	case 'rainy':
		echo "it's raining outside";
		break;
	default:
		echo "no news about weather";
		break;
}
 ?>
 <hr>
 <?php 
$Restricted_Area='office boy';
 switch ($Restricted_Area) {
 	case 'Guard':
 		echo "Permission Granted";
 		break;
 	case 'office boy':
 	case 'public':
 	case 'media':
 		echo "Permission Denied";
 		break;
 	default:
 		echo "No Restricted_Area";
 		break;
 }
  ?>
</body>
</html> 