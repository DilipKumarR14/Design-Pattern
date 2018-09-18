<?php
abstract class Employee {
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
 

  $e1 = new Emp();
  $e1->set('Dilip',1,21);
  

  echo 'Name 1 : '.$e1->getName()."\n";
  echo 'id 1 : '.$e1->getId()."\n";
  echo 'age 1 : '.$e1->getAge()."\n";

echo "\n";
  $name2 = clone $e1;
  $name2->set('SUman',2,24);
  

  echo 'Name 2 : '.$name2->getName()."\n";
  echo 'id 2 : '.$name2->getId()."\n";
  echo 'age 2 : '.$name2->getAge()."\n";

?>