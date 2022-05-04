<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

//select bảng categories
try {
    $sql = "SELECT * FROM categories";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
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
    <title>Quản trị Website</title>
    <?php include_once "../../_share/css/header-admin.php" ?>
</head>

<body>
    <?php include_once "../../_share/giao-dien/header-admin.php" ?>
    <form action="<?= ROOT_URL ?>admin/san-pham/luu-them.php" method="POST" enctype="multipart/form-data">
        <div class="m-2 col-md-4">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="pro_name" class="form-control">
                <?php if (isset($_GET['ten_loai_err'])) : ?>
                    <span class="text-danger"><?= $_GET['ten_loai_err'] ?></span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="">Giá sản phảm</label>
                <input type="number" name="pro_price" class="form-control">
                <?php if (isset($_GET['ten_loai_err'])) : ?>
                    <span class="text-danger"><?= $_GET['ten_loai_err'] ?></span>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label for="">Màu sản phảm</label>
                <input type="text" name="color_product" class="form-control">
                <?php if (isset($_GET['color_product_err'])) : ?>
                    <span class="text-danger"><?= $_GET['color_product_err'] ?></span>
                <?php endif ?>
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
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input type="file" name="pro_image" class="form-control">
                <?php if (isset($_GET['ten_loai_err'])) : ?>
                    <span class="text-danger"><?= $_GET['ten_loai_err'] ?></span>
                <?php endif ?>
            </div>
            <div class="d-flex justify-content">
                <button type="submit" class="btn btn-sm btn-info">Thêm mới</button>
                &nbsp;
                <button type="reset" class="btn btn-sm btn-info">Nhập lại</button>
                &nbsp;
                <a href="<?= ROOT_URL . "admin/loai-hang/index.php?btn_list" ?>" class="btn btn-sm btn-danger">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>