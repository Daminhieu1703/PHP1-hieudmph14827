<?php
/*
chuỗi tạo bởi dấu nháy kép " hoặc HEREDOC cho phép nhúng các các biến của PHP vào trong chuỗi
chuỗi tạo bởi dấu nháy đơn ' hoặc NOWDOC không hỗ trợ việc nhúng
NOWDOC bỏ dấu nháy đơn sẽ có tác dụng giống HEREDOC
*/
$hoten = "Hieudmph14827";
$lop = "WEB16305";
//nhúng biến họ tên vào trong chuỗi hello
$xinchao = "hello $hoten";
//không dùng đc cho dấu nháy đơn
$xinchao2 = 'hello $hoten';

echo $xinchao;

echo "<br>";

echo $xinchao2;

echo "<hr>";

/*
herodoc
nowdoc
*/
$herodoc = <<<HERE
    Hello Poly $hoten
HERE;
echo $herodoc;

echo "<br>";

$nowdoc = <<<'NOW'
    Hello Poly $hoten
NOW;
echo $nowdoc;

echo "<br>";

//thêm dấu \ thì biến sẽ biến thành 1 chuỗi
$herodoc = <<<HERE
    \$hoten = $hoten;
HERE;
echo $herodoc;
