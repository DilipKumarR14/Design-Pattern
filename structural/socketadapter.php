<?php
include "socket.php";
/*******************************************************************************
* @description : Interface of SocketAdapter 
* @get120v() : create the Object of Socket that receive the 120v
* @get12v() : create the Object of Socket that receive the 12v
* @get3v() : create the Object of Socket that receive the 3v
*******************************************************************************/
interface SocketAdapter
{
    public function get120v();
    public function get12v();
    public function get3v();
}
?>