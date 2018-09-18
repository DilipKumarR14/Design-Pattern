<?php
include "socketadapter.php";
class SocketAdapterImpl extends Socket implements  SocketAdapter
{
    public function get120v(){
        return $this->getvolt();
    }
    public function get12v(){
        $res=$this->getvolt();
        return $this->convertvolt($res,10);

    }
    public function get3v(){
        $res=$this->getvolt();
        return $this->convertvolt($res,40);
    }
    public function convertovolt(Volt $v,$i)
    {
        $sock=new Socket();
        $k=$v->getvolt()/$i;
        return $k;
    }
}


?>