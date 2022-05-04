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
    <link rel="stylesheet" href="../_share/css/header-userr.css">
    <link rel="stylesheet" href="../_share/css/body-user.css">
    <link rel="stylesheet" href="../_share/css/gioithieu.css">
    <link rel="stylesheet" href="../_share/css/footer-user.css">
</head>
<body>
    <div id="wrapper">
        <?php include_once "../_share/giao-dien/header-user.php" ?>
        <div style="margin-left: 400px;" class="gioithieu">
            <h1>Giới thiệu</h1>
            <h5>Giới thiệu</h5>
            <p>Cửa hàng bán giày</p>
            <h5>Tên</h5>
            <p>TT SHOP</p>
            <h5>Tên người dùng facebook</h5>
            <P>@thanhttph11081.xyz</P>
            <H4>THÔNG TIN DOANH NGHIỆP</H4>
            <h5>Chi tiết về doanh nghiệp</h5>
            <P>Bãi đậu xe: Trên đường, bãi đỗ xe và người phục vụ bãi đỗ</P>
            <P>Khoảng giá: $</P>
            <P>Được tạo vào: 2013</P>
            <P>Nhiệm vụ: Tạo nên sự khác biệt trong bạn.</P>
            <h4>THÔNG TIN LIÊN HỆ</h4>
            <p>Gọi 0866892060</p>
            <p>thanhttph11081@gmail.com</p>
            <h4>THÔNG TIN KHÁC</h4>
        </div>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
    </div>
</body>
</html>