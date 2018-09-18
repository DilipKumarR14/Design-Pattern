<?php
class Volt 
{
    private $volt;
    public function __construct($volt){
        $this->volt=$volt;
    }
    public function getvolt(){
        return $this->volt;
    }
    public function setvolt($volt){
        $this->volt=$volt;
    }
}


?>