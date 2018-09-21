<?php
class CarFactory
{
    private $price;
    private $name;
    public function __construct($price,$name)
    {
        $this->price=$price;
        $this->name=$name;
    }
    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}
$a=new CarFactory(10000,'bmw');
var_dump(get_class($a)) ."\n";
var_dump(get_class_methods($a));
?>