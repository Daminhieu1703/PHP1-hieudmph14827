<?php
require_once 'in_ds_hoadon.php';
$id = $_GET['id'];
deleteById($id);
header("location: \WEB16305\Assignment_PHP1\user_kh_and_ds_sp\hoa_don.php")

?>