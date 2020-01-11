<?php
namespace App\DesignPatterns;

final class Singleton {
    private static $instance;
    private function __construct() {}
    private function __clone() {}
    public static function getInstance(): Singleton {
        if(static::$instance === null) {
            static::$instance = new static();
        } 

        return static::$instance;
    }
}