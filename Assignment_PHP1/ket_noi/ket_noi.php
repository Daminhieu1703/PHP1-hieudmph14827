<?php
function Ket_noi(){
    $sqlUrl = "mysql: host=localhost; dbname=we16305; port=3306";
    $sqlUser = "root";
    $sqlPass = "";
    $ket_noi = new PDO($sqlUrl,$sqlUser,$sqlPass);
    return $ket_noi;
}
?>