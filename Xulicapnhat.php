<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
mysqli_select_db($link, 'dulieu');

$department_id = $_POST['department_id'];
$name = $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE department SET name = '$name', description = '$description' where id = $department_id";
$result = mysqli_query($link, $sql);

header("Location:Capnhat.php");

mysqli_free_result($result);
mysqli_close($link);
