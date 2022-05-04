<?php
session_start();
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
$tong_tien = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\css\view_cart.css">
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\css\trang_chu.css">
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\css\login.css">
</head>
<body>
    <div class="container">
        <?php include_once './../footer_header/header.html';?>
            <h1 style="padding-bottom:5px;text-align:center;">GIỎ HÀNG</h1>
            <div class="table" style="margin:0 0 5px 280px;">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MÃ</th>
                            <th>TÊN</th>
                            <th>ĐƠN VỊ</th>
                            <th>GIÁ</th>
                            <th>ẢNH</th>
                            <th colspan="2">CHỨC NĂNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $value) {  ?>
                            <tr>
                                <td><?php echo $value['id'] ?></td>
                                <td><?php echo $value['ma'] ?></td>
                                <td><?php echo $value['ten'] ?></td>
                                <td><?php echo $value['don_vi'] ?></td>
                                <td><?php echo number_format($value['gia'],0,',','.') ?>đ</td>
                                <td><img src="<?php echo $value['img'] ?>" style="width:100px; height:100px" alt=""></td>
                                <td><button><a href="cart_delete.php?id=<?php echo $value['id']?>" class="btn btn-danger">XÓA</a></button></td>
                            </tr>
                            <?php $tong_tien += $value['gia']; ?>
                        <?php }?>
                            <tr>
                                <td colspan="7">TỔNG: <?php echo number_format($tong_tien,0,',','.'); ?>đ</td>
                                <?php $_SESSION['tong_tien_gio_hang'] = $tong_tien; ?>
                            </tr>
                            <tr>
                                <td colspan="7"><button><a href="\WEB16305\Assignment_PHP1\trang_chu\cart_delete_all.php?id=<?php echo $value['id']?>">XÓA HẾT</a></button></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <form action="dat_hang.php" class="form-login" method="POST" style="margin-left: 640px;">
                    <h1>THÔNG TIN</h1>
                    <div class="form-input">
                        <label for="">HỌ TÊN</label>
                            <input type="text" name="ten_kh" placeholder="Full Name">
                    </div>   
                    <div class="form-input">
                        <label for="">SĐT</label>
                        <input type="number" name="sdt" placeholder="Số điện thoại" class="email">
                    </div>
                    <div class="form-input">
                    <label for="">ĐỊA CHỈ</label>
                        <input type="text" name="dia_chi" placeholder="Địa chỉ" class="password">
                    </div>
                    <?php
                        if (isset($_SESSION['thong_bao_dh'])) {
                            echo $_SESSION['thong_bao_dh'];
                            unset($_SESSION['thong_bao_dh']);
                        }
                    ?>
                    <button>ĐẶT HÀNG</button>
                </form>
                <br>
            <?php include_once './../footer_header/footer.html';?>
    </div>
</body>
</html>
