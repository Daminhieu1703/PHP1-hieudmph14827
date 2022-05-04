<?php

$diem = +$_GET["diem"];
$kq ="";
if ($diem<5) {
    $kq = "yếu";
} elseif ($diem <6.5) {
    $kq = "TB";
}  elseif ($diem <7.5) {
    $kq = "khá";
}  elseif ($diem < 9) {
    $kq = "giỏi";
}  else {
    $kq = "xuất sắc";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php echo $kq; ?>
    </h2>
    <a href="B2.html">quay lại</a>
</body>
</html>