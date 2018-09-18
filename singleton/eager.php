<?php
 class Eager
  {
    private static $instance;
    private function __construct()
    {
        self::$instance = new Eager();
    }
 
    public static function getInstance(){
       
        return self::$instance;
    }
}
$n=Eager::getInstance();
echo $n."\n";

?>