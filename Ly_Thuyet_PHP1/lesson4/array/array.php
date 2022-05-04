<?php
$arr1 = [4, 1, 7, 9];
echo $arr1[0]."<br>";
echo $arr1[1]."<br>";

$arr2 = ["lop" => "WEB16305", "ca" =>  1];

$arr3 = array (1, 3, 5, 6);
$arr4 = array ("mon_hoc" => "php1", "hoc_ky" => "SU2021");

$arr2chieu = [
    [1, 4, 9], //0
    [6, 7, 2], //1
    [9, 8, 5], //2
];
echo $arr2chieu[0][1];

//them ptu vào mảng
//C1:thêm phần tử vào vị trí cuối cùng của mảng
$arr3[] = 101;
$arr2["sy_so"] = 40;
echo count($arr3);
//C2:Array_push thêm 1 lần được nhiều phần tử
array_push($arr2, 8, 9, 10, 11, 12, 13, 14, 15);
//unset:hàm xóa
unset($arr2["sy_so"]);
echo "<br>";
echo array_pop($arr3);
echo "<br>";
var_dump($arr3);

//thay thế phần tử trong mảng
$original = array( 'a', 'b', 'c', 'd', 'e' );
$inserted = array( 'x' );
array_splice( $original, 3, 0, $inserted );
var_dump($original);
