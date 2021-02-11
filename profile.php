<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="profiles.css" />

  <title>Profile</title>
</head>

<body>
  <section class="container">
    <div class="column">

      <ul>
        <li><a href="#">PROFILE</a></li>
        <li><a href="">HOME</a></li>
        <li><a href="">SEARCH</a></li>
        <li><a href="">SETTINGS</a></li>
      </ul>


    </div>


    <div class="card">

      <label style="font-size: 6mm;">Mahdi Trabolsi</label>
      <br>
      <label style="font-size: 4mm;">@mahdi_trabolsi
      </label>
      <br>
      <br>
      <br>

    </div>
    <div class="column">

      <?php

      for ($i = 0; $i < 100; $i++) {
        echo "<label><br>hello<hr><br></label>";
      }
      ?>
    </div>
    <div class="column">
      <h1><label>YOU MIGHT LIKE</label></h1>
      <ul>
        <li><a href="#">JOE BIDEN</a></li>
        <li><a href="">DONALD TRUMP</a></li>
        <li><a href="">MAHDI</a></li>
        <li><a href="">SOME USER</a></li>
      </ul>

    </div>
  </section>
</body>

</html>