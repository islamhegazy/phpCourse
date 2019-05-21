<?php print_r($_POST); ?>

<?php 

$Username = $_POST["Username"];
$password = $_POST["password"];
if(isset($_POST["submit"])){
    echo "<br> Welcome: {$Username} <br>";
 
}
if(isset($Username) && !empty($Username) ){
    echo "username is set with the name of: {$Username}<br>";
 
}else{
    echo "no username<br>";
}
if(isset($password) && !empty($password) ){
    echo "password is set with: {$password}";
 
}else{
    echo "no password";
}
?>