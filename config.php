<?php

// Configurações básicas 

class Config
{
    private $host = 'localhost';
    private $dbname = 'quiz';
    private $username = 'root';
    private $password = '';

    public $pdo;

    // Conexão PDO 
    public function getConnection()
    {
        $this->pdo = null;

        try {
            $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->pdo->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->pdo;
    }
}