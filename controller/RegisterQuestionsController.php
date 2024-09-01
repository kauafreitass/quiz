<?php

require_once 'C:\xampp\htdocs\quiz\model\RegisterQuestionsModel.php';

class RegisterQuestionsController
{

    private $registerQuestionsModel;

    public function __construct($pdo)
    {
        $this->registerQuestionsModel = new RegisterQuestionsModel($pdo);
    }

    public function registerQuestions($tipo, $texto_pergunta, $resposta_correta, $opcao2, $opcao3, $opcao4)
    {
        $this->registerQuestionsModel->registerQuestions($tipo, $texto_pergunta, $resposta_correta, $opcao2, $opcao3, $opcao4);
    }

    // public function TotalQuestions()
    // {
    //     $this->registerQuestionsModel->TotalQuestions();
    // }

    // public function changeTotalQuestions()
    // {
    //     $this->registerQuestionsModel->changeTotalQuestions();
    // }
}
