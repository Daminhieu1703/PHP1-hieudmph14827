<?php
require_once 'in_ds_sp.php';
$id = intval($_GET['id']);
deleteById($id);
header("location: \WEB16305\Assignment_PHP1\user_kh_and_ds_sp\san_pham.php")
?>