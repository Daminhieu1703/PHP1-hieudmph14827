<?php
$chon = $_GET["number"];
switch ($chon) {
    case '1':
       echo '<a href="B1.php">Tiếp Tục</a>' . '<br>' . '<a href="B4.html">Quay Lại</a>';
        break;
    case '2':
        echo '<a href="B2.html">Tiếp Tục</a>' . '<br>' . '<a href="B4.html">Quay Lại</a>';
        break;
    case '3':
        echo '<a href="B3.php">Tiếp Tục</a>' . '<br>' . '<a href="B4.html">Quay Lại</a>';
        break;
    default:
        echo 'Chức năng bạn chọn không tồn tại !' . '<br>' . 'Mời bạn chọn lại chức năng trong thư viện' . '<br>' . '<a href="B4.html">Quay Lại</a>';
        break;
}

?>