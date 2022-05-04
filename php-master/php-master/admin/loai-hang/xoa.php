<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$loaiId = isset($_GET['cate_id']) ? $_GET['cate_id'] : -1;

try{
    $sql = "DELETE FROM categories WHERE cate_id = $loaiId";
    // Thực thi câu truy vấn
    $conn->exec($sql);
} 
catch (PDOException $e) {
    echo 'Lỗi' . "<br>" . $e->getMessage();
}

header("location: " . ROOT_URL . "admin/loai-hang/index.php?Xóa thành công");

?>