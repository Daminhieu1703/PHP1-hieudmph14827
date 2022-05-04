<?php
session_start();
require_once '../ket_noi/ket_noi.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn = ket_noi();
        $sql = "SELECT * FROM san_pham WHERE id = $id";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $rowData = $statement->fetch();
        if (isset($rowData) == false) {
            die;
        }
        $row = [
            'id' => $rowData['id'],
            'ma' => $rowData['ma'],
            'ten' => $rowData['ten'],
            'so_luong' => $rowData['so_luong'],
            'gia' => $rowData['gia'],
            'don_vi' => $rowData['don_vi'],
            'img' => $rowData['img'],
        ];
        $_SESSION['cart'][$id] = $row;
        header("location: /WEB16305/Assignment_PHP1/trang_chu/view_cart.php");
    }
?>