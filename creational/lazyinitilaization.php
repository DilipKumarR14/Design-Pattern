<?php
interface Product{
    public function getName();
}
class Factory 
{
    public $first;
    public $sec;
    public function getFirst(){
        if(!$this->first){
           return  $this->first=new FirstProduct();
        }
    }
    public function getSec(){
        if(!$this->sec){
            return $this->sec=new SecondProduct();
        }
    }
}
class FirstProduct implements Product{
    public function getName(){
        return "first product \n";
    }
}

class SecondProduct implements Product{
    public function getName(){
        return "second product \n";
    }
}
$f=new Factory();
$res=$f->getFirst()->getName();
$res1=$f->getSec()->getName();
echo $res."\n";
echo $res1."\n";

?>