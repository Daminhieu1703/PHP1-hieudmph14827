<?php

session_start();

require "./lib/common.php";
require "./lib/db.php";

//tìm kiếm 
// $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
//     $sql = "select * from products";
//     if ($keyword !== "") {
//         $sql .= " where pro_product like '%$keyword%'";
//     }


try {
    $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 0, 3";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

try {
    $sql = "SELECT * FROM products ORDER BY id asc LIMIT 0, 6";
    $p = $conn->query($sql);
    $p->setFetchMode(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

try {
    $sql = "SELECT * FROM categories";
    $c = $conn->query($sql);
    $c->setFetchMode(PDO::FETCH_ASSOC);
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
    <title>Shop Giày</title>
    <link rel="stylesheet" href="./_share/css/header-userr.css">
    <link rel="stylesheet" href="./_share/css/body-user.css">
    <link rel="stylesheet" href="./_share/css/footer-user.css">
    <link rel="stylesheet" href="./_share/css/dangnhap.css">
</head>

<body>
    <div id="wrapper">
        <?php include_once "./_share/giao-dien/header-user.php" ?>
        <div class="banner">
            <img src="<?= ROOT_URL ?>_share/images/anh-website/banner.png" alt="">
        </div>
        <div class="content">
            <div class="danhmuc">
                <div class="title-dm">
                    <img src="<?= ROOT_URL ?>_share/images/anh-website/cate.png" alt="">
                    <p>DANH MỤC SẢN PHẨM</p>
                </div>
                <div class="cot-title">
                    <?php while ($cate = $c->fetch()) : ?>
                        <div class="dm-sp">
                            <img src="<?= ROOT_URL ?>_share/images/anh-website/cates.png" alt="">
                            <a href="">
                                <p><?= $cate['cate_name'] ?></p>
                            </a>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
            <div class="sp-content">
                <div class="sp-new">
                    <p>SẢN PHẨM MỚI</p>
                </div>
                <div class="sanpham-sp">
                    <div class="sanpham-content">
                        <?php while ($row = $q->fetch()) : ?>
                            <div class="col-sp">
                                <img src="<?= ROOT_URL . $row['pro_image'] ?>" alt="">
                                <a href="" class="sp-name">
                                    <p class="sp-name-center"><?= $row['pro_name'] ?></p>
                                </a>
                                <div class="price">
                                    <span class="sp-price"><?= number_format($row['pro_price']) ?> &#273;</span>
                                    <a href="<?= ROOT_URL ?>site/chi-tiet-sp.php?id=<?= $row['id'] ?>"><button class="sp-detail">XEM CHI TIẾT</button></a>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="banner1">
                    <img src="<?= ROOT_URL ?>_share/images/anh-website/banner1.png" alt="">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="danhmuc">
                <div class="title-dm">
                    <p class="tintuc">TIN TỨC</p>
                </div>
                <div class="baiviet">
                    <img src="<?= ROOT_URL ?>_share/images/anh-website/tintuc.png" alt="">
                </div>
            </div>
            <div class="sp-content">
                <div class="sp-new">
                    <p>SẢN PHẨM LIÊN QUAN</p>
                </div>
                <div class="sanpham-sp">
                    <div class="sanpham-content">
                        <?php while ($cursor = $p->fetch()) : ?>
                            <div class="col-sp">
                                <img src="<?= ROOT_URL . $cursor['pro_image'] ?>" alt="">
                                <a href="" class="sp-name">
                                    <p class="sp-name-center"><?= $cursor['pro_name'] ?></p>
                                </a>
                                <div class="price">
                                    <span class="sp-price"><?= number_format($cursor['pro_price']) ?> &#273;</span>
                                    <a href="<?= ROOT_URL ?>site/chi-tiet-sp.php?id=<?= $cursor['id'] ?>"><button class="sp-detail">XEM CHI TIẾT</button></a>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "./_share/giao-dien/footer-user.php" ?>
    </div>
</body>

</html>