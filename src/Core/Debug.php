<?php

class Debug{
    private  function __construct() {}

    public static function vardump(mixed $data):void{
        var_dump($data);
    }
    public static function dd(mixed $data):void{
        self::vardump($data);
        die;
    }
}

