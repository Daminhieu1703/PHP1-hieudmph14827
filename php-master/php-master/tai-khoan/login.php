<?php

session_start();

require "../lib/common.php";
require "../lib/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../_share/css/header-userr.css">
    <link rel="stylesheet" href="../_share/css/body-user.css">
    <link rel="stylesheet" href="../_share/css/footer-user.css">
    <link rel="stylesheet" href="../_share/css/dangnhap.css">
</head>

<body>
    <div id="wrapper">
        <?php include_once "../_share/giao-dien/header-user.php" ?>
        <form action="<?= ROOT_URL ?>tai-khoan/post-login.php" method="post">
            <div class="dangnhap">
                <h3>Đăng nhập tài khoản</h3>
                <p>Nếu đã có tài khoản xin đăng nhập vào form này</p>
                <div class="form-dn">
                    <div class="dn-input">
                        <label for="">Email:</label><br>
                        <input class="dn-inputt" name="email_user" type="text">
                    </div>
                    <div class="dn-input">
                        <label for="">Mật khẩu:</label><br>
                        <input class="dn-inputt" name="mat_khau" type="password">
                    </div>
                </div>
                <div class="btn-bt">
                    <button class="btn" type="submit">Đăng nhập</button>
                    <a href="">
                        <p class="forgot">Bạn quên mật khẩu?</p>
                    </a>
                </div>
            </div>
        </form>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
    </div>
</body>

</html>