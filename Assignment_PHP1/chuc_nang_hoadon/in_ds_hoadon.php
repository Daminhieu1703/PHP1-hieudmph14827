<?php
require_once '../ket_noi/ket_noi.php';
function get_hoadon()
{
    $get_ds = ket_noi();
    $cau_lenh = "SELECT * FROM hoa_don";
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
            'khach_hang_id' => $rowData['khach_hang_id'],
            'sdt' => $rowData['sdt'],
            'ngay_mua' => $rowData['ngay_mua'],
            'ngay_giao' => $rowData['ngay_giao'],
            'dia_chi' => $rowData['dia_chi'],
            'tong_tien' => $rowData['tong_tien'],
            'trang_thai' => $rowData['trang_thai'],
            'ma' => $rowData['ma'],
            'ten_kh' => $rowData['ten_kh'],
        ];
        array_push($kq,$row); 
    }
    return $kq;
}
function them_hoa_don(array $data)
{
    $them = ket_noi();
    $cau_lenh = "INSERT INTO hoa_don(sdt, dia_chi, tong_tien, ten_kh) " . " VALUES(:sdt, :dia_chi, :tong_tien, :ten_kh)";
    $thuc_hien = $them->prepare($cau_lenh);
    $thuc_hien->execute($data);
    return $thuc_hien;
}
function sua_hoa_don(int $id)
{
    $sua = ket_noi();
    $cau_lenh = "SELECT * FROM hoa_don WHERE id = :id";
    $thuc_hien = $sua->prepare($cau_lenh);
    $thuc_hien->execute(['id' => $id]);
    $rowData = $thuc_hien->fetch();
    $row = [
        'id' => $rowData['id'],
        'ten_kh' => $rowData['ten_kh'],
        'sdt' => $rowData['sdt'],
        'dia_chi' => $rowData['dia_chi'],
        'tong_tien' => $rowData['tong_tien'],
    ];
    return $row;

}
function update(array $data)
{
    $update = ket_noi();
    $cau_lenh = "UPDATE hoa_don SET ten_kh=:ten_kh, sdt=:sdt, dia_chi=:dia_chi, tong_tien=:tong_tien WHERE id=:id";
    $thuc_hien = $update->prepare($cau_lenh);
    $thuc_hien->execute($data);
    return true;
}
function deleteById(int $id)
{
    $delete = ket_noi();
    $cau_lenh = "DELETE FROM hoa_don WHERE id = :id";
    $thuc_hien = $delete->prepare($cau_lenh);
    $thuc_hien->execute(['id' => $id]);
}

?>