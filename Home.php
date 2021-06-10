<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";


$db = mysqli_connect($servername, $dbusername, $dbpassword, "Connection");
$username = $_SESSION['username'];

$sql = "SELECT * FROM Users WHERE Username = '$username'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="profiles.css" />

  <title>Profile</title>
</head>

<body>

  <section class="container">

    <div class="card">

      <label style="font-size: 6mm;">
        <?php
        echo $row['FirstName'] . ' ' . $row['LastName']; ?></label>
      <br>
      <label style="font-size: 4mm;">@<?php echo $_SESSION['username'] ?>
      </label>
      <br>
    </div>
    <div class="row">
      <div class="column">

        <ul class="side wrapper box1">
          <li><a href="profile.php">PROFILE</a></li>
          <li><a href="Home.php">HOME</a></li>
          <li><a href="search.php">SEARCH</a></li>
          <li><a href="Settings.php">SETTINGS</a></li>
        </ul>


      </div>


      <div class="column main">

        <?php


        ?>
      </div>
      <div class="column phone">
        <h1><label>YOU MIGHT LIKE</label></h1>
        <ul class="phonelist">
          <li><a href="#">JOE BIDEN</a></li>
          <li><a href="">DONALD TRUMP</a></li>
          <li><a href="">MAHDI</a></li>
          <li><a href="">SOME USER</a></li>
        </ul>

      </div>
    </div>
  </section>
</body>

</html>