<?php
class utility
{
    public function getint()
    {
        fscanf(STDIN, "%d", $var);
        if (filter_var($var, FILTER_VALIDATE_INT)) {
            return $var;
        } else {
            echo "enter the integer : ";
            return $this->getint();
        }
    }

    public function getstring()
    {
        fscanf(STDIN, "%s", $var);
        if (filter_var($var, FILTER_VALIDATE_INT)) {
            echo "enter the string : ";
            return $this->getstring();
        } else {
            return $var;
        }
    }

    public function observer()
    {
        $t = new MyTopic();
        $o = new MyTopicSubscriber('New video Added', 'ganganmstyle.mp4');
        $o1 = new MyTopicSubscriber('New video Added', 'ganganmstyle.mp4');
        $o2 = new MyTopicSubscriber('New video Added', 'gangnamstyle.mp4');
        $t->register($o);
        $t->register($o1);
        $t->register($o2);
        $t->unregister($o1);
        $t->notifyObserver();
        $t->getUpdate($o);
        $t->postMessage("Updated Available\n");
        $o->update();

        print_r($t);
        echo "\n";
    }

    public function visittesting()
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
                $book = new Book($price, $isbn);
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
                    echo "Wrong OPtion!!!!!\n";
                    visittesting();
                break;
        }
    }



    #main ends
}
?>