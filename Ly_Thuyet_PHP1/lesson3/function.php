<?php
function sayHello(/*danh sách tham số */)
{
    //code
    echo "hello poly";
}
sayHello(); //cách gọi hàm ra để sử dụng
echo "<br>";

$a = 1; $b = 2;
function cong($x,$y)
{
    $tong = $x+$y;
    return $tong;
}
echo cong($a,$b);
?>