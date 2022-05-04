<?php
require_once './../nhan_vien/nhan_vien.php';
session_start();
$data = [
    'ten' => $_POST['ten'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];
if (empty($data['ten']) == true || empty($data['email']) == true || empty($data['password']) == true) {
    $_SESSION['thong_bao1'] = "BẠN ĐIỀN THIẾU MỜI BẠN ĐIỀN LẠI";
    header("location: /WEB16305/Assignment_PHP1/trang_chu/login_form.php");
}else{
    $_SESSION['thong_bao1'] = "ĐĂNG KÝ THÀNH CÔNG MỜI BẠN ĐĂNG NHẬP";
    dky($data);
    header("location: /WEB16305/Assignment_PHP1/trang_chu/login_form.php");
}

?>