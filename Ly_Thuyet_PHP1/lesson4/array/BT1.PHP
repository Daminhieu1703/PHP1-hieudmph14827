<?php
$arr = [1, 4, 7, 2, 9, 8, 6];
function FindMax(array $arr): int
{
    $max = $arr[0];
    for ($i=0; $i < count($arr) ; $i++) { 
        if ($arr[$i]>$max) {
            $max=$arr[$i]; 
        }
    }
    return $max;
}
function FindMin(array $arr): int
{
    $min = $arr[0];
    for ($i=0; $i < count($arr) ; $i++) { 
        if ($arr[$i]<$min) {
            $min=$arr[$i]; 
        }
    }
    return $min;
}
echo "gía trị lớn nhất: " . findMax($arr)."<br>";
echo "gía trị lớn nhất: " . findMin($arr);

