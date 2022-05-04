<?php

session_start();

require_once './../../db/nhan_vien.php';

$email = $_POST['email'];
$password = $_POST['password'];
$nv = login($email, $password);

if( empty($nv == true)) {
    $error = "Your password or email is incorrect";
    $_SESSION['error'] = $error;
    header("Location: /WEB16305/src/admin/auth/login_form.php");
    die;
}

$_SESSION['nhan_vien'] = $nv;

header("Location: http://localhost/WEB16305/src/admin/users/index.php");