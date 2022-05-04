<?php

function cong($x, $y) {
    return $x + $y;
}

function tru($x, $y) {
    return $x - $y;
}

function nhan($x, $y) {
    return $x * $y;
}

function chia($x, $y) {
    return $x / $y;
}

function chiaDu($x, $y) {
    return $x % $y;
}

function xuLy() {
    $a = +$_GET['so_thu_nhat'];
    $b = +$_GET['so_thu_hai'];
    $toanTu = $_GET['toan_tu'];

    switch ($toanTu) {
        case 'cong':
            echo cong($a, $b);
            break;

        case 'tru':
            echo tru($a, $b);
            break;

        case 'nhan':
            echo nhan($a, $b);
            break;

        case 'chia':
            echo chia($a, $b);
            break;

        case 'chia_du':
            echo chiaDu($a, $b);
            break;

        default:
            break;
    }

}

function kiemTraForm() {
    if (
        !empty( $_GET['so_thu_nhat'] ) == false ||
        !empty( $_GET['so_thu_hai'] ) == false ||
        !empty( $_GET['toan_tu'] ) == false
    ) {
        return false;
    }

    if (
        ($_GET['toan_tu'] == 'chia' || $_GET['toan_tu'] == 'chia_du') &&
        $_GET['so_thu_hai'] == 0
    ) {
        return false;
    }

    return true;
}

$kiemTra = kiemTraForm();
if ($kiemTra == true) {
    xuLy();
} else {
    echo "Không được để trống dữ liệu!";
}

echo "<br>";
echo "<a href='calculator2.html'>Quay lại</a>";