<?php include 'database.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="profiles.css" />

    <title>Search</title>
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


            <div class="column phone">

                <h1><label>Search</label></h1>
                <form action="search.php" method="post">
                    <input type="text" name="searchtext" id="text" maxlength="30" />
                    <button class="post" type="submit">Submit</button>
                </form>
            </div>
            <div class="column">

            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['searchtext'] != '') submitsearch($_POST['searchtext']); ?>

            </div>
        </div>
       
    </section>
</body>