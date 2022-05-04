<?php
$name = "daminhieu1703";

function sayhello()
{
    // use
    //var_dump($GLOBALS["name"]); die;
    // global $name; //global là gọi biến bên ngoài vào
    echo "Hello " . $name;
}
sayhello();
?>