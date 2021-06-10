<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";

$db = mysqli_connect($servername, $dbusername, $dbpassword, "Connection");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['ConfirmPassword']);
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $DOB = mysqli_real_escape_string($db, $_POST['DOB']);


    $sql = "SELECT Username FROM Users WHERE Username = '$username'";
    $result = mysqli_query($db, $sql);


    $count = mysqli_num_rows($result);


    if ($count == 0) {

        $_SESSION['login_user'] = $username;
        if (($password == $password2)) {

            $hash = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

   
            $sql = "INSERT INTO `Users`VALUES ('$username','$email',  
                '$hash','$FirstName','$LastName','$DOB', curdate())";

            $result = mysqli_query($db, $sql);
            if ($result){
                
                header("location: Login.php");exit;
                        }
                else
                echo $result . "hello";
        }
    } else {
        $error = "Your Login Name or Password already exists";
        echo $error;
    }
}
?>
<html>

<head>
  <title>Connection</title>
  <link rel="icon" href="images/connection.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <script type="text/javascript" src="js/main.js"></script>
  <div class="Logo">
    <img src="images/connection.png">

  </div>
  <div class="Title">
    
    <h1>Welcome to Connection</h1>
    <h2>Your Portal to The World </h2>

  </div>
  <div class="center div">
    <form action="" method="POST">
      <div class="Field" >
        <input type="text"  name="username" placeholder="username" required="required">
      </div>
      <div class="Field" >
        <input type="email"  name="Email" placeholder="Email" required="required">
      </div>
      <div class="Field">
        <input type="password" name="password" id="password"  placeholder="Password" required="required" >
      </div>
      <div class="Field">
        <input type="password" name="ConfirmPassword" id="confirm_password"  placeholder="Confirm Password" required="required" >
      </div>
      
      <div class="Field" >
        <input type="text"  name="FirstName" placeholder="FirstName" required="required">
      </div>
      <div class="Field" >
        <input type="text"  name="LastName" placeholder="LastName" required="required">
      </div>
      <div class="Field" >
        <input type="date"  name="DOB" required="required">
      </div>
      <div>
        <button type="submit" id="submit" class="btn">SignUp</button>
      </div>
      
    </form>
    <div class="Signup">
      <h3>Already Have An Account?<a href="Login.php" >Log In</a></h3>
     
    </div>
  </div>

</body>

</html>