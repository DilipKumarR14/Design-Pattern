<?php
/*******************************************************************************
* @description : Singleton Design Pattern
* @singleton() : Method that returns the Object Created 
*******************************************************************************/
class User
{
    /**
     * @var $instance : holds the object being created
     */
    private static $instance;
 
    // The singleton method
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new User();
        }
        return self::$instance;
    }
    
}
$user1 = User::singleton();
$user2 = User::singleton();
if ($user1 == $user2) {
    echo "both are same\n";
}
else{
    echo "both are not same\n";
}

?>