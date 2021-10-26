<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
mysqli_select_db($link, 'dulieu');

if (isset($_POST['delete'])) {
    $checkbox = $_POST['checkbox'];
    for ($i = 0; $i < count($checkbox); $i++) {
        $del_id = $checkbox[$i];
        $sql = "DELETE FROM employee WHERE id = '$del_id'";
        $result = mysqli_query($link, $sql);
    }
    if ($result) {
        header("Location:Xoatatca.php");
    }
}
mysqli_close($link);
