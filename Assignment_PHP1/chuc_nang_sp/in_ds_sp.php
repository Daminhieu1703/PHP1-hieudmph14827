<?php
require_once '../ket_noi/ket_noi.php';
function get_ds()
{
    $get_ds = ket_noi();
    $cau_lenh = "SELECT * FROM san_pham";
    $thuc_hien = $get_ds->prepare($cau_lenh);
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
            'so_luong' => $rowData['so_luong'],
            'gia' => $rowData['gia'],
            'don_vi' => $rowData['don_vi'],
            'img' => $rowData['img'],
        ];
        array_push($kq,$row); 
    }
    return $kq;
}
function them_sp(array $data)
{
    $them = ket_noi();
    $cau_lenh = "INSERT INTO san_pham(ma, ten, so_luong, gia, don_vi, img)" . "VALUES(:ma, :ten, :so_luong, :gia, :don_vi, :img)";
    $thuc_hien = $them->prepare($cau_lenh);
    $thuc_hien->execute($data);
    return $thuc_hien;
}
function sua(int $id)
{
    $sua = ket_noi();
    $cau_lenh = "SELECT * FROM san_pham WHERE id = :id";
    $thuc_hien = $sua->prepare($cau_lenh);
    $thuc_hien->execute(['id' => $id]);
    $rowData = $thuc_hien->fetch();
    $row = [
        'id' => $rowData['id'],
        'ma' => $rowData['ma'],
        'ten' => $rowData['ten'],
        'so_luong' => $rowData['so_luong'],
        'gia' => $rowData['gia'],
        'don_vi' => $rowData['don_vi'],
        'img' => $rowData['img'],
    ];
    return $row;

}
function update(array $data)
{
    $update = ket_noi();
    $cau_lenh = "UPDATE san_pham SET ma = :ma, ten = :ten, so_luong = :so_luong, gia = :gia, don_vi = :don_vi, img = :img WHERE id = :id";
    $thuc_hien = $update->prepare($cau_lenh);
    $thuc_hien->execute($data);
    return true;
}
function deleteById(int $id)
{
    $delete = ket_noi();
    $cau_lenh = "DELETE FROM san_pham WHERE id = :id";
    $thuc_hien = $delete->prepare($cau_lenh);
    $thuc_hien->execute(['id' => $id]);
}
?>