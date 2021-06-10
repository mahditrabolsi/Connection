<?php include 'database.php';

if (isset($_GET['uname']))
  $user = $_GET['uname'];

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

<input type="submit" value="follow">
      <div class="column main">

        <?php
        global $db;
        $sql = "SELECT * FROM Users WHERE username = '$user'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) == 1) {

          $row = mysqli_fetch_assoc($result);
          echo "<h1 style=margin-top:5%;>" . $row['FirstName'] . " " . $row['LastName'] . "<br></h1>";


          echo "<h2>@" . $user . "</h2><br><hr>";

          getposts($user);
        }

        ?>
      </div>

    </div>
  </section>
</body>