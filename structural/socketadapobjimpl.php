<?php
include "socketadpimpl.php";
/*******************************************************************************
* @description : Socket Class that create the Object of type  Volt
* @get120v() : create the Object of Socket that receive the 120v
* @get12v() : create the Object of Socket that receive the 12v
* @get3v() : create the Object of Socket that receive the 3v
* @convertovolt() : convert the volt to appropriate that can be handled by Socket
*******************************************************************************/
class SocketAdapterObject extends SocketAdapterImpl implements SocketAdapter
{
    /**
     * @var $s = that holds the OBject of Type Socket
     */
    public function get120v(){
    $s=new Socket();
    // return $this->getvolt();
    return $s->getvolt();
    }
    /**
     * @var $s = that holds the Object of Type Socket
     * @var $res = hold the value returned by volt method
     */
    public function get12v(){
        $s=new Socket();
        $res=$s->getvolt();
        return $this->convertovolt($res,10);
    }
    /**
     * @var $s = that holds the Object of Type Socket
     * @var $res = hold the value returned by volt method
     */
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