<?php
include "compfactory.php";
include "utility.php";
class Testing
{
    public function testing()
    {
        $ref=new utility();
        echo "enter the 1/pc manufacture 2/computer manufacture 3/server manufacture\n";
        $option = $ref->getint();
        echo strcasecmp('laptop','LAPTOP')."\n";
        switch ($option) {
            case 1:
                $res = ComputerFactory::getComputer('pc', "4gb Ram", "i3 core", "1tb");
                $ram = $res->getRam();
                $cpu = $res->getCpu();
                $hdd = $res->getHdd();
                echo "PC : " . $ram . " " . $cpu . " " . $hdd . "\n";
                break;
            case 2:
                $res1 = ComputerFactory::getComputer('laptop', "5gb Ram", "i5 core", "2tb");

                $ram = $res1->getRam();
                $cpu = $res1->getCpu();
                $hdd = $res1->getHdd();
                echo "Laptop : " . $ram . " " . $cpu . " " . $hdd . "\n";
                break;
            case 3:
                $res2 = ComputerFactory::getComputer('server', "10gb Ram,core", "i9 core", "10tb");
                $ram = $res2->getRam();
                $cpu = $res2->getCpu();
                $hdd = $res2->getHdd();
                echo "Server : " . $ram . " " . $cpu . " " . $hdd . "\n";
                break;
            default:
                echo "enter the correct option\n";
                testing();
                break;
        }

    }
}

$t = new Testing();
