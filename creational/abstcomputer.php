<?php
/*******************************************************************************
* @description : Abstract Computer Class that create the ram, hdd, cpu
* @getRam() : method that creates Ram for the computer
* @getHdd() : method that creates Hdd for the computer
* @getCpu() : method that creates cpu for the computer
*******************************************************************************/
abstract class Computer
{
    abstract public function getRam();
    abstract public function getHdd();
    abstract public function getCpu();
}
?>