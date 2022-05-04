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
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="../_share/css/footer-user.css">
    <link rel="stylesheet" href="../_share/css/header-userr.css">
    <link rel="stylesheet" href="../_share/css/body-user.css">
    <link rel="stylesheet" href="../_share/css/lienhe.css">
    <link rel="stylesheet" href="../_share/css/footer-user.css">
</head>
<body>
    <div id="wrapper">
        <?php include_once "../_share/giao-dien/header-user.php" ?>
        <div class="lienhe">
            <div class="lienhe-info">
                <img src="<?= ROOT_URL ?>_share/images/anh-website/icon-address.png" alt="">
                <span>Số 3, Ngách 23, Ngõ 99, Cầu Diễn Hà Nội</span>
            </div>
            <div class="lienhe-info">
                <img src="<?= ROOT_URL ?>_share/images/anh-website/icon-lienlac.png" alt="">
                <span>0866892060</span>
            </div>
            <div class="lienhe-info">
                <img src="<?= ROOT_URL ?>_share/images/anh-website/icon-gmail.png" alt="">
                <span>thanhttph11081@gmail.com</span>
            </div>
            <hr>
            <div class="lienhe-title">
                <h3>Liên hệ với chúng tôi</h3>
                <div class="form-lh">
                    <div class="lh-input">
                        <input class="lh-inputt" placeholder="    Họ và tên" type="text">
                    </div>
                    <div class="lh-input">
                        <input class="lh-inputt" placeholder="    Email" type="text">
                    </div>
                    <div class="lh-input">
                        <input class="lh-inputct" type="text" placeholder="    Nội dung">
                    </div>
                    <button class="btn-lh">Gửi liên hệ</button>
                </div>
            </div>
        </div>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
    </div>
</body>
</html>