<?php 

    require_once 'C:\xampp\htdocs\quiz\config.php';
    require_once 'C:\xampp\htdocs\quiz\controller\SelectRandomController.php';

    $answers = [];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <main class="card-players">
        <div class="game-start" id="box">
            <div class="start-box">
                <h3>Deseja começar o jogo?</h3>
                <button onClick="start()" id="start-button">Começar</button>
            </div>
        </div>
        <section class="players">
            <div class="player-container">
                <div class="disabled" id="disabled-div-1">
                    <span id="disabled-text-1">Aguarde a sua vez!</span>
                </div>
                <div class="player-title">
                    <h2>Jogador 1</h2>
                </div>
                <div class="jogador1">
                    <div class="question-number">
                        <h4>Questão #</h4>
                    </div>
                    <div class="question">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                    </div>
                    <div class="answers">
                        <form method="post">
                            <?php 
                            foreach($answers as $answer): ?>
                            <div class="answer<?= $answer['id'] ?>">
                                <input type="radio" id="answer<?= $answer['id'] ?>" name="answer<?= $answer['id'] ?>"
                                    value="<?= $answer['id'] ?>">
                                <label for="answer<?= $answer['id'] ?>"> <?= $answer['texto_pergunta'] ?></label>
                            </div>
                            <?php endforeach; ?>

                            <div class="answer1">
                                <input type="radio" id="answer1" name="answer" value="1">
                                <label for="answer1">Resposta 1</label>
                            </div>
                            <div class="answer2">
                                <input type="radio" id="answer2" name="answer" value="1">
                                <label for="answer2">Resposta 2</label>
                            </div>
                            <div class="answer3">
                                <input type="radio" id="answer3" name="answer" value="1">
                                <label for="answer3">Resposta 3</label>
                            </div>
                            <div class="answer4">
                                <input type="radio" id="answer4" name="answer" value="1">
                                <label for="answer4">Resposta 4</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="options-btns">
                    <div>
                        <button class="skip-btn" onclick="restartTimer(), skipToAnotherPlayer(), disableButton1()"
                            id="skip-btn">Pular</button>
                    </div>
                    <button class="send-btn">Enviar</button>
                </div>
            </div>
        </section>

        <section class="section-timer">
            <div class="timer-out">
                <div class="timer-in">
                    <span id="time">30</span>
                </div>
            </div>
        </section>

        <section class="players">
            <div class="player-container">
                <div class="disabled" id="disabled-div-2">
                    <span id="disabled-text-2">Aguarde a sua vez!</span>
                </div>
                <div class="player-title">
                    <h2>Jogador 2</h2>
                </div>
                <div class="jogador1">
                    <div class="question-number">
                        <h4>Questão #</h4>
                    </div>
                    <div class="question">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                    </div>
                    <div class="answers">
                        <form method="post">
                            <div class="answer1">
                                <input type="radio" id="answer1" name="answer" value="1">
                                <label for="answer1">Resposta 1</label>
                            </div>
                            <div class="answer2">
                                <input type="radio" id="answer2" name="answer" value="1">
                                <label for="answer2">Resposta 2</label>
                            </div>
                            <div class="answer3">
                                <input type="radio" id="answer3" name="answer" value="1">
                                <label for="answer3">Resposta 3</label>
                            </div>
                            <div class="answer4">
                                <input type="radio" id="answer4" name="answer" value="1">
                                <label for="answer4">Resposta 4</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="options-btns">
                    <div>
                        <button class="skip-btn" onclick="restartTimer(), skipToAnotherPlayer()"
                            id="skip-btn">Pular</button>
                    </div>
                    <button class="send-btn">Enviar</button>
                </div>
            </div>
        </section>
    </main>

    <script src="../../js/start.js"></script>
    <script src="../../js/timer.js"></script>
    <script src="../../js/skip.js"></script>

</body>

</html>