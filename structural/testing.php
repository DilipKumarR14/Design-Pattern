<?php
include "socketadapobjimpl.php";
class Testing {

    function testing(){
        $tsap=new SocketAdapterObject();
        // $res=$tsap->get120v();
        // echo $res;
        // echo " v\n";
        $res=$tsap->get12v();
        echo $res;
        echo "v\n";
        $res=$tsap->get3v();
        echo $res;
        echo "v\n";
    }
}


$t=new Testing();

?>