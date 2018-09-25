<?php
include "employee.php";
class Employee extends Emp
{
    public function __construct()
    {
        $this->name = 'Suman';
    }
    public function __clone()
    {

    }
}

$e = new Employee();
$e->__construct();
$q = clone $e;
$q->__construct();
?>