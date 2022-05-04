<?php

session_start();

require_once './../../db/khach_hang.php';

$data = [
    'id' =>$_POST['id'],
    'ma' => $_POST['ma'],
    'ten' => $_POST['ten'],
    'sdt' => $_POST['sdt'],
    'dia_chi' => $_POST['dia_chi'],
    'gioi_tinh' => $_POST['gioi_tinh'],
    'email' => $_POST['email'],
];

if  (
    empty($_POST['ma']) == true || empty($_POST['ten']) == true || empty($_POST['sdt']) == true || empty($_POST['dia_chi']) == true || empty($_POST['gioi_tinh']) == true || empty($_POST['email']) == true
) {
    $error = "Nhập thiếu dữ liệu!";

    $_SESSION['error'] = $error;
    header("Location: http://localhost/WEB16305/src/admin/users/edit.php?id=". $data['id'] );
    die;
    
}

update($data);
header("Location: http://localhost/WEB16305/src/admin/users/index.php");
