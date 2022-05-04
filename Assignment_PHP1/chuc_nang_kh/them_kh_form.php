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
                <li><a href="\WEB16305\Assignment_PHP1\user_kh_and_ds_sp\user_kh.php" class="nav-link px-2 link-secondary">Danh Sách Khách hàng</a></li>
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
            <form class="col-8 offset-2" method="POST" action="\WEB16305\Assignment_PHP1\chuc_nang_kh\them_kh.php">
                <div class="mt-3">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input class="form-control" type="text" name="ma"/>
                </div>
                <div class="mt-3">
                    <label>TÊN KHÁCH HÀNG</label>
                    <input class="form-control" type="text" name="ten" >
                </div>
                <div class="mt-3">
                    <label>SDT</label>
                    <input class="form-control" type="number" name="sdt" >
                </div>
                <div class="mt-3">
                    <label>ĐỊA_CHỈ</label>
                    <input class="form-control" type="text" name="dia_chi" >
                </div>
                <div class="mt-3">
                    <label>GIỚI TÍNH</label>
                    <select name="gioi_tinh" class="form-control">
                        <option value=""  selected disabled>Chọn giới tính</option>
                    <option value="0">Nữ</option>
                    <option value="1">Nam</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>EMAIL</label>
                    <input class="form-control" type="email" name="email">
                </div><br>
                <div class="d-grid gap-2 fw-bold text-danger text-center">
                <?php if (isset($_SESSION['error'])) {echo $_SESSION['error']; unset($_SESSION['error']);}?>
                    <!--
                        button submit sẽ kích hoạt sự kiện submit của form
                        Khi form được kích hoạt sự kiện submit, nó sẽ gửi dữ liệu trong các ô input lên đường dẫn action
                        với phương thức HTTP(POST|GET) được khai báo trong method
                    -->
                    <button type="submit" class="btn btn-primary">THÊM</button>

                    <!-- Khi click -> ko thêm mới nữa, quay về trang danh sách -->
                    <a href="\WEB16305\Assignment_PHP1\user_kh_and_ds_sp\user_kh.php" class="btn btn-danger">HỦY</a>
                </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
