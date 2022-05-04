<?php 
function ham_tinh_giai_thua($n)
{
    var_dump($n);
    if ($n == 0) {
        return 1;
    } else {
        return $n * ham_tinh_giai_thua($n - 1);
    }
}
echo "4! = " . ham_tinh_giai_thua(4) . "<br>";
echo '<a href="B4.html">Quay Lại Thư Viện</a>';

// ham_tinh_giai_thua(0) = 0; 
// ham_tinh_giai_thua(1) = 1 * ham_tinh_giai_thua(0) = 1;
// ham_tinh_giai_thua(2) = 2 * ham_tinh_giai_thua(1) = 2 * 1 = 2;
// ham_tinh_giai_thua(3) = 3 * ham_tinh_giai_thua(2) = 3 * 2 = 6;
// ham_tinh_giai_thua(4) = 4 * ham_tinh_giai_thua(3) = 4 * 6 = 24;


?>