<?php

session_start();

require "../lib/common.php";
require "../lib/db.php";
 
$email_user = isset($_POST['email_user']) ? $_POST['email_user'] : "";
$mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : "";

try {
    $stmt = $conn->prepare("SELECT * FROM users WHERE email_user = '$email_user'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt->fetch();
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

if($user && password_verify($mat_khau, $user['mat_khau'])){
    $_SESSION['auth'] = [
        'id' => $user['id'],
        'name_user' => $user['name_user'],
        'email_user' => $user['email_user'],
        'phone' => $user['phone']
    ];
    header('location: ' . ROOT_URL . "index.php?msg=đăng nhập thành công");
    die;
    } else {
        header("location: " . ROOT_URL . "tai-khoan/login.php?msg=đăng nhập thất bại");
    } 
            
header("location: " . ROOT_URL . "tai-khoan/login.php?msg=đăng nhập thất bại");
