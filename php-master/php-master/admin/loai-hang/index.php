<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

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
    <title>Document</title>
    <?php include_once "../../_share/css/header-admin.php" ?>
</head>

<body>
    <?php include_once "../../_share/giao-dien/header-admin.php" ?>
    <table class="table table-stripped">
        <thead>
            <th>id</th>
            <th>Tên loại hàng</th>
            <th width="80">
                <a href="<?= ROOT_URL ?>admin/loai-hang/them.php" class="btn btn-sm btn-success">
                    Nhập thêm
                </a>
            </th>
        </thead>
        <tbody>
            <?php while ($row = $q->fetch()) : ?>
                <tr>
                    <td><?= $row['cate_id'] ?></td>
                    <td><?= $row['cate_name'] ?></td>
                    <td width="150">
                        <a href="<?= ROOT_URL ?>admin/loai-hang/sua.php?cate_id=<?= $row['cate_id'] ?>" class="btn btn-info btn-sm">
                            Sửa
                        </a>&nbsp;
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này?')" href="<?= ROOT_URL ?>admin/loai-hang/xoa.php?cate_id=<?= $row['cate_id'] ?>" class="btn btn-danger btn-sm"> Xóa </a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>

</html>