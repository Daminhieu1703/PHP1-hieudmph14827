<?php
   $money = +$_GET["thu_nhap"];
   //var_dump($_REQUEST); die; -> bao gồm $_GET và $_POST
   $Thue = "";
   if ($money < 9000000) {
       $Thue = "Không phải đóng thuế";
   } else if ($money <= 15000000){
       $Thue = $money *0.1;
   }  else if ($money <= 30000000){
        $Thue = $money *0.15;
    } else{
        $Thue = $money *0.2;
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
    <div>
        <form action="/WEB16305/lesson2/tinh_thue.php" method="GET">
            <label for="">Thu nhập</label>
            <input type="number" name="thu_nhap">
            <button>tính thuế</button>
        </form>
        <h2>
            <?php echo $Thue ?>
        </h2>
    </div>
</body>
</html>