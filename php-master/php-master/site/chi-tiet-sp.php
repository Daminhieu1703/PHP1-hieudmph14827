<?php

// session_start();

require "../lib/common.php";
require "../lib/db.php";

$hanghoa = isset($_GET['id']) ? $_GET['id'] : 0;
try {
    $sql = "SELECT * FROM products where id = $hanghoa";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $hang = $q->fetch();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../_share/css/header-userr.css">
    <link rel="stylesheet" href="../_share/css/body-user.css">
    <link rel="stylesheet" href="../_share/css/footer-user.css">
    <link rel="stylesheet" href="../_share/css/chi-tiet-sppp.css">
</head>

<body>
    <div id="wrapper">
        <?php include_once "../_share/giao-dien/header-user.php" ?>
        <div class="product-detail">
            <div class="content-detail">
                <div class="image-product">
                    <img src="<?= ROOT_URL . $hang['pro_image'] ?>" alt="">
                </div>
                <div class="info-product-detail">
                    <h2><?= $hang['pro_name'] ?></h3>
                        <div>
                            <dl class="all-detail">
                                <dt class="title-product-detail">Giá sản phẩm:</dt>
                                <dd class="content-product-detail"><?= number_format($hang['pro_price']) ?> &#273;</dd>
                            </dl>
                            <dl class="all-detail">
                                <dt class="title-product-detail">Chi tiết sản phẩm:</dt>
                                <dd class="content-product-detail">Here goes description consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</dd>
                            </dl>
                            <dl class="all-detail">
                                <dt class="title-product-detail">Màu sản phẩm:</dt>
                                <dd class="content-product-detail"><?= $hang['color_product'] ?></dd>
                            </dl>
                            <hr style="margin-top: 15px;">
                            <dl class="all-detail">
                                <dt class="title-product-detail">Số lượng:</dt>
                                <dd class="content-product-detail">
                                    <select name="" id="">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <button class="buy-product-detail">Mua</button>
                </div>
            </div>
        </div>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
</body>

</html>