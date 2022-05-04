<?php
$so = +$_GET['so'];
$tong = 0;
for ($i= 0; $i <= $so; $i++) { 
    $tong += $i;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai4</title>
</head>
<body>
    <form method="GET" action="B4.php">
        <input type="number" name="so">
        <button>tinh</button>
    </form>
    <h2>
        <?php echo "Tổng = " .$tong ?>
    </h2>
</body>
</html>