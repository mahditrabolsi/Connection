<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="profiles.css" />

  <title>Profile</title>
</head>

<body>
  <section class="container">

    <div class="card">

      <label style="font-size: 6mm;">Mahdi Trabolsi</label>
      <br>
      <label style="font-size: 4mm;">@mahdi_trabolsi
      </label>
      <br>
    </div>
    <div class="row">
    <div class="column">

      <ul class="side wrapper box1">
        <li><a href="#">PROFILE</a></li>
        <li><a href="">HOME</a></li>
        <li><a href="">SEARCH</a></li>
        <li><a href="">SETTINGS</a></li>
      </ul>


    </div>


    <div class="column main">

      <?php

      for ($i = 0; $i < 100; $i++) {
        echo "<label><br>hello<hr><br></label>";
      }
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