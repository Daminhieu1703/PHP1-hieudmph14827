<?php
require_once 'in_ds_hoadon.php';
session_start();
$data = [
    'ten_kh' => $_POST['ten_kh'],
    'sdt' => $_POST['sdt'],
    'dia_chi' => $_POST['dia_chi'],
    'tong_tien' => $_POST['tong_tien'],
];
if (empty($data['ten_kh']) == true || empty($data['sdt']) == true || empty($data['tong_tien']) == true) {
    $_SESSION['error1'] = 'ĐIỀN THIẾU THÔNG TIN !';
    header("location: \WEB16305\Assignment_PHP1\chuc_nang_hoadon\sua_hd_form.php?id=". $data['id']);
    die;
}
update($data);
header("location: \WEB16305\Assignment_PHP1\user_kh_and_ds_sp\hoa_don.php");
?>