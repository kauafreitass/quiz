<?php 

class SelectRandomModel {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAnswerRandom() {
        $offset = floor(rand()); 
        $sql = "SELECT * FROM quiz ORDER BY RAND() LIMIT 1 OFFSET ?";
        $stmt = $this->pdo->query($sql);
        $stmt->execute([$offset]);
    }
}