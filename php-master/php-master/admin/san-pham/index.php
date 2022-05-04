<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

try {
    $sql = "SELECT * FROM products";
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
    <title>Document</title>
    <?php include_once "../../_share/css/header-admin.php" ?>
</head>

<body>
    <?php include_once "../../_share/giao-dien/header-admin.php" ?>
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Màu sản phẩm</th>
            <th width="150">Hình ảnh</th>
            <th width="80">
                <a href="<?= ROOT_URL ?>admin/san-pham/them.php" class="btn btn-sm btn-success">
                    Nhập thêm
                </a>
            </th>
        </thead>
        <tbody>
            <?php while ($row = $q->fetch()) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['pro_name'] ?></td>
                    <td><?= $row['pro_price'] ?></td>
                    <td><?= $row['color_product'] ?></td>
                    <td>
                        <img src="<?= ROOT_URL . $row['pro_image'] ?>" class="img-fluid">
                    </td>
                    <td width="150">
                        <a href="<?= ROOT_URL ?>admin/san-pham/sua.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">
                            Sửa
                        </a>&nbsp;
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này?')" href="<?= ROOT_URL ?>admin/san-pham/xoa.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"> Xóa </a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>

</html>