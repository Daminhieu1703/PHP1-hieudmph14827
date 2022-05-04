<?php
require_once './../ket_noi/ket_noi.php';
function getAlldsKH()
{
    $get_ds_kh = ket_noi();
    $cau_lenh = "SELECT * FROM khach_hang";
    $thuc_hien = $get_ds_kh->prepare($cau_lenh);
    $thuc_hien->execute([]);
    $kq = [];
    while (true) {
        $rowData = $thuc_hien->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'id' => $rowData['id'],
            'ma' => $rowData['ma'],
            'ten' => $rowData['ten'],
            'sdt' => $rowData['sdt'],
            'dia_chi' => $rowData['dia_chi'],
            'gioi_tinh' => $rowData['gioi_tinh'],
            'email' => $rowData['email'],
        ];
        array_push($kq,$row);
    }
    return $kq;
}

function suaKH(int $id)
{
    $get_ds_kh = ket_noi();
    $cau_lenh = "SELECT * FROM khach_hang WHERE id = :id";
    $thuc_hien = $get_ds_kh->prepare($cau_lenh);
    $thuc_hien->execute(['id' => $id]);
    $rowData = $thuc_hien->fetch();
    $row = [
        'id' => $rowData['id'],
        'ma' => $rowData['ma'],
        'ten' => $rowData['ten'],
        'sdt' => $rowData['sdt'],
        'dia_chi' => $rowData['dia_chi'],
        'gioi_tinh' => $rowData['gioi_tinh'],
        'email' => $rowData['email'],
    ];
    return $row;
}
function updateKH(array $data)
{
    $get_ds_kh = ket_noi();
    $cau_lenh = "UPDATE khach_hang SET ma = :ma , ten = :ten , sdt = :sdt , dia_chi = :dia_chi , gioi_tinh = :gioi_tinh , email = :email WHERE id = :id";
    $thuc_hien = $get_ds_kh->prepare($cau_lenh);
    $thuc_hien->execute($data);
    return true;
}
function themKH(array $data)
{
    $get_ds_kh = ket_noi();
    $cau_lenh = "INSERT INTO khach_hang(ma,ten,sdt,dia_chi,gioi_tinh,email) " . " VALUES(:ma,:ten,:sdt,:dia_chi,:gioi_tinh,:email)";
    $thuc_hien = $get_ds_kh->prepare($cau_lenh);
    $thuc_hien->execute($data);
}
function deleteKH(int $id)
{
    $get_ds_kh = ket_noi();
    $cau_lenh = "DELETE FROM khach_hang WHERE id = :id";
    $thuc_hien = $get_ds_kh->prepare($cau_lenh);
    $thuc_hien->execute(['id' => $id]);
}
?>