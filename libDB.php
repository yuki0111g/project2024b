<?php
class libDB{
    private PDO $pdo;
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=2024b;charset=utf8","root","", 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);

    }

    public function getPDO(){
        return $this->pdo;
    }
}
?>