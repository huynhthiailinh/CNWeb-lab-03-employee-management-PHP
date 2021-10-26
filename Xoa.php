<?php
$link = mysqli_connect('localhost', 'root', '') or die('Could not connect');
mysqli_select_db($link, 'dulieu');
$sql = "SELECT * FROM employee";
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
    <table>
        <caption>Nhân viên</caption>
        <tr>
            <th>Mã nhân viên</th>
            <th>Tên nhân viên</th>
            <th>Mã phòng ban</th>
            <th>Địa chỉ</th>
            <th>Xóa</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>
                    <td class="center">' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td class="center">' . $row['department_id'] . '</td>
                    <td>' . $row['address'] . '</td>
                    <td class="center"><a href="Xulixoa.php?employee_id=' . $row['id'] . '">Xóa</a></td>
                </tr>';
        }
        ?>
    </table>
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
