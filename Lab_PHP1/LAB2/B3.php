<?php

$soA = +$_GET["so_a"];
$soB = +$_GET["so_b"];
$listSoChan =[];
$dem = 0;
$tong = 0;

for ($i=$soA; $i<=$soB ; $i++) { 
    if ($i%2==0) {
        $listSoChan[$dem]=$i;
        $dem++;
        $tong +=$i;
    }
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
        kết quả:
    <?php
     echo $tong;
    ?>
    <ul>
        <?php for ($i=0; $i < count($listSoChan); $i++) { 
            echo "<li>".$listSoChan[$i]."</li>";
        } ?>
    </ul>
    </h2>
    <a href="B3.html">quay lại</a>
</body>
</html>
