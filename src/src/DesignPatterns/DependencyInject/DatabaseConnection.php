<?php
namespace App\DesignPatterns\DependencyInject;

final class DatabaseConnection {
    private $configuration;
    private static $instance;
    private function __construct() {}
    private function __clone() {}
    public static function getInstance(DatabaseParams $databaseConfiguration): DatabaseConnection {
        if(static::$instance === null) {
            static::$instance = new static();
            static::$instance->configuration = $databaseConfiguration;
        } 
        
        return static::$instance;
    }
}
