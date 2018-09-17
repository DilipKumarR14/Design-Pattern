<?php
include "compfactory.php";
include "utility.php";
class Testing
{
    public function testing()
    {
        $ref=new utility();
        echo "what to manufacture  pc  / computer  / server \n";
        $option = $ref->getstring();
        echo strcasecmp('laptop','LAPTOP')."\n";
        switch ($option) {
            case strcasecmp('pc',$option):
                $res = ComputerFactory::getComputer('pc', "4gb ", "i3 core", "1tb");
                $ram = $res->getRam();
                $cpu = $res->getCpu();
                $hdd = $res->getHdd();
                echo "PC : ram = " . $ram ." ,"."hdd = ".$cpu." ,"."cpu = ".$hdd ."\n";
                break;
            case strcasecmp('laptop',$option):
                $res1 = ComputerFactory::getComputer('laptop', "5gb ", "i5 core", "2tb");

                $ram = $res1->getRam();
                $cpu = $res1->getCpu();
                $hdd = $res1->getHdd();
                echo "Laptop : ram = " . $ram ." ,"."hdd = ".$cpu." ,"."cpu = ".$hdd ."\n";
                break;
            case strcasecmp('server',$option):
                $res2 = ComputerFactory::getComputer('server', "10gb ", "i9 core", "10tb");
                $ram = $res2->getRam();
                $cpu = $res2->getCpu();
                $hdd = $res2->getHdd();
                echo "Server : ram = " . $ram ." ,"."hdd = ".$cpu." ,"."cpu = ".$hdd ."\n";
                break;
            default:
                echo "enter the correct option\n";
                testing();
                break;
        }

    }
}

$t = new Testing();
