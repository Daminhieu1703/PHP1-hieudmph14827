<?php
require_once 'in_ds_sp.php';
session_start();
$data = [
    'ma' => $_POST['ma'],
    'ten' => $_POST['ten'],
    'so_luong' => $_POST['so_luong'],
    'gia' => $_POST['gia'],
    'don_vi' => $_POST['don_vi'],
];
$fileUpload = $_FILES['img'];


if (strpos($fileUpload['type'], 'image') === false) {   
    $error = "Avatar không phải là ảnh!";

    $_SESSION['error'] = $error;
    header("Location: http://localhost/WEB16305/Assignment_PHP1/chuc_nang_sp/them_sp_form.php");
    die;
}

if($fileUpload['size'] > 3000000) {
    $error = "File vượt quá dung lượng cho phép, phải nhở hơn 3mb!";

    $_SESSION['error'] = $error;
    header("Location: http://localhost/WEB16305/Assignment_PHP1/chuc_nang_sp/them_sp_form.php");
    die;
}

$storePath = './../img/';
$fileName = $fileUpload['name'];
$path = $storePath . $fileName;
move_uploaded_file($fileUpload['tmp_name'], $path);
$data['img'] = '/WEB16305/Assignment_PHP1/img/' . $fileName;

if (empty($data['ma']) == true || empty($data['ten']) == true || empty($data['so_luong']) == true || empty($data['gia']) == true || empty($data['don_vi']) == true) {
    $_SESSION['error1'] = 'ĐIỀN THIẾU THÔNG TIN !';
    header("location: /WEB16305/Assignment_PHP1/chuc_nang_sp/them_sp_form.php");
    die;
}

them_sp($data);
header("location: \WEB16305\Assignment_PHP1\user_kh_and_ds_sp\san_pham.php")
?>