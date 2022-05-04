<?php
require_once '../chuc_nang_sp/in_ds_sp.php';
$kq = get_ds();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\css\trang_chu.css">
</head>
<body>
    <div class="container">
        <?php include_once './../footer_header/header.html';?>
            <br>
            <div class="products" style="display:grid; grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr; margin-left:12px">
                <?php for ($i=0; $i < count($kq); $i++) {  ?>
                    <div class="product" style="margin-bottom: 10px;">
                        <img src="<?php echo $kq[$i]['img'] ?>" style="width:300px; height:400px" alt="...">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $kq[$i]['ten'] ?></h2>
                            <h4>GIÁ: <?php echo number_format($kq[$i]['gia'],0,',','.')?>đ</h4>
                            <button><a href="cart.php?id=<?php echo $kq[$i]['id'] ?>" class="btn btn-success">THÊM VÀO GIỎ HÀNG</a></button>
                        </div>
                    </div>
                <?php }?>
            </div>
            <br><br>
        <?php include_once './../footer_header/footer.html';?>
    </div>
</body>
</html>