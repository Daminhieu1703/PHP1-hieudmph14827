<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="B2.php" method="POST">
        <h1>Login</h1>
        <div>
            <label for="">Username</label>
            <input type="text" name="user">
        </div>
        <br>
        <div>
        <label for="">Password</label>
            <input type="password" name="pass">
        </div>
        <br>
        <input type="checkbox" onchange="checkbox()"><span>Remember Me</span><br><br>
        <button type="submit" disabled>Log in</button>
    </form>
    <h1>
        <?php
            if ($_POST['user'] == 'admin' && $_POST['pass'] == '123123' || $_POST['user'] == 'user' && $_POST['pass'] == '123456') {
                echo "Đăng nhập thành công !";
            }else {
                echo "Đăng nhập thất bại !";
            }
        ?>
    </h1>
    <script>
        function checkbox() {
            var checkbox = document.querySelector("input[type=checkbox]");
            var button = document.querySelector("button[type=submit]");
            button.disabled = !checkbox.checked ? true : false;
        }
    </script>
</body>
</html>