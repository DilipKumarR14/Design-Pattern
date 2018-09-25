<?php
include "utility.php";
$ref=new utility();
/*******************************************************************************
* @description : Abstract Employee Class 
* @getName() : method that fetch the name of employee
* @getId() : method that fetch the id of employee
* @getAge() : method that fetch the age of employee
*******************************************************************************/
abstract class Employee {
    /**
     * @var $name = receives the name of employee
     * @var $id = receive the id of employee
     * @var $age = receive the age of employee
     */
    protected $name;
    protected $id;
    protected $age;
    // making the class that inherit this class to be cloneable
    abstract function __clone();

    function getName() {
        return $this->name;
    }
    function getId() {
        return $this->id;
    }
    function getAge() {
        return $this->age;
    }
    function set($name,$id,$age) {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }
}

class Emp extends Employee {
    function __construct() {
        $this->topic = 'Emp';
    }
    function __clone() {
        
    }
}
$ref->test();
?>