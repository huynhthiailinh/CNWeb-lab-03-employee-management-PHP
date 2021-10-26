<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
mysqli_select_db($link, 'dulieu');
$sql = "SELECT * FROM department";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Xulicapnhat.php">
        <table>
            <caption>Phòng ban</caption>
            <tr>
                <th>Mã phòng ban</th>
                <th>Tên phòng ban</th>
                <th>Mô tả</th>
                <th>Danh sách nhân viên</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                echo '<tr>
                    <td class="center">' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['description'] . '</td>
                    <td class="center"><a href="Formcapnhat.php?department_id=' . $row['id'] . '">Sửa</a></td>
                </tr>';
            }
            ?>

        </table>
    </form>
</body>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #483434;
    }

    table {
        width: 100%;
    }

    caption {
        font-weight: bold;
        font-size: 20px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    th {
        background-color: #EED6C4;
    }

    td.center {
        text-align: center;
    }
</style>

</html>

<?php
mysqli_free_result($result);
mysqli_close($link);
