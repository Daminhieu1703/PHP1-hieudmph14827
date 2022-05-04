<?php

session_start();

require "../lib/common.php";
require "../lib/db.php";

checkAuth();
$user = $_SESSION['auth'];

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
        <form action="<?= ROOT_URL ?>tai-khoan/post-doi-mk.php" method="POST" enctype="multipart/form-data">
            <div class="dangnhap">
                <h3>Đổi mật khẩu</h3>
                <!-- <p>Điền thông tin của bạn vào form dưới đây để đăng ký tài khoản của bạn nhé</p> -->
                <div class="form-dn">
                    <div class="dn-input">
                        <label for="">Tên email đăng nhập:</label><br>
                        <input class="dn-inputt" type="text" disabled value="<?= $user['email_user'] ?>">
                    </div>
                    <div class="dn-input">
                        <label for="">Mật khẩu hiện tại</label><br>
                        <input class="dn-inputt" name="old_mat_khau" type="password">
                    </div>
                    <div class="dn-input">
                        <label for="">Mật khẩu mới:</label><br>
                        <input class="dn-inputt" name="mat_khau" type="password">
                    </div>
                    <div class="dn-input">
                        <label for="">Xác nhận mật khẩu mới:</label><br>
                        <input class="dn-inputt" name="cf_matkhau" type="password">
                    </div>
                </div>
                <div class="btn-bt">
                    <button class="btn" type="submit">Đổi mật khẩu</button>
                </div>
            </div>
        </form>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
    </div>
</body>

</html>