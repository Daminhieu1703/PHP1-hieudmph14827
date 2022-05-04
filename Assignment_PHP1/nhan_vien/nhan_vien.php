<?php
require_once './../ket_noi/ket_noi.php';
function login($password,$email){
    $ket_noi = ket_noi();
    $sql = "SELECT * FROM nhan_vien WHERE email = :email AND password = :password";
    $data = [
        'password' => $password,
        'email' => $email,
    ];
    $thuc_hien = $ket_noi->prepare($sql);
    $thuc_hien->execute($data);
    $row = $thuc_hien->fetch();
    if ($row == false) {
        return [];
    }
    $nv = [
        'id' => $row['id'],
        'email' => $row['email'],
        'password' => $row['password'],
        'ten' => $row['ten'],
    ];
    return $nv;
}
function dky(array $data)
{
    $ket_noi = ket_noi();
    $cau_lenh = "INSERT INTO nhan_vien(ten,email,password) " . "VALUES(:ten,:email,:password)";
    $thuc_hien = $ket_noi->prepare($cau_lenh);
    $thuc_hien->execute($data); 
}


?>