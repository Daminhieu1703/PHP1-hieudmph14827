<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$proId = isset($_GET['id']) ? $_GET['id'] : 0;

//select bảng category
try {
    $sql = "SELECT * FROM categories";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

//select bảng product
try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = $proId");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $product = $stmt->fetch();
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

if (!$product) {
    header("location: " . ROOT_URL . "admin/san-pham/index.php?id không tồn tại");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "../../_share/css/header-admin.php" ?>
</head>

<body>
    <?php include_once "../../_share/giao-dien/header-admin.php" ?>
    <form action="<?= ROOT_URL ?>admin/san-pham/luu-sua.php?id=<?= $product['id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="m-2 col-md-4">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input name="pro_name" value="<?= $product['pro_name'] ?>" class="form-control">
                <?php if (isset($_GET['ten_loai_err'])) : ?>
                    <span class="text-danger"><?= $_GET['ten_loai_err'] ?></span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input name="pro_price" value="<?= $product['pro_price'] ?>" class="form-control">
                <?php if (isset($_GET['ten_loai_err'])) : ?>
                    <span class="text-danger"><?= $_GET['ten_loai_err'] ?></span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" name="pro_image" value="<?= $product['pro_image'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tên loại hàng</label>
                <select name="cate_id" class="form-control">
                    <?php while ($row = $q->fetch()) : ?>
                        <option value="<?= $row['cate_id'] ?>">
                            <?= $row['cate_name'] ?>
                        </option>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="d-flex justify-content">
                <button type="submit" class="btn btn-sm btn-info">Cập nhật</button>&nbsp;
                <button type="reset" class="btn btn-sm btn-info">Nhập lại</button>&nbsp;
                <a href="<?= ROOT_URL ?>admin/san-pham/them.php" class="btn btn-sm btn-success">
                    Nhập thêm
                </a>&nbsp;
                <a href="<?= ROOT_URL . "admin/san-pham/index.php?btn_list" ?>" class="btn btn-sm btn-danger">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>