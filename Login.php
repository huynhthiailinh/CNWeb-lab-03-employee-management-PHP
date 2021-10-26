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
        <form action="Xulilogin.php" method="post">
            <div class="title">Login</div>
            <div class="txt_input">
                <div>Username</div>
                <input class="txt" type="text" name="username" id="">
            </div>
            <div class="txt_input">
                <div>Password</div>
                <input class="txt" type="password" name="password" id="">
            </div>
            <div class="btn_input">
                <input class="btn" type="submit" value="OK">
                <input class="btn" type="reset" value="Reset">
                <a class="btn" href="./index.html">Guest</a>
            </div>
        </form>
    </div>
</body>
<style>
    body {
        display: flex;
        justify-self: center;
        align-items: center;
        height: 100vh;
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
        text-decoration: none;
        font-size: 12px;
    }
</style>

</html>