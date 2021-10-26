<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
mysqli_select_db($link, 'dulieu');

$name = $_POST['name'];
$department_id = $_POST['department'];
$address = $_POST['address'];

$sql = "INSERT INTO employee VALUES(NULL, '$name', $department_id, '$address')";
$result = mysqli_query($link, $sql);

header("Location:XemthongtinNV.php");

mysqli_free_result($result);
mysqli_close($link);
