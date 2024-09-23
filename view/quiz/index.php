<?php
require_once 'C:\aluno2\xampp\htdocs\quiz\config.php';
require_once 'C:\aluno2\xampp\htdocs\quiz\controller\QuizController.php';


if (isset($_SESSION['finished'])) {
    $_SESSION['scorePlayer1'] = 0;
    $_SESSION['scorePlayer2'] = 0;
    session_unset();
    session_destroy();
}

if (isset($_SESSION['started'])) {
?>
    <script>
        function startTimer() {
            Timer(15, display);
        }
    </script>
<?php
};

$controller = new QuizController();

$action = isset($_GET['action']) ? $_GET['action'] : 'showQuestionSelection';

if (method_exists($controller, $action)) {
    if ($action === 'answerIsCorrect') {
        // Verifique se os dados necessários estão presentes antes de usá-los
        $questionId = isset($_POST['questionId']) ? $_POST['questionId'] : null;
        $answer = isset($_POST['answer']) ? $_POST['answer'] : null;

        if ($questionId !== null && $answer !== null) {
            $controller->$action($questionId, $answer);
        } else {
            // Se faltarem dados, redirecione para a próxima pergunta ou reinicie o quiz
            $controller->nextQuestion();
        }
    } elseif ($action === 'answerIsCorrectPlayer2') {
        // Verifique se os dados necessários estão presentes antes de usá-los
        $questionId = isset($_POST['questionId']) ? $_POST['questionId'] : null;
        $answer = isset($_POST['answer']) ? $_POST['answer'] : null;

        if ($questionId !== null && $answer !== null) {
            $controller->$action($questionId, $answer);
        } else {
            // Se faltarem dados, redirecione para a próxima pergunta ou reinicie o quiz
            $controller->nextQuestionPlayer2();
        }
    } else {
        $controller->$action();
    }
} else {
    echo "Ação inválida!";
}
?>

<script>
    function createSession() {
        <?php
        session_start();
        ?>
    }
</script>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz Game</title>
</head>

<body class="pink">

    <main class="card-players">
        <!-- Jogador 1 -->

        <section class="players hidden">
            <div class="player-container">
                <div class="disabled" id="disabled-div-2">
                    <span id="disabled-text-2">Aguarde a sua vez!</span>
                </div>
                <div class="player-title">
                    <h2 id="player1">Jogador 1</h2>
                </div>
                <div class="jogador1">
                    <div class="question-number">
                        <h4>Questão #1</h4>
                    </div>
                    <div class="question">
                        <h5>Qual é a capital do Brasil?</h5>
                    </div>
                    <div class="answers">
                        <form method="post" action="index.php?action=answerIsCorrect">
                            <div class="answer1">
                                <input type="radio" id="option1" name="answer"
                                    value="<?php echo $currentQuestion['opcao_1']; ?>">
                                <label for="answer1">São Paulo</label>
                            </div>
                            <div class="answer2">
                                <input type="radio" id="option2" name="answer"
                                    value="<?php echo $currentQuestion['opcao_2']; ?>">
                                <label for="answer2">Brasília</label>
                            </div>
                            <div class="answer3">
                                <input type="radio" id="option3" name="answer"
                                    value="<?php echo $currentQuestion['opcao_3']; ?>">
                                <label for="answer3">Rio de Janeiro</label>
                            </div>
                            <div class="answer4">
                                <input type="radio" id="option4" name="answer"
                                    value="<?php echo $currentQuestion['opcao_4']; ?>">
                                <label for="answer4">Salvador</label>
                            </div>
                    </div>
                </div>
                <div class="options-btns">
                    <div>
                        <button class="skip-btn" onclick="restartTimer()" id="skip-btn" type="submit"
                            value="skippedQuestion">Pular</button>
                    </div>
                    <button class="send-btn pink" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="players hidden">
            <div class="player-container">
                <div class="disabled" id="disabled-div-2">
                    <span id="disabled-text-2">Aguarde a sua vez!</span>
                </div>
                <div class="player-title">
                    <h2 id="player2">Jogador 2</h2>
                </div>
                <div class="jogador2">
                    <div class="question-number">
                        <h4>Questão #1</h4>
                    </div>
                    <div class="question">
                        <h5>Qual é a capital do Brasil?</h5>
                    </div>
                    <div class="answers">
                        <form method="post" action="index.php?action=answerIsCorrectPlayer2">
                            <div class="answer1">
                                <input type="radio" id="option1" name="answer"
                                    value="<?php echo $currentQuestionPlayer2['opcao_1']; ?>">
                                <label for="answer1">São Paulo</label>
                            </div>
                            <div class="answer2">
                                <input type="radio" id="option2" name="answer"
                                    value="<?php echo $currentQuestionPlayer2['opcao_2']; ?>">
                                <label for="answer2">Brasília</label>
                            </div>
                            <div class="answer3">
                                <input type="radio" id="option3" name="answer"
                                    value="<?php echo $currentQuestionPlayer2['opcao_3']; ?>">
                                <label for="answer3">Rio de Janeiro</label>
                            </div>
                            <div class="answer4">
                                <input type="radio" id="option4" name="answer"
                                    value="<?php echo $currentQuestionPlayer2['opcao_4']; ?>">
                                <label for="answer4">Salvador</label>
                            </div>
                    </div>
                </div>
                <div class="options-btns">
                    <div>
                        <button class="skip-btn" onclick="restartTimer()" id="skip-btn" type="submit"
                            value="skippedQuestionPlayer2">Pular</button>
                    </div>
                    <button class="send-btn green" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>


    </main>

    <script src="../../js/start.js"></script>
    <script src="../../js/timer.js"></script>
    <script src="../../js/skip.js"></script>
    <script src="../../js/progress.js"></script>
    <script src="../../js/keyboard.js"></script>

</body>

</html>