<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$cate_name = $_POST['cate_name'];

//Kiểm tra id có tồn tại ko
try{
    $loaiId = isset($_GET['cate_id']) ? $_GET['cate_id'] : -1;
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

//thực thi update dữ liệu
try{
    $sql = "UPDATE categories 
                SET     
                    cate_name = '$cate_name' 
                WHERE cate_id = $loaiId";    
    $conn->exec($sql);
} catch(PDOException $e){
    die("ERROR: Không thể thực thi truy $sql. " . $e->getMessage());
}

header("location: " . ROOT_URL . "admin/loai-hang/index.php?Cập nhật thành công");

?>