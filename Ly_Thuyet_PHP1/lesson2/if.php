<?php
$diem = [
        'lab_1' => 7,
        'lab_2' => 8,
        'lab_3' => 6,
        'lab_4' => 4,
        'lab_5' => 9,
        'lab_6' => 8,
        'lab_7' => 7,
        'lab_8' => 8,
        'assign' => 7,
    ];
    if ($diem["assign"] < 5) {
        echo "không đủ điều kiện thi";
    } else if ($diem["assign"] < 7) {
        echo "sinh viên trung bình";
    }else if ($diem["assign"] < 8){
        echo "sinh viên khá";
    }else {
        echo "sinh viên ong vàng";
    }
    echo '<br>';

    /*
     A -> ONG VÀNG
     B -> SV GIỎI
     C -> SV KHÁ
     D -> SV TRUNG BÌNH
     F -> CHƯA QUA MÔN
     */
    $diemTK = 'B';
    switch ($diemTK) {
        case 'A':
            echo "ONG VÀNG";
            break;
        case 'B':
            echo "SV GIỎI";
            break;
        case 'C':
            echo "SV KHÁ";
            break;
        case 'D':
            echo "SV TRUNG BÌNH";
            break;
        case 'F':
            echo "CHƯA QUA MÔN";
            break;
        default:
            # code...
            break;
    }
?>