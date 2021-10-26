<?php
$department_id = $_REQUEST["department_id"];
$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
mysqli_select_db($link, "dulieu");
$sql = "SELECT * FROM employee WHERE department_id = $department_id";
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
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td class='center'>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td class='center'>" . $row["department_id"] . "</td>
                    <td>" . $row["address"] . "</td>
                </tr>";
        }
        ?>
    </table>
    <a class="return" href="http://localhost:8080/cnweb/XemthongtinPB.php">Quay lại</a>
</body>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #483434;
        flex-direction: column;
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

    a.return {
        display: block;
        background-color: #6B4F4F;
        color: #FFF3E4;
        font-weight: bold;
        height: 30px;
        font-size: 12px;
        line-height: 30px;
        text-decoration: none;
        width: 100px;
        text-align: center;
        border-radius: 5px;
        margin-top: 10px;
    }

    a.return:hover {
        color: #EED6C4;
        cursor: pointer;
    }
</style>

</html>

<?php
mysqli_free_result($result);
mysqli_close($link);
