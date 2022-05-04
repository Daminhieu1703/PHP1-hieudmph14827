<?php
function increment(&$a,&$b) //thêm "&" vào biến để tham chiếu
{
    $a++; $b++;
    echo "\$a =" . $a ."<br>";
    echo "\$b =" . $b ."<br>";
    echo "<hr>";
    // global $x;
    // global $y;
    // $x = $a;
    // $y = $b;
}
$x = 3; $y = 8;
increment($x,$y);
echo "\$x =" . $x ."<br>";
echo "\$y =" . $y ."<br>";
?>