<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$pro_name = $_POST['pro_name'];
$pro_price = $_POST['pro_price'];
$pro_image = $_FILES['pro_image'];
$color_product = $_POST['color_product'];
$cate_id = $_POST['cate_id'];

$path = "";
if ($pro_image['size'] > 0) {
    $filename = uniqid() . "-" . $pro_image["name"];
    move_uploaded_file($pro_image["tmp_name"], '../../_share/images/uploads/' . $filename);
    $path = '_share/images/uploads/' . $filename;
    $imageFileType = pathinfo($path, PATHINFO_EXTENSION);
}

try {
    $sql = "INSERT INTO products
                    (pro_name, pro_price, pro_image, color_product, cate_id) 
                VALUES 
                    ('$pro_name', '$pro_price', '$path', '$color_product', '$cate_id')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

header("location: " . ROOT_URL . "admin/san-pham/index.php");

?>