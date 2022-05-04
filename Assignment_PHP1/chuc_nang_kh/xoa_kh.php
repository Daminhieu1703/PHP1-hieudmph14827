<?php
require_once 'in_ds_kh.php';
$id = $_GET['id'];
deleteKH($id);
header("location: \WEB16305\Assignment_PHP1\user_kh_and_ds_sp\user_kh.php")

?>