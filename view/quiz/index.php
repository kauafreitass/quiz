    <?php
    session_start();
    require_once 'C:\aluno2\xampp\htdocs\quiz\config.php';
    require_once 'C:\aluno2\xampp\htdocs\quiz\controller\SelectRandomController.php';

    if (isset(($_SESSION["jogando"]))) {
    ?>
        <script src="../../js/start.js">
            start();
        </script>
    <?php
    } else {
        $sessao = $_SESSION["jogando"];
        echo $sessao;
    };

    ?>

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
            <div class="game-start" id="box">
                <div class="start-box">
                    <h3>Deseja começar o jogo?</h3>
                    <form id="start-form" method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
                        <label for="nome_jogador1">Insira o nome do jogador 1:</label>
                        <input type="text" id="nome-jogador1" name="nome_jogador1" oninput="document.getElementById('player1').innerHTML = this.value;">
                        <label for="nome_jogador2">Insira o nome do jogador 2:</label>
                        <input type="text" id="nome_jogador2" name="nome_jogador2" oninput="document.getElementById('player2').innerHTML = this.value;">
                        <label for="total_perguntas">Escolha o número de perguntas (máximo 40):</label>
                        <input type="number" id="num-perguntas" name="total_perguntas" min="1" max="40" value="10">
                        <button type="button" onClick="start(), updateProgressBar(1, document.getElementById('num-perguntas').value)" id="start-button">Começar</button>
                    </form>
                </div>
                </div>
                <div class="player-container">
                    <div class="progress-bar progress-bar-pink" id="progress-bar-pink">
                        <div class="progress progress-pink" id="progress-pink"></div>
                    </div>
                    <div class="disabled" id="disabled-div-1">
                        <span id="disabled-text-1">Aguarde a sua vez!</span>
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
                            <form method="post">
                                <div class="answer1">
                                    <input type="radio" id="answer1" name="answer" value="1">
                                    <label for="answer1">Rio de Janeiro</label>
                                </div>
                                <div class="answer2">
                                    <input type="radio" id="answer2" name="answer" value="2">
                                    <label for="answer2">São Paulo</label>
                                </div>
                                <div class="answer3">
                                    <input type="radio" id="answer3" name="answer" value="3">
                                    <label for="answer3">Brasília</label>
                                </div>
                                <div class="answer4">
                                    <input type="radio" id="answer4" name="answer" value="4">
                                    <label for="answer4">Salvador</label>
                                </div>

                        </div>
                    </div>
                    <div class="options-btns">
                        <div>
                            <button class="skip-btn" onclick="restartTimer(), skipToAnotherPlayer(), disableButton1()"
                                id="skip-btn" type="button">Pular</button>
                        </div>
                        <button class="send-btn pink" type="submit">Enviar</button>
                    </div>
                    </form>
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
                    <div class="progress-bar progress-bar-green" id="progress-bar-green">
                        <div class="progress progress-green" id="progress-green"></div>
                    </div>
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
                            <button class="skip-btn" onclick="restartTimer(), skipToAnotherPlayer()"
                                id="skip-btn" type="button">Pular</button>
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

    </body>

    </html>