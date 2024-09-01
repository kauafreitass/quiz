<?php

require_once 'C:\xampp\htdocs\meu_quiz\models\QuizModel.php';

class QuizController {
    private $model;

    public function __construct() {
        session_start(); // Iniciar sessão para armazenar progresso e pontuação
        $this->model = new QuizModel();

        // Inicializar variáveis de sessão se não estiverem definidas
        if (!isset($_SESSION['current_question'])) {
            $_SESSION['current_question'] = 0;
        }

        if (!isset($_SESSION['score'])) {
            $_SESSION['score'] = 0;
        }

        if (!isset($_SESSION['total_questions'])) {
            $_SESSION['total_questions'] = 0;
        }

        if (!isset($_SESSION['questions'])) {
            $_SESSION['questions'] = [];
        }
    }

    // Exibir a tela de seleção de quantidade de perguntas
    public function showQuestionSelection() {
        require 'C:\xampp\htdocs\meu_quiz\views\quiz\question_selection.php';
    }

    // Iniciar o quiz com a quantidade de perguntas selecionada
    public function start() {
        // Obter a quantidade de perguntas selecionada pelo usuário
        $_SESSION['total_questions'] = isset($_POST['question_count']) ? intval($_POST['question_count']) : 5;
        $_SESSION['current_question'] = 0; // Iniciar na primeira pergunta
        $_SESSION['score'] = 0; // Iniciar pontuação em zero

        // Obter perguntas aleatórias com base na quantidade definida
        $_SESSION['questions'] = $this->model->getRandomQuestions($_SESSION['total_questions']);
        $this->nextQuestion();
    }

    // Exibir a próxima pergunta
    public function nextQuestion() {
        $questions = $_SESSION['questions'];
        $currentQuestionIndex = $_SESSION['current_question'];

        if ($currentQuestionIndex < $_SESSION['total_questions']) {
            $currentQuestion = $questions[$currentQuestionIndex];
            $_SESSION['current_question']++;
            require 'C:\xampp\htdocs\meu_quiz\views\quiz\question.php';
        } else {
            $this->showResult();
        }
    }

    public function validateAnswer() {
        if (!isset($_POST['questionId']) || !isset($_POST['answer'])) {
            header('Location: index.php?action=next');
            exit();
        }

        $questionId = intval($_POST['questionId']);
        $answer = $_POST['answer'];

        $correct = $this->model->checkAnswer($questionId, $answer);

        if ($correct) {
            $_SESSION['score'] += 1;
        }

        $this->nextQuestion();
    }

    public function showResult() {
        $score = $_SESSION['score'];
        require 'C:\xampp\htdocs\meu_quiz\views\quiz\result.php';

        // Certifique-se de que a sessão foi iniciada antes de tentar destruí-la
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }

}
?>
