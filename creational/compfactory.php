<?php
include "diffcomputer.php";
//Computer Factory that produces different Computer
class ComputerFactory
{
    //fetch the computer to produce
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