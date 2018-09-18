<?php
include "socketadpimpl.php";
class SocketAdapterObject extends SocketAdapterImpl implements SocketAdapter
{
    public function get120v(){
    $s=new Socket();
    return $this->getvolt();
    }
    public function get12v(){
        $s=new Socket();
        $res=$s->getvolt();
        return $this->convertovolt($res,10);
    }
    public function get3v(){
        $s=new Socket();
        $res=$s->getvolt();
        return $this->convertovolt($res,40);
    }

    public function convertovolt(Volt $v,$i)
    {
        $sock=new Socket();
        $k=$v->getvolt()/$i;
        return $k;
    }
}


?>