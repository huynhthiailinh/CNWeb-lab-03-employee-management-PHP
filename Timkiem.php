<!DOCTYPE html>
<html>

<head>
    <meta content="noindex, nofollow" name="robots">
</head>

<body>
    <div class="main">
        <div class="first">
            <form action="Xulitimkiem.php" id="#form" method="post" name="#form">
                <label for="properties">Chọn một thuộc tính muốn tìm kiếm:</label>
                <select name="properties">
                    <option value="id">Mã nhân viên</option>
                    <option value="name">Tên nhân viên</option>
                    <option value="department_id">Mã phòng ban</option>
                    <option value="address">Địa chỉ nhân viên</option>
                </select>
                <input name="value" type='text'>
                <input id='btn' name="submit" type='submit' value='Gửi đi'>
                <?php
                if (isset($_POST['submit'])) {
                    $key = $_POST['properties'];
                    $value = $_POST['value'];
                    if (!empty($input)) {
                        header("Location: http://localhost:8080/cnweb/Xulitimkiem.php?key=$key&value=$value");
                    } else {
                        header("Location: http://localhost:8080/cnweb/Timkiem.php");
                        echo "Please fill at least one field.....!!!!!!!!!!!!";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
<style>
    body {
        display: flex;
        justify-self: center;
        align-items: center;
        height: 550px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #FFF3E4;
    }

    div.main {
        width: 100%;
        display: flex;
        justify-content: center;
        align-self: center;
    }

    div.first {
        background: #EED6C4;
        padding: 30px;
    }

    input {
        margin-bottom: 25px;
    }

    #btn {
        padding: 8px;
        margin-top: 10px;
        background-color: #6B4F4F;
        cursor: pointer;
        color: #FFF3E4;
        font-weight: 700;
        border-radius: 5px;
    }
</style>

</html>