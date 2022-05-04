<?php
$mang_ban_dau = array ("abcdef","abcde","abc","ab","a");
// strlen() đếm độ dài phần tử trong chuỗi
//array_map() xét từng phần tử
$mang_tam = array_map ("strlen",$mang_ban_dau);
echo "độ dài ngắn nhất của phần tử trong mảng là: " . min($mang_tam) . "<br>";
echo "độ dài dài nhất của phần tử trong mảng là: " . max($mang_tam);