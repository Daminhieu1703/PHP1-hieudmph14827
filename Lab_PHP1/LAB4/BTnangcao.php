<?php
$day1 = $_POST["day_1"];
$day2 = $_POST["day_2"];
$dayone = strtotime($day1);
$daytwo = strtotime($day2);
$dayAll = abs($dayone - $daytwo);
echo "cách nhau khoảng: " . floor($dayAll/86400). "ngày" . "<br>";
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
    <a href="BTnangcao.html">quay lại</a>
</body>
</html>


