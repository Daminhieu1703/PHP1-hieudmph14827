<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$proId = isset($_GET['id']) ? $_GET['id'] : -1;

try{
    $sql = "DELETE FROM products WHERE id = $proId";
    // Thực thi câu truy vấn
    $conn->exec($sql);
} 
catch (PDOException $e) {
    echo 'Lỗi' . "<br>" . $e->getMessage();
}

header("location: " . ROOT_URL . "admin/san-pham/index.php?Xóa thành công");

?>