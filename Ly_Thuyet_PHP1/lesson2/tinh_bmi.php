<?php
$chieuCao = $_POST["chieu_cao"];
$canNang = $_POST["can_nang"];
$bmi = $canNang / ($chieuCao *2)
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
    <h1><?php echo $bmi; ?></h1>
    <a href="tinh_bmi.html">quay lại</a>
</body>
</html>