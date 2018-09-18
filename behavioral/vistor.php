<?php
include "utility.php";
interface ItemElement
{
    public function accept(ShoppingCartVisitor $shopvisitor);
}
interface ShoppingCartVisitor
{
    public function vistfruit(Fruit $fr);
    public function vistbook(Book $bo);
}

class ShoppingCartVisitorImpl implements ShoppingCartVisitor
{
    public function vistfruit(Fruit $fr)
    {
        $cost = 0;
        $cost = $fr->getPricePerKg() * $fr->getWeight();
        echo "Total cost of " . $fr->getName() . "fruit is : " . $cost . "\n";
        return $cost;
    }
    public function vistbook(Book $bo)
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
    public function accept(ShoppingCartVisitor $shopvisitor)
    {
        return $shopvisitor->vistbook($this);
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

    public function accept(ShoppingCartVisitor $shopvisitor)
    {
        return $shopvisitor->vistfruit($this);
    }

}

class ShoppingCartClient
{
    public function testing()
    {
        $ref = new utility();
        echo "Enter the 1-book \ 2-Fruit\n";
        $option = $ref->getint();
        switch ($option) {
            case 1:
                echo "Enter the Book isbn\n";
                $isbn = $ref->getstring();
                echo "ENter the Book Price\n";
                $price = $ref->getint();
                $book = new Book($price,$isbn);
                $shop = new ShoppingCartVisitorImpl();
                $cost = $book->accept($shop);
                echo "Total Cost : " . $cost;
                echo "\n";
                break;
            case 2:
                echo "Enter the Fruit name : ";
                $name = $ref->getstring();

                echo "ENter the Fruit Weight : ";
                $weight = $ref->getint();

                echo "ENter the Fruit Price per kg : ";
                $pricePerKg = $ref->getint();

                $fruit = new Fruit($pricePerKg, $weight, $name);
                $shop = new ShoppingCartVisitorImpl();
                $cost = $fruit->accept($shop);
                echo "Total Cost : " . $cost;
                echo "\n";
                break;
            default:
                # code...
                break;
        }
    }
}
$a=new ShoppingCartClient();
$a->testing();
?>