<?php
$deparment_id = $_REQUEST['department_id'];
$link = mysqli_connect('localhost', 'root', '') or die('Khong the ket noi den CSDL MySQL');
mysqli_select_db($link, 'dulieu');
$sql = "SELECT * FROM department WHERE id = $deparment_id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
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
    <div class="wrapper">
        <form action="Xulicapnhat.php?department_id=<?php echo $row['id']; ?>" method="post">
            <div class="title">Chỉnh sửa phòng ban</div>
            <div class="txt_input">
                <div>Mã phòng ban</div>
                <input class="txt" type="text" name="department_id" id="" readonly value="<?php echo $row['id']; ?>">
            </div>
            <div class="txt_input">
                <div>Tên phòng ban</div>
                <input class="txt" type="text" name="name" id="" value="<?php echo $row['name']; ?>">
            </div>
            <div class="txt_input">
                <div>Mô tả</div>
                <textarea name="description" id="" cols="50" rows="10"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="btn_input">
                <input class="btn" type="submit" value="OK">
                <input class="btn" type="reset" value="Reset">
            </div>
        </form>
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

    .wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
        align-self: center;
    }

    form {
        width: 450px;
        background: #EED6C4;
        padding: 30px;
    }

    .title {
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 25px;
        text-align: center;
    }

    .txt_input {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
    }

    .txt {
        width: 300px;
    }

    .btn_input {
        display: flex;
        justify-content: center;
    }

    .btn {
        padding: 8px;
        background-color: #6B4F4F;
        cursor: pointer;
        color: #FFF3E4;
        font-weight: 700;
        border-radius: 5px;
        margin: 10px 8px 0;
    }
</style>

</html>