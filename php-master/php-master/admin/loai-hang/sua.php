<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$loaiId = isset($_GET['cate_id']) ? $_GET['cate_id'] : 0;

try{
    $stmt = $conn->prepare("SELECT * FROM categories WHERE cate_id = $loaiId"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $loai = $stmt->fetch();
}catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

if(!$loai){
    header("location: " . ROOT_URL . "admin/loai-hang/index.php?id không tồn tại");
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
    <form action="<?= ROOT_URL ?>admin/loai-hang/luu-sua.php?cate_id=<?= $loai['cate_id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="m-2 col-md-4">
            <div class="form-group">
                <label for="">Tên loại hàng</label>
                <input name="cate_name" value="<?= $loai['cate_name'] ?>" class="form-control">
                <?php if (isset($_GET['ten_loai_err'])) : ?>
                    <span class="text-danger"><?= $_GET['ten_loai_err'] ?></span>
                <?php endif ?>
            </div>
            <div class="d-flex justify-content">
                <button type="submit" class="btn btn-sm btn-info">Cập nhật</button>&nbsp;
                <button type="reset" class="btn btn-sm btn-info">Nhập lại</button>&nbsp;
                <a href="<?= ROOT_URL ?>admin/loai-hang/them.php" class="btn btn-sm btn-success">
                    Nhập thêm
                </a>&nbsp;
                <a href="<?= ROOT_URL . "admin/loai-hang/index.php?btn_list"?>" class="btn btn-sm btn-danger">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>