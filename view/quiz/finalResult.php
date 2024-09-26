<?php
$_SESSION['player1Finished'] = true;
$_SESSION['finished'] = true;
if (!isset($scorePlayer1)) {
    $scorePlayer1 = $_SESSION['scorePlayer1'];
}
?>

<body class="pink">

    <main style="margin-left: 25px ;display: flex; justify-content: center; gap: 200px;">

        <div class="result-container" style="text-align: center; margin-top: 50px; width: 400px;">
            <h2>Quiz Concluído!</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer1, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>

        <button class="playagain-btn green" onclick="redirectToIndex()">Jogar novamente</button>

        <?php

        if (!isset($scorePlayer2)) {
            $scorePlayer2 = $_SESSION['scorePlayer2'];
        }
        ?>

        <div class="result-container" style="text-align: center; margin-top: 50px; width: 400px;">
            <h2>Quiz Concluído!</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer2, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>

    </main>

</body>

<script>
    function redirectToIndex() {
        window.location.href = "index.php";
    }
</script>