<?php
$a = 5.0;
var_dump ($a);

echo '<br>';
$b = sprintf("%f" , $a);
var_dump ($b);
$c = sprintf("%'.9d" , $a);
var_dump ($c);