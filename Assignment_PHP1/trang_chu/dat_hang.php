<?php
require_once './../chuc_nang_hoadon/in_ds_hoadon.php';
session_start();
$data = [
    'ten_kh' => $_POST['ten_kh'],
    'sdt' => $_POST['sdt'],
    'dia_chi' => $_POST['dia_chi'],
    'tong_tien' => $_SESSION['tong_tien_gio_hang'],
];
if (empty($_POST['ten_kh']) == true || empty($_POST['dia_chi']) == true || empty($_POST['sdt']) == true) {
    $_SESSION['thong_bao_dh'] = 'BẠN ĐIỀN THIẾU THÔNG TIN MỜI BẠN ĐIỀN LẠI !';
    header("location: /WEB16305/Assignment_PHP1/trang_chu/view_cart.php");
    die;
}elseif (empty($_SESSION['tong_tien_gio_hang']) == true) {
    $_SESSION['thong_bao_dh'] = 'BẠN CHƯA CÓ ĐƠN HÀNG TRONG GIỎ !';
    header("location: /WEB16305/Assignment_PHP1/trang_chu/view_cart.php");
    die;
}else{
    them_hoa_don($data);
    $_SESSION['thong_bao_dh'] = 'ĐẶT HÀNG THÀNH CÔNG !';
    header("location: /WEB16305/Assignment_PHP1/trang_chu/view_cart.php");
}
?>