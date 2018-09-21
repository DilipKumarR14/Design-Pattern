<?php
include "demo.php";
$res=new ReflectionClass("CarFactory");
$method=$res->getMethod('getPrice');
print_r($method);
?>