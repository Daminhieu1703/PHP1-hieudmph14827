<?php

// session_start();

require "../../lib/common.php";
require "../../lib/db.php";

$cate_name = $_POST['cate_name'];

try {
    $sql = "INSERT INTO categories(cate_name) VALUES ('$cate_name')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

header("location: " . ROOT_URL . "admin/loai-hang/index.php");

?>