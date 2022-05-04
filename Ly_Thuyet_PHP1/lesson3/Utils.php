<?php
/* lưu ý:những tham số có giá trị mặc định phải nằm ở cuối danh sách tham số*/
function sayHello($name = "FPT POLYTECHNIC")
{
    echo "<h2> Hello " . $name . "<h2>";
}
// sayHello();
function add($a,$b,$c = 0) // tham số có giá trị mặc định phải nằm cuối danh sách
{
    return $a + $b + $c;
}
// echo add(5,3);