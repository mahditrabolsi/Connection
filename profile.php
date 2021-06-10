<?php include 'database.php'; ?>

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

      <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['textarea']!='')submitpost();
        getposts($username);
        ?>
      </div>
      <div class="column phone">
        <h1><label>Share your Thoughts</label></h1>
        <form action="profile.php" method="post">
          <textarea name="textarea" id="text" maxlength="250" rows="5"></textarea>
          <button class="post" type="submit">Submit</button>
        </form>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['textarea']=='')echo "<h3 style='color:red'>post can't be empty</h5>";
        
        ?>
      </div>
    </div>
  </section>
</body>
