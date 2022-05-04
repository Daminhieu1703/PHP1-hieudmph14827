<?php
require_once './../nhan_vien/nhan_vien.php';
session_start();
$password = $_POST['password'];
$email = $_POST['email'];
$nv = login($password, $email);
if (empty($nv)== false) {
    $_SESSION['nhan_vien'] = $nv;
    header("Location:\WEB16305\Assignment_PHP1\user_kh_and_ds_sp\san_pham.php");
    die;
}else {
    $_SESSION['thong_bao'] = 'SAI MẬT KHẨU HOẶC EMAIL';
    header("Location:/WEB16305/Assignment_PHP1/trang_chu/login_form.php"); die;
}

?>