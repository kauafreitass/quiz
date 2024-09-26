<?php
$_SESSION['player1Finished'] = true;
$_SESSION['finished'] = true;
if (!isset($scorePlayer1)) {
    $scorePlayer1 = $_SESSION['scorePlayer1'];
}
?>

<body class="pink">

    <main style="display: flex; justify-content: center; align-items: center; gap: 100px; width: 100vw;">

        <div class="result-container" style="text-align: center; margin-top: 50px; width: 300px; height: 200px;">
            <h2>Jogador 1</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer1, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>

        <div class="final-result">
            <?php
            if ($scorePlayer1 > $scorePlayer2) {
                echo '
                    <div class="winner-text">
                <h4>O jogador 1 venceu!</h4>
            </div>
                    ';
            } elseif ($scorePlayer2 < $scorePlayer1) {
                echo '
                <div class="winner-text">
                <h4>O jogador 1 venceu!</h4>
            </div>
            ';
            } elseif ($scorePlayer1 == $scorePlayer2) {
                echo '
                <div class="winner-text">
                <h4>EMPATE!</h4>
            </div>
            ';
            }
            ?>

            <button class="playagain-btn green" onclick="redirectToIndex()">Jogar novamente</button>
        </div>

        <?php

        if (!isset($scorePlayer2)) {
            $scorePlayer2 = $_SESSION['scorePlayer2'];
        }
        ?>

        <div class="result-container" style="text-align: center; margin-top: 50px; width: 300px; height: 200px;">
            <h2>Jogador 2</h2>
            <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer2, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
        </div>

    </main>

</body>

<script>
    function redirectToIndex() {
        window.location.href = "index.php";
    }
</script>