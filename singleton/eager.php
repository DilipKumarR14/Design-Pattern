<?php
/*******************************************************************************
* @description : Singleton Design Pattern
* @getInstance() : Method that returns the Object Created 
*******************************************************************************/
 class Eager
  {
    /**
     * @var $instance : holds the object being created
     */
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
var_dump($n);

?>