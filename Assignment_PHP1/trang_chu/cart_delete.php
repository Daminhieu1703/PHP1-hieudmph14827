<?php
session_start();
require_once '../ket_noi/ket_noi.php';
if (isset($_GET['id']) == true) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($key == $_GET['id']) {
            unset($_SESSION['cart'][$key]);
            header("location: /WEB16305/Assignment_PHP1/trang_chu/view_cart.php");
        }
    }
}
    


?>