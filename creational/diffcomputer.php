<?php
include "abstcomputer.php";
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

    public function getRam()
    {
        return $this->ram;
    }
    public function getHdd()
    {
        return $this->hdd;

    }
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

    public function getRam()
    {
        return $this->ram;
    }
    public function getHdd()
    {
        return $this->hdd;

    }
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
    public function getRam()
    {
        return $this->ram;
    }
    public function getHdd()
    {
        return $this->hdd;

    }
    public function getCpu()
    {
        return $this->cpu;
    }
}

?>