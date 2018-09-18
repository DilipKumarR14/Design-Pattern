<?php
class ThreadSafe extends Thread {

    private static $instance;
    
    private function __construct(){
        
    }
    
    public static function getInstance(){
        $this->synchronized(function($thread){
        if(self::$instance == null){
            self::$instance = new ThreadSafe();
        }
        return self::$instance;
    },$this);
}
    }
    $n=ThreadSafe::getInstance();
    var_dump($n);
?>