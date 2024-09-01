<?php
require_once 'C:\aluno2\xampp\htdocs\quiz\config.php';
require_once 'C:\aluno2\xampp\htdocs\quiz\controller\QuizController.php';

if ($_SESSION['started'] = true) {
    ?>
    <script>
        function startTimer() {
            Timer(15, display);
        }
    </script>
    <?php
}
;

$controller = new QuizController();

$action = isset($_GET['action']) ? $_GET['action'] : 'showQuestionSelection';

if (method_exists($controller, $action)) {
    if ($action == 'answerIsCorrect') {
        // Verifique se os dados necessários estão presentes antes de usá-los
        $questionId = isset($_POST['questionId']) ? $_POST['questionId'] : null;
        $answer = isset($_POST['answer']) ? $_POST['answer'] : null;

        if ($questionId !== null && $answer !== null) {
            $controller->$action($questionId, $answer);
        } else {
            // Se faltarem dados, redirecione para a próxima pergunta ou reinicie o quiz
            $controller->nextQuestion();
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

        <section class="section-timer">
            <div class="timer-out">
                <div class="timer-in">
                    <span id="time">15</span>
                </div>
            </div>
        </section>

        <section class="players">
            <div class="player-container">
                <div class="disabled" id="disabled-div-2">
                    <span id="disabled-text-2">Aguarde a sua vez!</span>
                </div>
                <div class="player-title">
                    <h2 id="player2">Jogador 2</h2>
                </div>
                <div class="jogador1">
                    <div class="question-number">
                        <h4>Questão #2</h4>
                    </div>
                    <div class="question">
                        <h5>Quem pintou a Mona Lisa?</h5>
                    </div>
                    <div class="answers">
                        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                            <div class="answer1">
                                <input type="radio" id="player2_answer1" name="player2_answer" value="1">
                                <label for="player2_answer1">Pablo Picasso</label>
                            </div>
                            <div class="answer2">
                                <input type="radio" id="player2_answer2" name="player2_answer" value="2">
                                <label for="player2_answer2">Vincent van Gogh</label>
                            </div>
                            <div class="answer3">
                                <input type="radio" id="player2_answer3" name="player2_answer" value="3">
                                <label for="player2_answer3">Leonardo da Vinci</label>
                            </div>
                            <div class="answer4">
                                <input type="radio" id="player2_answer4" name="player2_answer" value="4">
                                <label for="player2_answer4">Michelangelo</label>
                            </div>
                    </div>
                </div>
                <div class="options-btns">
                    <div>
                        <button class="skip-btn" onclick="restartTimer(), skipToAnotherPlayer()" id="skip-btn"
                            type="button">Pular</button>
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