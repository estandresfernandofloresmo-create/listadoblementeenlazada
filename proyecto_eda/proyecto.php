<?php
declare(strict_types=1);
class database {
    private PDO $pdo;
    public function __construct(){
        $host = "127.0.0.1;port=3308";
        $db = "basededatos1";
        $user = "root";
        $charset = "utf8mb4";
        $pass = "";
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];


        
        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new RuntimeException("Error de conexión: " . $e->getMessage());
        }
    }

    public function getPDO(): PDO{
        return $this ->pdo;
    }
}




?>