<?php
interface ShoppingCartVisitor
{
    public function vistfruit(Fruit $fr);
    public function vistbook(Book $bo);
}
interface ItemElement
{
    public function accept(ShoppingCartVisitor $shopvisitor);
}
class Book implements ItemElement
{
    public $price;
    public $isbnnumber;
    public $element;
    public function __construct()
    {
        $this->price = $price;
        $this->isbnnumber = $isbnnumber;
        $element=array();
    }
    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of isbnnumber
     */
    public function getIsbnnumber()
    {
        return $this->isbnnumber;
    }
    public function accept(ShoppingCartVisitor $shopvisitor)
    {
        return $shopvisitor.visit($this);
    }

}
class Fruit implements ItemElement
{
    private $pricePerKg;
	private $weight;
    private $name;

    
    /**
     * Get the value of pricePerKg
     */ 
    public function getPricePerKg()
    {
        return $this->pricePerKg;
    }

	/**
	 * Get the value of weight
	 */ 
	public function getWeight()
	{
		return $this->weight;
	}

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
    
    public function __construct($pricePerKg,$weight,$name){
        $this->pricePerKg=$pricePerKg;
        $this->weight=$weight;
        $this->name=$name;
    }


    public function accept(ShoppingCartVisitor $shopvisitor)
    {
        return $shopvisitor.visit($this);
    }

}
class ShoppingCartVisitorImpl implements ShoppingCartVisitor
{
    public function vistfruit(Fruit $fr){
        $cost=0;
        $cost=$fr->pricePerKg*$fr->weight;
        echo "Total cost of ".$fr->getName()."fruit is : ".$cost."\n";
        return $cost;
    }
    public function vistbook(Book $bo){

        $cost=0;
        if($bo->getPrice() > 100){
            $cost=$bo->getPrice() - 10;
        }else{
            $cost=$bo->getPrice();
            return $cost;
        }
        echo "Book COst is : " . $cost."\n";
        echo "Book Isbn Number : ".$bo->getIsbnnumber()."\n";
        return $cost;
    }

}
?>
