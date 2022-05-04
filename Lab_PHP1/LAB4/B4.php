<?php
// sort(hàm sắp xếp mảng theo chiều tăng dần)
// rsort(hằm sắp xếp mảng theo chiều giảm dần)
    $mang_number = array (70,61,72,63,64,60,71,62,73,74);
    $tong_gt_number = 0;
    foreach ($mang_number as $gt_number) {
        $tong_gt_number += $gt_number;
        $gt_tb = $tong_gt_number/count($mang_number);
    }
    echo "giá trị trung bình: " . $gt_tb;
    echo "<br>";
    sort($mang_number);
    echo "Liệt kê 5 số nguyên nhỏ nhất:";
    for ($i=0; $i < 5 ; $i++) { 
        echo  " " . $mang_number[$i];
    }
    echo "<br>";
    echo "Liệt kê 5 số nguyên lớn nhất:";
    for ($i=count($mang_number) - 5; $i < count($mang_number) ; $i++) {
        echo  " " . $mang_number[$i];
    }