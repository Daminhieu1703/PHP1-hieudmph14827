<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

//Kiểm tra id có tồn tại ko
try{
    $proId = isset($_GET['id']) ? $_GET['id'] : -1;
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = $proId"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $product = $stmt->fetch();
}catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

if(!$product){
    header("location: " . ROOT_URL . "admin/san-pham/index.php?id không tồn tại");
    die;
}

$pro_name = $_POST['pro_name'];
$pro_price = $_POST['pro_price'];
$pro_image = $_FILES['pro_image'];
$cate_id = $_POST['cate_id'];

$path = "";
if ($pro_image['size'] > 0) {
    $filename = uniqid() . "-" . $pro_image["name"];
    move_uploaded_file($pro_image["tmp_name"], '../../_share/images/uploads/' . $filename);
    $path = '_share/images/uploads/' . $filename;
    $imageFileType = pathinfo($path, PATHINFO_EXTENSION);
}

//thực thi update dữ liệu
try{
    $sql = "UPDATE products 
                SET     
                    pro_name = '$pro_name',
                    pro_price = '$pro_price',
                    pro_image = '$path',
                    cate_id = '$cate_id'
                WHERE id = $proId";    
    $conn->exec($sql);
} catch(PDOException $e){
    die("ERROR: Không thể thực thi truy $sql. " . $e->getMessage());
}

header("location: " . ROOT_URL . "admin/san-pham/index.php?Cập nhật thành công");
