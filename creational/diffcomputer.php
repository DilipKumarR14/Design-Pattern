<?php
include "abstcomputer.php";
/*******************************************************************************
* @description : Different type of Computer are produced PC,Laptop,Server
*******************************************************************************/
class PC extends Computer
{
    public $ram;
    public $hdd;
    public $cpu;

    public function __construct($ram, $hdd, $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
    }
    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Get the value of hdd
     */ 
    public function getHdd()
    {
        return $this->hdd;
    }

    /**
     * Get the value of cpu
     */ 
    public function getCpu()
    {
        return $this->cpu;
    }
}
class Laptop extends Computer
{
    public $ram;
    public $hdd;
    public $cpu;

    public function __construct($ram, $hdd, $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
    }

    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Get the value of hdd
     */ 
    public function getHdd()
    {
        return $this->hdd;
    }

    /**
     * Get the value of cpu
     */ 
    public function getCpu()
    {
        return $this->cpu;
    }
}
class Server extends Computer
{
    public $ram;
    public $hdd;
    public $cpu;

    public function __construct($ram, $hdd, $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
    }
     /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Get the value of hdd
     */ 
    public function getHdd()
    {
        return $this->hdd;
    }

    /**
     * Get the value of cpu
     */ 
    public function getCpu()
    {
        return $this->cpu;
    }
}

?>