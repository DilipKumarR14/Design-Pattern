<?php
$arr=[
    'foo'=>'bar',
    'baz'=>'quux',
        1=>12
];
$ser = serialize($arr);
var_dump ($ser)."\n";

$file = fopen('file.json', 'wb');
fwrite($file, $ser); 

$res=unserialize($ser);
var_dump($res)."\n";
?>