<?php
$_SESSION['finished'] = true;
if (!isset($scorePlayer1)) {
    $scorePlayer1 = $_SESSION['scorePlayer1'];
}
?>

<body class="pink">

    <main class="card-players">

        <div class="result-container" style="text-align: center; margin-top: 50px;">
            <h2>Quiz Concluído!</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer1, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>

        <?php

        if (!isset($scorePlayer2)) {
            $scorePlayer2 = $_SESSION['scorePlayer2'];
        }
        ?>

        <div class="result-container" style="text-align: center; margin-top: 50px;">
            <h2>Quiz Concluído!</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer2, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>

    </main>
</body>