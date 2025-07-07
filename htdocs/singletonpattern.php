<?php
class singleton{
    private static $instance = null;
    private function __construct()
    {
        echo __CLASS__." can only initiliaze only once";
    }
    public static function showInstace(){
        if(self::$instance==null){
           self::$instance = new singleton();
        }
        else{
            echo "<br/>Singleton allowed only once";  
        }
    }
}
echo "<br/>First Object<br/>";
$obj1 = singleton::showInstace();
echo "<br/>Second Object";
$obj2 = singleton::showInstace();
echo "<br/><br/><br/>";
echo $a = '1';
echo "<br/><br/><br/>";
echo $b = &$a;
echo "<br/><br/><br/>";
echo $b = "2$b";
echo "<br/><br/><br/>";
echo $a."  ".$b;
?>