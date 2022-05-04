<?php
$var = 0;      //true
$var0 = true;  //true
$var1 = null;  //false
$var2 = "";    //true
$var3 = '';    //true
$var4 = false; //true
$var5;         //false
var_dump(isset($var));
var_dump(isset($var0));
var_dump(isset($var1));
var_dump(isset($var2));
var_dump(isset($var3));
var_dump(isset($var4));
var_dump(isset($var5));
var_dump(isset($var6)); //false
echo "<br>";
$var7 = 0;      //true
$var8 = null;   //true
$var9 = "";     //true
$var10 = '';    //true
$var11 = false; //true
$var12;         //true
$var14 = true;  //false
var_dump(empty($var7));
var_dump(empty($var8));
var_dump(empty($var9));
var_dump(empty($var10));
var_dump(empty($var11));
var_dump(empty($var12));
var_dump(empty($var13)); //true
var_dump(empty($var14));
