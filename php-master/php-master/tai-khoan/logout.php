<?php

session_start();

require_once '../lib/common.php';

unset($_SESSION['auth']);
header("location: " . ROOT_URL);

?>