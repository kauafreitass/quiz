<?php
require_once 'C:\xampp\htdocs\meu_quiz\config\database.php';

class QuizModel
{
    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function getQuestions()
    {
        $query = "SELECT * FROM quiz";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRandomQuestions($limit)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM quiz ORDER BY RAND() LIMIT :limit");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function checkAnswer($questionId, $answer)
    {
        $stmt = $this->pdo->prepare("SELECT correct_answer FROM quiz WHERE id = :questionId");
        $stmt->bindParam(':questionId', $questionId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result && $result['correct_answer'] === $answer;
    }
}