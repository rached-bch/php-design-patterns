<?php
namespace App\DesignPatterns\DependencyInject;


class DatabaseParams {
    public $host;
    public $user;
    public $password; 
    public $database;
    public function __construct(string $host, string $user, string $password, string $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }
}