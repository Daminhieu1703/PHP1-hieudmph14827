<?php

require_once './../../db/khach_hang.php';

$id = intval($_GET['id']);
delete($id);

header("Location: http://localhost/WEB16305/src/admin/users/index.php");

?>



