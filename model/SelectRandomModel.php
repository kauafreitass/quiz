<?php

class SelectRandomModel
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getRandomQuestions($qty)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM quiz ORDER BY RAND() LIMIT :limit");
        $stmt->bindParam(':qty', $qty, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}