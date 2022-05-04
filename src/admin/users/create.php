<?php

session_start();

require_once './../../db/khach_hang.php';


// Nhận dữ liệu & lưu vào db
$data = [
    'ma' => $_POST['ma'],
    'ten' => $_POST['ten'],
    'sdt' => $_POST['sdt'],
    'dia_chi' => $_POST['gioi_tinh'],
    'gioi_tinh' => $_POST['gioi_tinh'],
    'email' => $_POST['email'],
];


$fileUpload = $_FILES['avatar'];

// 1. check dinh dang file

if (strpos($fileUpload['type'], 'image') === false) {   
    $error = "Avatar không phải là ảnh!";

    $_SESSION['error'] = $error;
    header("Location: http://localhost/WEB16305/src/admin/users/form_create.php");
    die;
}

// 2. Kiem tra dung luong file: file anh duoi 3m

if($fileUpload['size'] > 3000000) {
    $error = "File vượt quá dung lượng cho phép, phải nhở hơn 3mb!";

    $_SESSION['error'] = $error;
    header("Location: http://localhost/WEB16305/src/admin/users/form_create.php");
    die;
}

// 3. Lưu trữ fileUpload
$storePath = './../../img/';
$fileName = $fileUpload['name'];
$path = $storePath . $fileName;
move_uploaded_file($fileUpload['tmp_name'], $path);

$data['avatar'] = '/WEB16305/src/img/' . $fileName;


if  (
    empty($_POST['ma']) == true || empty($_POST['ten']) == true || empty($_POST['sdt']) == true || empty($_POST['dia_chi']) == true || empty($_POST['gioi_tinh']) == true || empty($_POST['email']) == true
) {
    $error = "Không được để trống!";

    $_SESSION['error'] = $error;
    header("Location: http://localhost/WEB16305/src/admin/users/form_create.php");
    die;
    
}

insert($data);

header("Location: http://localhost/WEB16305/src/admin/users/index.php");