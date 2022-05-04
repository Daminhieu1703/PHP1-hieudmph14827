<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\css\trang_chu.css">
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\css\login.css">
</head>
<body>
<div class="container">
        <?php include_once './../footer_header/header.html';?>
            <br>
            <div class="all-form">
                <form action="login.php" class="form-login" method="POST">
                    <h1>ĐĂNG NHẬP</h1>
                    <div class="form-input">
                        <label for="">EMAIL</label>
                            <input type="email" name="email" placeholder="Email" class="email">
                    </div>
                    <div class="form-input">
                        <label for="">PASSWORD</label>
                            <input type="password" name="password" placeholder="password" class="password">
                    </div>
                        <?php
                            if (isset($_SESSION['thong_bao']) ) {
                                echo $_SESSION['thong_bao'];
                                unset($_SESSION['thong_bao']);
                            }
                        ?>
                    <button type="submit">ĐĂNG NHẬP</button>
                </form>

                <form action="login_dky.php" class="form-login" method="POST">
                    <h1>ĐĂNG KÝ</h1>
                    <div class="form-input">
                        <label for="">HỌ VÀ TÊN</label>
                            <input type="text" name="ten" placeholder="Full Name">
                    </div>   
                    <div class="form-input">
                        <label for="">EMAIL</label>
                            <input type="email" name="email" placeholder="Email" class="email">
                    </div>
                    <div class="form-input">
                    <label for="">PASSWORD</label>
                        <input type="password" name="password" placeholder="password" class="password">
                    </div>
                    <?php
                        if (isset($_SESSION['thong_bao1']) ) {
                            echo $_SESSION['thong_bao1'];
                            unset($_SESSION['thong_bao1']);
                        }
                        ?>
                    <button>ĐĂNG KÝ</button>
                </form>
            </div>
            <br>
            <br>
            <br>
        <?php include_once './../footer_header/footer.html';?>
    </div>
</body>
</html>