<?php

session_start();

require "../lib/common.php";
require "../lib/db.php";

//Lấy dữ liệu từ file dangky.php
$name_user = addslashes($_POST['name_user']);
$email_user = addslashes($_POST['email_user']);
$phone_user = addslashes($_POST['phone_user']);

$mat_khau = addslashes($_POST['mat_khau']);
$mat_khau_Err = "";

$cf_matkhau = $_POST['cf_matkhau'];
$cf_matkhau_Err = "";

//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$name_user || !$email_user || !$phone_user || !$mat_khau) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$removeWhiteSpacePassword = str_replace(" ", "", $mat_khau);
if (strlen($mat_khau < 6) || (strlen($removeWhiteSpacePassword) != strlen($mat_khau))) {
    $mat_khau_Err = "Mật khẩu không thỏa mãn đk (ít nhất 6 ký tự và không chứa khoảng trắng)";
}
if ($mat_khau != $cf_matkhau) {
    $cf_matkhau_Err = "Mật khẩu và xác nhận mật khẩu không khớp";
}

// Mã khóa mật khẩu
// $mat_khau = md5($mat_khau);
$hashPassword = password_hash($mat_khau, PASSWORD_DEFAULT);

//Kiểm tra tên đăng nhập này đã có người dùng chưa
$sql = "SELECT name_user FROM users WHERE name_user = '$name_user'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($result) > 0) {
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if ($mat_khau_Err . $cf_matkhau_Err != "") {
    header('location: ' . ROOT_URL . "tai-khoan/dangki.php?mat_khau_err=$mat_khau_Err&cf_matkhau_err=$cf_matkhau_Err");
    die;
}

try {
    $sql = "INSERT INTO users
                    (name_user, email_user, phone_user, mat_khau) 
                VALUES 
                    ('$name_user', '$email_user', '$phone_user', '$hashPassword')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

header("location: " . ROOT_URL . "index.php");

?>

