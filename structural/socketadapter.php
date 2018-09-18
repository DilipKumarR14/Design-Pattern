<?php
include "socket.php";
interface SocketAdapter{
    public function get120v();
    public function get12v();
    public function get3v();
}


?>