<!DOCTYPE html>
<html>

<head>
  <title>Connection</title>
  <link rel="icon" href="images/connection.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <div >
    <img class="Logo" src="images/connection.png">

  </div>
  <div class="Title">
    
    <h1>Welcome to Connection</h1>
    <h3>Your Portal to The World </h3>

  </div>
  <div class="center div">
    <form action="" method="POST">
      <div class="Field" >
        <input type="email"  name="email" placeholder="Email" required="required">
      </div>
      <div class="Field">
        <input type="password" name="password" placeholder="Password" required="required">
      </div>
      <div>
        <button type="submit" class="btn" value="Log In">Log In</button>
      </div>
      
    </form>
    <div class="Signup">
      <h3>Dont have an Account?  <a href="Signup.php"  >SignUp</a></h3>
     
    </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>


<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = mysqli_connect($servername,$dbusername,$dbpassword,"Connection");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT Username,Password FROM Users WHERE email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

      if($count == 1 && password_verify($mypassword,$row['Password'])) {
         $_SESSION['username'] = $row['Username'];

         header("location: profile.php");
         exit;
      }
   
      else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>