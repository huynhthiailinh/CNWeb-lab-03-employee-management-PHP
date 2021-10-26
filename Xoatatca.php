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
    <form action="Xulixoatatca.php" method="post">
        <table>
            <caption>Nhân viên</caption>
            <tr>
                <th>Mã nhân viên</th>
                <th>Tên nhân viên</th>
                <th>Mã phòng ban</th>
                <th>Địa chỉ</th>
                <th><input type="checkbox" name="" id="checkAll" onclick="toggle(this)">Chọn tất cả</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td class='center'><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td class='center'><?php echo $row["department_id"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td class='center'><input type='checkbox' name='checkbox[]' class="checkItem" value='<?php echo $row['id']; ?>'></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <input class="btn" type="submit" name="delete" value="Xóa những nhân viên đã chọn" onclick="return confirm('Are you sure?')" />
    </form>
    <script>
        function toggle(source) {
            checkboxes = document.getElementsByClassName('checkItem');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
        // document.getElementById("checkAll").click(function() {
        //     if (this.is(":checked"))
        //         document.getElementsByClassName('checkItem').prop('checked', true);
        //     else
        //         document.getElementsByClassName('checkItem').prop('checked', false);
        // })
    </script>
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

    form {
        width: 100%;
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

    .center {
        text-align: center;
    }

    .btn {
        background-color: #6B4F4F;
        color: #FFF3E4;
        font-weight: bold;
        height: 30px;
        font-size: 12px;
        line-height: 30px;
        text-decoration: none;
        width: 200px;
        text-align: center;
        border-radius: 5px;
        margin-top: 10px;
    }

    .btn:hover {
        color: #EED6C4;
        cursor: pointer;
    }
</style>

</html>

<?php
mysqli_free_result($result);
mysqli_close($link);
