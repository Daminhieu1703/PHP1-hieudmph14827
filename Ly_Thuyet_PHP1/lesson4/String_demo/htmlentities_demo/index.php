<?php
//htmlentities() có tác dụng tránh có người phá web khi nhập dữ liệu bằng 1 đoạn code
$hoten = $_POST['ho_ten'];
echo htmlentities($hoten);
