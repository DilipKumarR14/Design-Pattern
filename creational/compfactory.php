<?php
include "diffcomputer.php";
class ComputerFactory
{
    public static function getComputer($type, $ram, $cpu, $hdd)
    {
        if ($type == 'pc') {
            return new PC($ram, $cpu, $hdd);
        } elseif ($type == 'laptop') {
            return new Laptop($ram, $cpu, $hdd);
        } elseif ($type == 'server') {
            return new Server($ram, $cpu, $hdd);
        } else {
            echo $type . " is not avaliable \n";
        }

    }
}

?>