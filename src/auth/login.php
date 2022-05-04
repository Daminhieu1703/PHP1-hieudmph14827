<?php

session_start();

require_once './../db/nhan_vien.php';

$email = $_POST['email'];
$password = $_POST['password'];
$nv = login($email, $password);

if ( empty($nv) == true ) {
    $error = "Sai email hoặc mật khẩu";

    header("Location: /we16305/src/auth/login_form.php");
    die;
}

$_SESSION['nhan_vien'] = $nv;
header("Location: /we16305/src/admin/users/index.php");
