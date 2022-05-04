<?php
session_start();
require_once '../ket_noi/ket_noi.php';
if (isset($_GET['id']) == true) {
   unset($_SESSION['cart']);
   header("location: /WEB16305/Assignment_PHP1/trang_chu/view_cart.php");
}


?>