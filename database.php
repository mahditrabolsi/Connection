<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$db = mysqli_connect($servername, $dbusername, $dbpassword, "Connection");
if(isset($_SESSION['username'])){
if ($_SESSION['username'] != null)
    $username = $_SESSION['username'];

}
else {
    header("location:error.html");
    exit;
}
$sql = "SELECT * FROM Users WHERE Username = '$username'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


function submitpost()
{
    global $username, $db;

    $textpost = mysqli_real_escape_string($db, $_POST['textarea']);
    $sql = "INSERT INTO `Posts` (username,Text,DOC) VALUES ('$username','$textpost',now())";
    mysqli_query($db, $sql);
}
function getposts($text)
{
    global $db;
    $sql = "SELECT * FROM Posts WHERE username = '$text' order by DOC";
    $result = mysqli_query($db, $sql);
    $sql = "SELECT * FROM Users WHERE username = '$text' order by DOC";
    $user = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $phpdate = strtotime( $row['DOC'] );
            $mydate = date( 'Y-m-d H:i:s', $phpdate );
            echo $user['FirstName'] . ' ' . $user['LastName'];
            echo "<p class='right'>".$mydate."</p>";
            echo '<br>';
            echo "@".$user['Username'].'<br>';
            echo "<label style=margin-top:5%;>" . $row['Text'] . "<hr><br></label>";
        }
    }
}
function submitsearch($text)
{
    global $username, $db;
    $text=mysqli_real_escape_string($db,$text);
    $sql = "SELECT username FROM Users WHERE username like '%$text%' order by DOC";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<hr><a href=user.php?uname=".$row["username"]." style=margin-top:5%;>" . $row['username'] . "</a><hr><br>";
        }
    }else echo '<label>no results found</label>';
}

