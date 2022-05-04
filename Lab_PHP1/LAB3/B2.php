<?php

function cong($x, $y) {
    $tong = $x + $y;
    return $tong;
}

function tru($x, $y) {
    $hieu = $x - $y;
    return $hieu;
}

function nhan($x , $y) {
    $tich = $x * $y ;
    return $tich;
}

function chia($x , $y) {
    $thuong = $x / $y;
    return $thuong;
}

function chiaDu($x, $y) {
    return $x % $y;
}

function xuLy(){
    
    $a = $_GET['so_thu_nhat'];
    $b = $_GET['so_thu_hai'];
    $toan_tu = $_GET['toan_tu'];

    switch ($toan_tu) {
        case 'cong':
            echo cong($a,$b);
            break;
        case 'tru':
            echo tru($a,$b);
            break;
        case 'nhan':
            echo nhan($a,$b);
            break;
        case 'chia':
            echo chia($a,$b);
            break;
        case 'chia_du':
            echo chiaDu($a,$b);
            break;
        
        default:
            # code...
            break;
    }

}

function kiemTraForm() {
    if (
        isset( $_GET['so_thu_nhat']) == false || 
        isset( $_GET['so_thu_hai']) == false ||
        isset( $_GET['toan_tu'] ) == false        

    ) {
        return false;
    }

    if (
        ($_GET ['toan_tu'] == 'chia' || $_GET['toan_tu'] == 'chia_du') &&
        $_GET['so_thu_nhat'] == 0
    ) {
        return false;
    }

    return true;
}
$kiemTra = kiemTraForm();
if ($kiemTra == true) {
    xuLy();
}else {
    echo "ko de trong";
}

echo "<br>";
echo "<a href='B2.html'>Tính Lại</a>" . '<br>' . '<a href="B4.html">Quay Lại Thư Viện</a>';