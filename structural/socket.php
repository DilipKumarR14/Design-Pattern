<?php
/*******************************************************************************
* @description : Socket Class that create the Object of type  Volt
* @getvolt() : method that fetch the volt value and create the Object of Volt Class 
*******************************************************************************/
include "volt.php";
class Socket 
{
    public function getvolt(){
        return new Volt(120);
    }
}

?>