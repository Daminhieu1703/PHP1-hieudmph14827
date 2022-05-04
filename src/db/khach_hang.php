<?php


require_once 'ket_noi.php';

function getAll() {
    $conn = getConnection();

    $sql = "SELECT * FROM khach_hang";

    /*
    $conn->prepare($sql);
    $params = string - cau lenh
    $kq : statement- doi tuong giup thuc hien truy van

    */
    $statement = $conn->prepare($sql);

    // Thuc thi
    $statement->execute([]);
    $kq = [];

    while(true) {
        // Đọc dòng dư liệu 
        $rowData = $statement->fetch();
        
        if ($rowData == false) {
            break;
        }

        $row = [
            'id' => $rowData['id'] ,
            'ma' => $rowData['ma'] ,
            'ten' => $rowData['ten'] ,
            'sdt' => $rowData['sdt'] ,
            'dia_chi' => $rowData['dia_chi'] ,
            'gioi_tinh' => $rowData['gioi_tinh'] ,
            'email' => $rowData['email'] ,
            'avatar' => $rowData['avatar'] ,
        ];

        array_push($kq, $row);
    }
    return $kq;

}

function insert(array $data) {
    $conn = getConnection();

    $sql = "INSERT INTO khach_hang(ma, ten , sdt, dia_chi, gioi_tinh , email, avatar)" . 
    "VALUES(:ma, :ten, :sdt, :dia_chi, :gioi_tinh, :email, :avatar)";

    $statement = $conn->prepare($sql);
    $statement->execute($data);
}


function findById(int $id) {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang WHERE id = :id";
    $statement = $conn->prepare($sql);

    $statement->execute(['id' => $id]);
    $rowData = $statement->fetch();
    $data = [
        'id' => $rowData['id'] ,
        'ma' => $rowData['ma'] ,
        'ten' => $rowData['ten'] ,
        'sdt' => $rowData['sdt'] ,
        'dia_chi' => $rowData['dia_chi'] ,
        'gioi_tinh' => $rowData['gioi_tinh'] ,
        'email' => $rowData['email'] ,
    ];

    return $data;

}

function update(array $data) {
    $sql = "UPDATE khach_hang SET  
        ma = :ma, ten = :ten, " . " sdt = :sdt, dia_chi = :dia_chi, gioi_tinh = :gioi_tinh, email = :email " 
        . " WHERE id = :id"  ;  
    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;

}

function delete(int $id) {
    $sql = "DELETE FROM khach_hang WHERE id = :id";
    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute(['id' => $id]);
}


