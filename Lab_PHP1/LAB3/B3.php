<?php
function ham_kiem_tra_so_nguyen($n)
{
    for ($x= 2; $x < $n ; $x++) { 
        if ($n % $x == 0) {
            return 0;
        }
    }
    return 1;
}
$a = ham_kiem_tra_so_nguyen(3);
if ($a == 0) {
    echo "Đây không phải số nguyên tố"."<br>";
} else {
    echo "Đây là số nguyên tố"."<br>";
}
echo '<a href="B4.html">Quay Lại Thư Viện</a>';
