<?php

// session_start();

require "../lib/common.php";
require "../lib/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="../_share/css/header-userr.css">
    <link rel="stylesheet" href="../_share/css/body-user.css">
    <link rel="stylesheet" href="../_share/css/footer-user.css">
    <link rel="stylesheet" href="../_share/css/dangnhap.css">
</head>

<body>
    <div id="wrapper">
        <?php include_once "../_share/giao-dien/header-user.php" ?>
        <form action="<?= ROOT_URL ?>tai-khoan/luu-dangki.php" method="POST" enctype="multipart/form-data">
            <div class="dangnhap">
                <h3>Đăng kí tài khoản</h3>
                <p>Điền thông tin của bạn vào form dưới đây để đăng ký tài khoản của bạn nhé</p>
                <div class="form-dn">
                    <div class="dn-input">
                        <label for="">Họ và tên:</label><br>
                        <input class="dn-inputt" name="name_user" type="text">
                    </div>
                    <div class="dn-input">
                        <label for="">Email:</label><br>
                        <input class="dn-inputt" name="email_user" type="text">
                    </div>
                    <div class="dn-input">
                        <label for="">Số điện thoại</label><br>
                        <input class="dn-inputt" name="phone_user" type="password">
                    </div>
                    <div class="dn-input">
                        <label for="">Mật khẩu:</label><br>
                        <input class="dn-inputt" name="mat_khau" type="password">
                        <?php if (isset($_GET['mat_khau_err'])) : ?>
                            <span class="text-danger"><?= $_GET['mat_khau_err'] ?></span>
                        <?php endif ?>
                    </div>
                    <div class="dn-input">
                        <label for="">Nhập lại mật khẩu:</label><br>
                        <input class="dn-inputt" name="cf_matkhau" type="password">
                        <?php if (isset($_GET['cf_matkhau_err'])) : ?>
                        <span class="text-danger"><?= $_GET['cf_matkhau_err'] ?></span>
                    <?php endif ?>
                    </div>
                </div>
                <div class="btn-bt">
                    <button class="btn" type="submit">Đăng kí</button>
                </div>
            </div>
        </form>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
    </div>
</body>

</html>