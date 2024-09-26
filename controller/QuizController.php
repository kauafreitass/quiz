<?php

require_once 'C:\aluno2\xampp\htdocs\quiz\model\QuizModel.php';

class QuizController
{
    private $quizModel;
    public function __construct()
    {
        session_start(); // Iniciar sessão para armazenar progresso e pontuação
        $_SESSION['started'] = true;
        $this->quizModel = new QuizModel();

        // Inicializar variáveis de sessão se não estiverem definidas
        if (!isset($_SESSION['current_question'])) {
            $_SESSION['current_question'] = 0;
        }

        if (!isset($_SESSION['scorePlayer1'])) {
            $_SESSION['scorePlayer1'] = 0;
        }

        if (!isset($_SESSION['scorePlayer2'])) {
            $_SESSION['scorePlayer2'] = 0;
        }

        if (!isset($_SESSION['total_questions'])) {
            $_SESSION['total_questions'] = 0;
        }

        if (!isset($_SESSION['questions'])) {
            $_SESSION['questions'] = [];
        }
    }

    public function showQuestionSelection()
    {
        require 'C:\aluno2\xampp\htdocs\quiz\view\quiz\question_selection.php';
    }

    public function registerQuestions($tipo, $texto_pergunta, $resposta_correta, $opcao2, $opcao3, $opcao4)
    {
        $this->quizModel->registerQuestions($tipo, $texto_pergunta, $resposta_correta, $opcao2, $opcao3, $opcao4);
    }

    public function start()
    {
        // Obter a quantidade de perguntas selecionada pelo usuário
        $_SESSION['total_questions'] = isset($_GET['total_perguntas']) ? intval($_GET['total_perguntas']) : 5;
        $_SESSION['total_questionsPlayer2'] = isset($_GET['total_perguntas']) ? intval($_GET['total_perguntas']) : 5;
        $_SESSION['current_question'] = 0; // Iniciar na primeira pergunta
        $_SESSION['score'] = 0; // Iniciar pontuação em zero

        // Obter perguntas aleatórias com base na quantidade definida
        $_SESSION['questions'] = $this->quizModel->getRandomQuestions($_SESSION['total_questions']);
        $this->nextQuestion();
    }

    public function fetchQuestionsPlayer2()
    {
        // Obter a quantidade de perguntas selecionada pelo usuário
        $_SESSION['total_questionsPlayer2'] = $_SESSION['total_questions'];
        $_SESSION['current_questionPlayer2'] = 0; // Iniciar na primeira pergunta
        $_SESSION['scorePlayer2'] = 0; // Iniciar pontuação em zero

        // Obter perguntas aleatórias com base na quantidade definida
        $_SESSION['questionsPlayer2'] = $this->quizModel->getRandomQuestions($_SESSION['total_questionsPlayer2']);
        $this->nextQuestionPlayer2();
    }

    public function nextQuestion()
    {
        $questions = $_SESSION['questions'];
        $currentQuestionIndex = $_SESSION['current_question'];

        $action = isset($_GET['action']) ? $_GET['action'] : 'showQuestionSelection';

        if ($currentQuestionIndex == $_SESSION['total_questions']) {
            header("Location: index.php?action=$action&player1=finished");
            $_SESSION['current_question']++;
        }

        if ($currentQuestionIndex < $_SESSION['total_questions']) {
            $currentQuestion = $questions[$currentQuestionIndex];
            $_SESSION['current_question']++;
            require 'C:\aluno2\xampp\htdocs\quiz\view\quiz\question.php';
        } else {
            $_SESSION['player1Finished'] = true;
            $this->result();
        }
    }

    public function nextQuestionPlayer2()
    {
        $questionsPlayer2 = $_SESSION['questionsPlayer2'] ?? 0;
        $currentQuestionIndexPlayer2 = $_SESSION['current_questionPlayer2'] ?? 0;

        if ($currentQuestionIndexPlayer2 < ($_SESSION['total_questionsPlayer2'] ?? 0)) {
            $currentQuestionPlayer2 = $questionsPlayer2[$currentQuestionIndexPlayer2];
            $_SESSION['current_questionPlayer2']++;
            require 'C:\aluno2\xampp\htdocs\quiz\view\quiz\result.php';
            require 'C:\aluno2\xampp\htdocs\quiz\view\quiz\question2.php';
        } else {
            $this->finalResult();
        }
    }

    public function answerIsCorrect($questionId, $answer)
    {
        if (!isset($_POST['questionId']) || !isset($_POST['answer'])) {
            header('Location: index.php?action=nextQuestion');
            exit();
        }

        $correct = $this->quizModel->verifyAnswer($questionId, $answer);

        if ($correct) {
            $scorePlayer1 = $_SESSION['scorePlayer1']++;
            $scorePlayer1 += 1;
            ?>
            <script>
                alert('acertou');
            </script>
            <?php
        }

        $this->nextQuestion();
    }

    public function answerIsCorrectPlayer2($questionId, $answer)
    {
        if (!isset($_POST['questionId']) || !isset($_POST['answer'])) {
            header('Location: index.php?action=nextQuestionPlayer2');
            ?>
            <script>
                alert('naoexiste');
            </script>
            <?php
            exit();
        }

        $correct = $this->quizModel->verifyAnswer($questionId, $answer);

        if ($correct) {
            $scorePlayer2 = $_SESSION['scorePlayer2']++;
            $scorePlayer2++;
            ?>
            <script>
                alert('acertouu');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert('errou');
            </script>
            <?php
        }

        $this->nextQuestionPlayer2();
    }

    public function result()
    {
        $scorePlayer1 = $_SESSION['scorePlayer1'] ?? 0;
        $this->fetchQuestionsPlayer2();
    }

    public function finalResult()
    {
        $scorePlayer1 = $_SESSION['scorePlayer1'] ?? 0;
        $scorePlayer2 = $_SESSION['scorePlayer2'] ?? 0;
        require 'C:\aluno2\xampp\htdocs\quiz\view\quiz\finalResult.php';

        // Certifique-se de que a sessão foi iniciada antes de tentar destruí-la
    }
}
