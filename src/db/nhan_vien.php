<?php

require_once 'ket_noi.php';

function login($email, $password){
    $conn = getConnection();

    $sql = "SELECT * FROM nhan_vien WHERE email = :email " . "AND password = :password";
    $data = [
        'email' => $email,
        'password' => $password,
    ];
    $statement = $conn->prepare($sql);
    $statement->execute($data);

    $row = $statement->fetch();

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