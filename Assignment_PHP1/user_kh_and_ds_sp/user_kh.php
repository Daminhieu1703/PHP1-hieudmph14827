<?php
require_once './../chuc_nang_kh/in_ds_kh.php';
$kq = getAlldsKH();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\WEB16305\Assignment_PHP1\bootstrap.min.css">
</head>
<body>
<div class="container">
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="" class="nav-link px-2 link-secondary">Danh Sách Khách hàng</a></li>
                <li><a href="\WEB16305\Assignment_PHP1\user_kh_and_ds_sp\san_pham.php" class="nav-link px-2 link-dark">Danh Sách Sản Phẩm</a></li>
                <li><a href="\WEB16305\Assignment_PHP1\user_kh_and_ds_sp\hoa_don.php" class="nav-link px-2 link-dark">Danh Sách Hóa Đơn</a></li>
                <li><a href="" class="nav-link px-2 link-dark">Danh Sách Chi Tiết Hóa Đơn</a></li>
                </ul>
                <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="./../img/avatar.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="#">Dự Án</a></li>
                    <li><a class="dropdown-item" href="#">Cài Đặt</a></li>
                    <li><a class="dropdown-item" href="#">Hồ Sơ</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="\WEB16305\Assignment_PHP1\trang_chu\trang_chu.php">Đăng Xuất</a></li>
                </ul>
                </div>
            </div>
            </div>
        </header>
        <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MÃ</th>
                            <th>TÊN</th>
                            <th>SDT</th>
                            <th>ĐỊA CHỈ</th>
                            <th>GIỚI TÍNH</th>
                            <th>EMAIL</th>
                            <th colspan="2"><a href="\WEB16305\Assignment_PHP1\chuc_nang_kh\them_kh_form.php" class="btn btn-success">THÊM</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < count($kq); $i++) {  ?>
                            <tr>
                                <td><?php echo $kq[$i]['id'] ?></td>
                                <td><?php echo $kq[$i]['ma'] ?></td>
                                <td><?php echo $kq[$i]['ten'] ?></td>
                                <td><?php echo $kq[$i]['sdt'] ?></td>
                                <td><?php echo $kq[$i]['dia_chi'] ?></td>
                                <td><?php if ($kq[$i]['gioi_tinh']==0){ echo "Nữ"; } else { echo "Nam";}; ?></td>
                                <td><?php echo $kq[$i]['email'] ?></td>
                                <td><a href="\WEB16305\Assignment_PHP1\chuc_nang_kh\sua_kh.php?id=<?php echo $kq[$i]['id'] ?>" class="btn btn-primary">SỬA</a></td>
                                <td><a href="\WEB16305\Assignment_PHP1\chuc_nang_kh\xoa_kh.php?id=<?php echo $kq[$i]['id'] ?>" class="btn btn-danger">XÓA</a></td>
                            </tr>
                        <?php }?>
                    </tbody>
        </table>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>