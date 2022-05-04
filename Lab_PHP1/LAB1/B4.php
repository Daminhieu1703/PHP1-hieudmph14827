<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="B4.php" method="POST">
        <div>
            <label for="">Số A</label>
            <input type="text" name="so_a">
        </div>
        <div>
            <label for="">Số B</label>
            <input type="text" name="so_b">
        </div>
        <button name="Submit" value="+">Cộng</button>
        <button name="Submit" value="-">Trừ</button>
        <button name="Submit" value="*">Nhân</button>
        <button name="Submit" value="/">Chia</button>
    </form>
    <?php 
        function PhepTinh($pt,$a,$b)
        {
            if ($pt == "+") {
                return $a + $b;
            } elseif ($pt == "-") {
                return $a - $b;
            } elseif ($pt == "*") {
                return $a * $b;
            } elseif ($pt == "/") {
                return $a / $b;
            }
        }
        if (isset($_POST["Submit"])) {
            $a = $_POST["so_a"];
            $b = $_POST["so_b"];
            $pt = $_POST["Submit"];
            $kq = PhepTinh($pt,$a,$b);
            if ($pt == "+") {
                $kq = PhepTinh($pt,$a,$b);
                echo 'kết quả là: '. $kq;
            } elseif ($pt == "-") {
                $kq = PhepTinh($pt,$a,$b);
                echo "kết quả là: " . $kq;
            }  elseif ($pt == "*") {
                $kq = PhepTinh($pt,$a,$b);
                echo "kết quả là: " . $kq;
            }  elseif ($pt == "/") {
                $kq = PhepTinh($pt,$a,$b);
                echo "kết quả là: " . $kq;
            }
        }
        
    ?>
</body>
</html>