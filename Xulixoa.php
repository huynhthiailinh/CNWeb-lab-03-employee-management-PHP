<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
mysqli_select_db($link, 'dulieu');

$employee_id = $_REQUEST['employee_id'];

$sql = "DELETE FROM employee WHERE id = $employee_id";
$result = mysqli_query($link, $sql);

header("Location:Xoa.php");

mysqli_free_result($result);
mysqli_close($link);
