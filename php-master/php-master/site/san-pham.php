<?php

session_start();

require "../lib/common.php";
require "../lib/db.php";

try {
    $sql = "SELECT * FROM products";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

//phân trang
$limit = 8;

$query = "SELECT count(*) FROM products";
$s = $conn->query($query);
$total_results = $s->fetchColumn();
$total_pages = ceil($total_results / $limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$starting_limit = ($page - 1) * $limit;
$show  = "SELECT * FROM products ORDER BY id DESC LIMIT " . $limit . " OFFSET "  . $starting_limit;

$r = $conn->prepare($show);
$r->execute([$starting_limit, $limit]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="../_share/css/header-userr.css">
    <link rel="stylesheet" href="../_share/css/body-user.css">
    <link rel="stylesheet" href="../_share/css/sanphamm.css">
    <link rel="stylesheet" href="../_share/css/footer-user.css">
</head>

<body>
    <div id="wrapper">
        <?php include_once "../_share/giao-dien/header-user.php" ?>
        <div class="sanpham-sp">
            <div class="sanpham-content">
                <!-- <?php while ($row = $q->fetch()) : ?> -->
                <?php while ($res = $r->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="col-sp">
                        <img src="<?= ROOT_URL . $res['pro_image'] ?>" alt="">
                        <a href="" class="sp-name">
                            <p class="sp-name-center"><?= $res['pro_name'] ?></p>
                        </a>
                        <div class="price">
                            <span class="sp-price"><?= number_format($res['pro_price']) ?> &#273;</span>
                            <a href="<?= ROOT_URL ?>site/chi-tiet-sp.php?id=<?= $res['id'] ?>"><button class="sp-detail">XEM CHI TIẾT</button></a>
                        </div>
                    </div>
                <?php endwhile ?>
                <!-- <?php endwhile ?> -->
            </div>
        </div>
        <div class="sotrang">
            <?php for ($page = 1; $page <= $total_pages; $page++) : ?>

                <a href='<?php echo "?page=$page"; ?>' class="links"><?php echo $page; ?>
                </a>

            <?php endfor ?>
        </div>
        <?php include_once "../_share/giao-dien/footer-user.php" ?>
    </div>
</body>

</html>