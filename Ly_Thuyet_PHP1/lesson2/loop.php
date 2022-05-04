<?php

$diem =[7, 8, 6, 4, 6, 7, 7, 9];
$diemTB = 0;
$i = 0;
// while ($i < 8) {
//     $diemTB += $diem[$i];
//     $i++;
// }

for ($i=0; $i < 8; $i++) { 
    $diemTB += $diem[$i];
}

$diemTB /= 8;
echo "điểm trung bình là " . $diemTB;


?>