<?php
 $errorMessage = "";
 
 if ($_SERVER["REQUEST_METHOD"]=="POST"){
     session_start();
     require_once('dbconnect.php');
     
     $username = $_POST["userName"];
     $password = $_POST["userPassword"];
     
     $sql = "SELECT * FROM users WHERE username= '$username' AND password = '$password' ";
     $result = mysqli_query($conn, $sql);
     $check = mysqli_fetch_array($result);
     
     if(isset($check)){
         $_SESSION['id'] = session_id();
         $_SESSION['idLoggedIn'] = 'true';
         $_SESSION['username'] = $check["username"];
         
         header('Location: info.php');
     }
     else{
        $errorMessage = 'Login failed. Please try again.';
      }
   }
?>
     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="validate.js"></script>  
</head>
<body>
    <!-- This will include the header info, including a menu -->
    <?php include 'header.php'; ?>
   <br>
   <div id="errorMessage">
       <?php 
           echo $errorMessage
        ?> 
   </div>
   <br>
   <form name="userForm" method="post" action="login.php">
    <!-- Get the username-->
    <label for="userName" id="iblUserName">User Name:</label>
    <input type="text" name="userName" id="userName">
    <br>
    <br>
    <label for="userPassword" id="IblPassword">Passward: </label>
    <input type="password" name="userPassword" id="userPassword">
    <br>
    <br>
    <button type="submit">Submit</button>
</form>

  <!--This will include the footer info -->
  <?php include 'footer.php'; ?>
</body>
</html>
