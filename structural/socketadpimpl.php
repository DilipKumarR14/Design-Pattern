<?php
include "socketadapter.php";
class SocketAdapterImpl extends Socket implements  SocketAdapter
{
    public function get120v(){
        return $this->getvolt();
    }
    public function get12v(){
        $res=$this->getvolt();
        return $this->convertVolt($res,10);

    }
    public function get3v(){
        $res=$this->getvolt();
        return $this->convertVolt($res,40);
    }
}


?>