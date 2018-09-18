<?php
class Fruit
{
    private $type;
    public static $fruit = array();
    private function __construct($type)
    {
        $this->type = $type;
    }
    public static function getFruit($type)
    {
        //if not exist add it
        if (!array_key_exists($type, self::$fruit)) {
            self::$fruit[$type] = new Fruit($type);
        }
        return self::$fruit[$type];
    }
    public static function  Types()
    {
        echo 'Number of instances made: ' . count(self::$fruit) . "\n";
        foreach (array_keys(self::$fruit) as $key) {
            echo "$key\n";
        }
        echo "\n";
    }
}
Fruit::getFruit('BMW');
Fruit:: Types();
Fruit::getFruit('Rolls Royce');
Fruit:: Types();
Fruit::getFruit('Bucati');
Fruit:: Types();
Fruit::getFruit('BMW');
Fruit:: Types();

Fruit::getFruit('Bucati');
Fruit:: Types();
print_r(Fruit::$fruit);
?>