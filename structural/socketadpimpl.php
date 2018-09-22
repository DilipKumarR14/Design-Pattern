<?php
include "socketadapter.php";
/*******************************************************************************
* @description : SocketAdapterImpl Class that will implements SocketAdapter and extends the Socket
* @get120v() : create the Object of Socket that receive the 120v
* @get12v() : create the Object of Socket that receive the 12v
* @get3v() : create the Object of Socket that receive the 3v
* @convertovolt() : convert the volt to appropriate value that can be handled by Socket
*******************************************************************************/
class SocketAdapterImpl extends Socket implements  SocketAdapter
{
    public function get120v(){
        return $this->getvolt();
    }
    /**
     * @var $res = hold the value returned by volt method
     */
    public function get12v(){
        $res=$this->getvolt();
        return $this->convertvolt($res,10);

    }
     /**
     * @var $res = hold the value returned by volt method
     */
    public function get3v(){
        $res=$this->getvolt();
        return $this->convertvolt($res,40);
    }
    /**
     * @var $sock holds the Object of Socket
     * @var $res holds the value converted according to the 
     */
    public function convertovolt(Volt $v,$i)
    {
        $sock=new Socket();
        $res=$v->getvolt()/$i;
        return $res;
    }
}


?>