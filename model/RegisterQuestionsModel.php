<?php

class RegisterQuestionsModel
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function registerQuestions($tipo, $texto_pergunta, $resposta_correta, $opcao2, $opcao3, $opcao4)
    {
        $sql = "INSERT INTO quiz (tipo, texto_pergunta, resposta_correta, opcao_1 ,opcao_2, opcao_3, opcao_4) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tipo, $texto_pergunta, $resposta_correta, $resposta_correta, $opcao2, $opcao3, $opcao4]);
    }

    // public function TotalQuestions()
    // {
    //     $sql = "SELECT COUNT(*) as total_perguntas FROM quiz";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute();
    //     return $stmt->fetchColumn();
    // }

    // public function changeTotalQuestions()
    // {
    //     $total = $this->TotalQuestions();

    //     $last = "SELECT MAX(id) FROM quiz";

    //     $sql = "UPDATE quiz SET total_perguntas = $total";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute();
    // }
}
