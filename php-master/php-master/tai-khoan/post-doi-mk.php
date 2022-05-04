<?php

session_start();

require "../lib/common.php";
require "../lib/db.php";

checkAuth();

$old_mat_khau = $_POST['old_mat_khau'];
$mat_khau = $_POST['mat_khau'];
$cf_matkhau = $_POST['cf_matkhau']; 

try {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = " . $_SESSION['auth']['id']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt->fetch();
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

if(!password_verify($old_mat_khau, $user['mat_khau'])){
    header('location: ' . ROOT_URL . 'tai-khoan/doi-mk.php?msg=Mật khẩu cũ không đúng');
    die;
}

$passwordHash = password_hash($mat_khau, PASSWORD_DEFAULT);

try{
    $sql = "UPDATE users 
                SET     
                    mat_khau = '$passwordHash'
                WHERE id = " . $_SESSION['auth']['id'];    
    $conn->exec($sql);
} catch(PDOException $e){
    die("ERROR: Không thể thực thi truy $sql. " . $e->getMessage());
}

header('location: ' . ROOT_URL );





?>