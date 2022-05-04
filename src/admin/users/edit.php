<?php

session_start();
require_once './../../db/khach_hang.php';

$id = (+$_GET['id']);
$data = findById($id);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\WEB16305\src\bootstrap.min.css">
</head>
<body>
    <!-- Hiển thị giao diện cho người dùng nhập -->
    <div class="container">

        <div class="row">

            <form action="\WEB16305\src\admin\users\update.php" class="col-8 p-3 offset-2 border border-3 border-secondary rounded" method="post">
                <input type="hidden" name="id"  value="<?php echo $id?>">
                <div class="mb-3">
                    <label for="" class="form-label">Mã</label>                                                             
                    <input type="text" name="ma" class="form-control" value="<?php echo $data['ma'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên</label>
                    <input type="text" name="ten" class="form-control" value="<?php echo $data['ten'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">SDT</label>
                    <input type="text" name="sdt" class="form-control" value="<?php echo $data['sdt'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" value="<?php echo $data['dia_chi'];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Giới tính</label>
                    <select name="gioi_tinh" id="" class="form-select">
                        <option
                        <?php echo $data['gioi_tinh'] ==0 ? 'selected' : ''    ?>
                        value="0" >Nữ</option>
                        <option
                        <?php echo $data['gioi_tinh'] ==1 ? 'selected' : ''    ?>
                        
                        value="1">Nam</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>">
                </div>
                <div class="d-grid gap-2 fw-bold text-center text-danger">
                    
                    <?php

                        if (isset($_SESSION['error']) ) {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }

                    ?>

                    <button type="submit" class="btn btn-primary ">Update</button>
                    <!-- Khi click không thêm mới và quay về trang danh sách -->
                    <a href="\WEB16305\src\admin\users\index.php" class="btn btn-secondary"> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>