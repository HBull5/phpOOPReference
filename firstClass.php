<?php 

class FirstClass {
    const EXAMPLE = 'constant value';
    public $public;

    public function __construct() {
        $this->public = 'public ?php? var';
    }

    public static function test() {
        $test = 'static function';
        return $test;
    }

}

?>