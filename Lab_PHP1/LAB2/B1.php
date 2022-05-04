<?php

// var_dump($_GET); die;

$soA = +$_GET["so_a"];
$soB = +$_GET["so_b"];
$kq = "";
if ($soA == 0) {
    $kq = "pt vô no";
} else if ($soB == 0) {
    $kq = "pt có vô số no";
} else {
    $kq  = "nghiệm ". (-$soB/$soA);
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
    <h2><?php echo $kq; ?></h2>
    <a href="WEB16305/LAB2/B1.html">quay lại</a>
</body>
</html>
