<?php
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
if ($user == "" || $pass == "") {
    header("Location:Login.php");
} else {
    $link = mysqli_connect('localhost', 'root', '') or die('Could not connect!');
    mysqli_select_db($link, 'dulieu');
    $sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 0) {
        header("Location:Login.php");
    } else {
        header("Location:indexa.html");
    }
    mysqli_free_result($result);
    mysqli_close($link);
}
