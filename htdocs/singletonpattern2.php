<?php

class singletonpattern2{
    private static $instance = null;
    private function __construct(){
        echo __CLASS__." can only be initialized once.";
    }
    public static function getinstance(){
        if(self::$instance==null){
            self::$instance = new singletonpattern2();
        }
        else{
            echo "Follows only singleton";
        }
    }
}
echo "<br/> First Singleton object<br/>";
$obj1 = singletonpattern2::getinstance();
echo "<br/> Second Singleton object<br/>";
$obj2 = singletonpattern2::getinstance();
echo "JOIN Query <br/>
SELECT orders.id, customers.name from customers INNER JOIN orders on orders.customer_id=orders.id"
?>