<?php 

class SecondClass extends FirstClass {

    public static $static = 'static property';

    public static function anotherTest() {
        echo parent::EXAMPLE;
        echo '<br>';
        echo self::$static;
    }

}

?>