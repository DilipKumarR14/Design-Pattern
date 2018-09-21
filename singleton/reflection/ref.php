<?php
include "User.php";

// echo '<pre>'.print_r(get_class_methods($rc),true);
$user= new Acme\User;
$rc=new ReflectionObject($user);
echo "\n";
echo $rc->getNamespaceName();
echo "\n";
?>