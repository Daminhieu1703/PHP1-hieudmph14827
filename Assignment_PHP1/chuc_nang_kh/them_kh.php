<?php
require_once 'in_ds_kh.php';
session_start();
$data = [
    'ma' => $_POST['ma'],
    'ten' => $_POST['ten'],
    'sdt' => $_POST['sdt'],
    'dia_chi' => $_POST['dia_chi'],
    'gioi_tinh' => $_POST['gioi_tinh'],
    'email' => $_POST['email'],
];

if (empty($data['ma']) == true || empty($data['ten']) == true || empty($data['sdt']) == true || empty($data['dia_chi']) == true || empty($data['gioi_tinh']) == true || empty($data['email']) == true) {
    $_SESSION['error'] = 'ĐIỀN THIẾU THÔNG TIN !';
    header("location: /WEB16305/Assignment_PHP1/chuc_nang_kh/them_kh_form.php");
    die;
}
themKH($data);
header("location: \WEB16305\Assignment_PHP1\user_kh_and_ds_sp\user_kh.php");

?>