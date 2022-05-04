<?php
$dateStart = "28-06-2021";
$dateEnd = $_POST["ket_thuc"];
$dateBD = strtotime($dateStart);
$dateKT = strtotime($dateEnd);
$days = abs($dateBD - $dateKT);
echo "còn lại " . floor($days /86400) . " ngày kết thúc block" . "<br>";
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
    <a href="BTnangcao2.html">quay lại</a>
</body>
</html>