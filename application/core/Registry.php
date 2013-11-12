<?php

class Registry{
    private static $mass=array();

    public static function setValue($key='',$value){

        Registry::$mass[$key]=$value;
    }
    public static function getValue($key){
        return Registry::$mass[$key];
    }
}
?>
