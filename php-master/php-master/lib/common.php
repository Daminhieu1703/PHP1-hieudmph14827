<?php

define("ROOT_URL", "http://localhost/shopgiay/");

function checkAuth(){
    if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
        header('location: ' .ROOT_URL . "tai-khoan/login.php");
        die;
    }
}

?>