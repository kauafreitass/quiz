<?php

class QuizModel
{
    private $pdo;
    public function __construct()
    {
        $database = new Config();
        $this->pdo = $database->getConnection();
    }
    // Arrumar registro de perguntas
    public function registerQuestions($tipo, $texto_pergunta, $resposta_correta, $opcao2, $opcao3, $opcao4)
    {
        $sql = "INSERT INTO quiz (tipo, texto_pergunta, resposta_correta, opcao_1 ,opcao_2, opcao_3, opcao_4) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $texto_pergunta, $resposta_correta, $resposta_correta, $opcao2, $opcao3, $opcao4]);
    }

    public function fetchQuestions()
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


    public function verifyAnswer($idQuestion, $answer)
    {
        $stmt = $this->pdo->prepare("SELECT resposta_correta FROM quiz WHERE id = :idQuestion");
        $stmt->bindParam(':idQuestion', $idQuestion, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result && $result['resposta_correta'] === $answer;
    }
}