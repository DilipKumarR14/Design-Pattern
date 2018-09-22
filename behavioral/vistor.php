<?php
/*******************************************************************************
* @description :Visitor design pattern
* @accept() :calculate the total value in cart and accept the parameter of type ShoppingCartVisitor
* @visitfruit() : calculate the total value of fruit present in the cart
* @visitbook() : calculate the total value of book present in the cart
*******************************************************************************/
include "utility.php";
interface ItemElement
{
    public function accept(ShoppingCartVisitor $shopvisitor);
}
interface ShoppingCartVisitor
{
    public function visitfruit(Fruit $fr);
    public function visitbook(Book $bo);
}

class ShoppingCartVisitorImpl implements ShoppingCartVisitor
{

    /**
     * calculate the total value of fruit present in the cart
     * @var $fr is of type Fruit Object
     * 
     */
    public function visitfruit(Fruit $fr)
    {
        $cost = 0;
        $cost = $fr->getPricePerKg() * $fr->getWeight();
        echo "Total cost of " . $fr->getName() . "fruit is : " . $cost . "\n";
        return $cost;
    }
    /**
     * calculate the total value of fruit present in the cart
     * @var $bo is of type Book Object
     * 
     */
    public function visitbook(Book $bo)
    {

        $cost = 0;
        if ($bo->getPrice() > 100) {
            $cost = $bo->getPrice() - 10;
        } else {
            $cost = $bo->getPrice();
            return $cost;
        }
        echo "Book COst is : " . $cost . "\n";
        echo "Book Isbn Number : " . $bo->getIsbnnumber() . "\n";
        return $cost;
    }

}

class Book implements ItemElement
{
    /**
     * @var $price - receive the price of the Each Book
     * @var $isbnnumber - receive the ISBN number of the Each Book
     * 
     */
    public $price;
    public $isbnnumber;

    public function __construct($price, $isbnnumber)
    {
        $this->price = $price;
        $this->isbnnumber = $isbnnumber;

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
    /**
     * Receive the Object of type ShoppingCartVisitor to calculate
     */
    public function accept(ShoppingCartVisitor $shopvisitor)
    {
        return $shopvisitor->visitbook($this);
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

    public function __construct($pricePerKg, $weight, $name)
    {
        $this->pricePerKg = $pricePerKg;
        $this->weight = $weight;
        $this->name = $name;
    }
     /**
     * Receive the Object of type ShoppingCartVisitor to calculate
     */
    public function accept(ShoppingCartVisitor $shopvisitor)
    {
        return $shopvisitor->visitfruit($this);
    }

}
?>