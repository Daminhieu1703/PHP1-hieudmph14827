<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calculator.php" method="POST">
        <div>
            <label for="">Số A</label>
            <input type="number" name="so_a">
        </div>
        <div>
            <label for="">Số B</label>
            <input type="number" name="so_b">
        </div>
        <button name="Submit" value="+">Cộng</button>
        <button name="Submit" value="-">Trừ</button>
        <button name="Submit" value="*">Nhân</button>
        <button name="Submit" value="/">Chia</button>
        <button name="Submit" value="%">Chia lấy dư</button>
    </form>
    <?php 
        function PhepTinh($pt,$a,$b){
            if ($pt == "+") {
                return $a + $b;
            } elseif ($pt == "-") {
                return $a - $b;
            } elseif ($pt == "*") {
                return $a * $b;
            } elseif ($pt == "/") {
                return $a / $b;
            }elseif ($pt == "%"){
                return $a % $b;
            }
        }
        function kiemtra(){
            if ((isset($_POST["so_a"]) == false || isset($_POST["so_b"]) == false) || isset($_POST["Submit"]) == false){
               return false;
            }
            return true;
        }
        $kiemtra = kiemtra();
        if ($kiemtra == true) {
            if (!empty($_POST["Submit"])) {
                $a = +$_POST["so_a"];
                $b = +$_POST["so_b"];
                $pt = $_POST["Submit"];
                $kq = PhepTinh($pt,$a,$b);
                $kiemtra = kiemtra();
                    if ($pt == "+") {
                        echo 'kết quả là: '. $kq;
                    } elseif ($pt == "-") {
                        echo "kết quả là: " . $kq;
                    }  elseif ($pt == "*") {
                        echo "kết quả là: " . $kq;
                    }  elseif ($pt == "/") {
                        echo "kết quả là: " . $kq;
                    } elseif ($pt == "%"){
                        echo "kết quả là: " . $kq;
                    }
            }
        } else {
            echo "không đc để trống";
        }
        
            
        
    ?>
</body>
</html>