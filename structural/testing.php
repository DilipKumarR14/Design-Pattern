<?php
include "socketadapobjimpl.php";
class Testing {

    function testing(){
        $tsap=new SocketAdapterObject();
        $res=$tsap->get3v();
        echo $res;
        echo "\n";
    }
}


$t=new Testing();

?>