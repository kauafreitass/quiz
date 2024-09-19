<?php
require_once 'C:\aluno2\xampp\htdocs\quiz\controller\QuizController.php';

if (isset($_POST['skippedQuestion'])) {
    $controller = new QuizController();
    $controller->nextQuestion();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz Game</title>
</head>

<?php if (isset($currentQuestion)): ?>
    <section class="players">
        <div class="player-container">
            <div class="" id="disabled-div-1">
                <span id="">Aguarde a sua vez!</span>
            </div>
            <div class="player-title">
                <h2 id="player1">Jogador 1</h2>
            </div>
            <div class="jogador1">
                <div class="question-number">
                    <h4>Questão #<?php echo $_SESSION['current_question']; ?></h4>
                </div>
                <div class="question">
                    <h5><?php echo $currentQuestion['texto_pergunta']; ?></h5>
                </div>
                <div class="answers">
                    <form method="post" action="index.php?action=answerIsCorrect">
                        <input type="hidden" name="questionId" value="<?php echo $currentQuestion['id']; ?>">
                        <div class="answer1">
                            <input type="radio" id="option1" name="answer"
                                value="<?php echo $currentQuestion['opcao_1']; ?>">
                            <label for="answer1"><?php echo $currentQuestion['opcao_1']; ?></label>
                        </div>
                        <div class="answer2">
                            <input type="radio" id="option2" name="answer"
                                value="<?php echo $currentQuestion['opcao_2']; ?>">
                            <label for="answer2"><?php echo $currentQuestion['opcao_2']; ?></label>
                        </div>
                        <div class="answer3">
                            <input type="radio" id="option3" name="answer"
                                value="<?php echo $currentQuestion['opcao_3']; ?>">
                            <label for="answer3"><?php echo $currentQuestion['opcao_3']; ?></label>
                        </div>
                        <div class="answer4">
                            <input type="radio" id="option4" name="answer"
                                value="<?php echo $currentQuestion['opcao_4']; ?>">
                            <label for="answer4"><?php echo $currentQuestion['opcao_4']; ?></label>
                        </div>

                </div>
            </div>
            <div class="options-btns">
                <div>
                    <button class="skip-btn" onclick="restartTimer()" id="skip-btn" type="submit"
                        value="skippedQuestion">Pular</button>
                </div>
                <button class="send-btn pink" type="submit" onsubmit="restartTimer()">Enviar</button>
                </form>
            </div>
        </div>
    </section>
<?php else: ?>
    <p>Não há mais perguntas disponíveis.</p>
<?php endif; ?>