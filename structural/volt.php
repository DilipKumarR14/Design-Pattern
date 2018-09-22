<?php
/*******************************************************************************
* @description : Volt Class that receive the volt as parameter and set the value 
* @getvolt() : method that fetch the volt value
* @setvolt() : method that set the volt value
*******************************************************************************/
class Volt 
{
    private $volt;
    public function __construct($volt){
        $this->volt=$volt;
    }
    // public function getvolt(){
    //     return $this->volt;
    // }
    // public function setvolt($volt){
    //     $this->volt=$volt;
    // }

    /**
     * Get the value of volt
     */ 
    public function getVolt()
    {
        return $this->volt;
    }

    /**
     * Set the value of volt
     *
     * @return  self
     */ 
    public function setVolt($volt)
    {
        $this->volt = $volt;

        return $this;
    }
}
?>