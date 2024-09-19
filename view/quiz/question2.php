<?php
require_once 'C:\aluno2\xampp\htdocs\quiz\controller\QuizController.php';

if (isset($_POST['skippedQuestionPlayer2'])) {
    $controller = new QuizController();
    $controller->nextQuestion();
}

?>

<section class="players">
    <div class="player-container">
        <div class="" id="disabled-div-2">
            <span id="disabled-text-2">Aguarde a sua vez!</span>
        </div>
        <div class="player-title">
            <h2 id="player2">Jogador 2</h2>
        </div>
        <div class="jogador2">
            <div class="question-number">
                <h4>Questão #<?php echo $_SESSION['current_questionPlayer2']; ?></h4>
            </div>
            <div class="question">
                <h5><?php echo $currentQuestionPlayer2['texto_pergunta']; ?></h5>
            </div>
            <div class="answers">
                <form method="post" action="index.php?action=answerIsCorrectPlayer2">
                    <div class="answer1">
                        <input type="radio" id="option1" name="answer"
                            value="<?php echo $currentQuestionPlayer2['opcao_1']; ?>">
                        <label for="answer1"><?php echo $currentQuestionPlayer2['opcao_1']; ?></label>
                    </div>
                    <div class="answer2">
                        <input type="radio" id="option2" name="answer"
                            value="<?php echo $currentQuestionPlayer2['opcao_2']; ?>">
                        <label for="answer2"><?php echo $currentQuestionPlayer2['opcao_2']; ?></label>
                    </div>
                    <div class="answer3">
                        <input type="radio" id="option3" name="answer"
                            value="<?php echo $currentQuestionPlayer2['opcao_3']; ?>">
                        <label for="answer3"><?php echo $currentQuestionPlayer2['opcao_3']; ?></label>
                    </div>
                    <div class="answer4">
                        <input type="radio" id="option4" name="answer"
                            value="<?php echo $currentQuestionPlayer2['opcao_4']; ?>">
                        <label for="answer4"><?php echo $currentQuestionPlayer2['opcao_4']; ?></label>
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