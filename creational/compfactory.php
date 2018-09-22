<?php
include "diffcomputer.php";
/*******************************************************************************
* @description : Computer Factory that produces different Computer
* @getComputer() : helper method that creates the computer
*******************************************************************************/

class ComputerFactory
{
    //fetch the computer to produce
    /**
     * @var $type = accept the what to create 
     * @var $ram = create a ram for that type
     * @var $cpu = create a cpu for that type
     * @var $hdd = create a hard disk for that type
     */
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