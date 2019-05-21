

<!DOCTYPE html>
<html>
   <head>
      <title>1. Form</title>
   </head>
   <body>
    <form action="index.php" method="post">
      <div>
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username">
      </div>
      <br>
      <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
      </div>
      <br>
        <input type="submit" name="submit" value="submitted">
    </form>

     <?php 

      if(isset($_POST["submit"])){

        $Username = $_POST["Username"];
        $password = $_POST["password"];

        if($Username == "islam" && $password =="123"){
          echo "Welcome: {$Username}";
        }
        else{
          echo "try again";
         }
      }else{
        echo "Login Reqiured";
      }

     ?>

   </body>
</html>