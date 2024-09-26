<?php
$scorePlayer1 = $_SESSION['scorePlayer1'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz Game</title>
</head>

<body>
    <main class="card-players">
        <div class="result-container" style="text-align: center; margin-top: 50px; margin-left: 200px; height: 250px ;">
            <h2>Quiz Concluído!</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer1, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>


        <section class="section-timer">
            <div class="timer-out">
                <div class="timer-in">
                    <span id="time">10</span>
                </div>
            </div>
        </section>

        <script src="../../js/start.js"></script>
        <script src="../../js/timer.js"></script>
        <script src="../../js/skip.js"></script>
        <script src="../../js/progress.js"></script>
        <script src="../../js/keyboard.js"></script>