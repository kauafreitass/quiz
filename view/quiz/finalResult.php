<?php

if (!isset($scorePlayer1)) {
    $scorePLayer1 = isset($_SESSION['scorePlayer1']) ? $_SESSION['scorePlayer1'] : 0;
}
?>

<div class="result-container" style="text-align: center; margin-top: 50px;">
    <h2>Quiz Concluído!</h2>
    <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer1, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
</div>

<?php

if (!isset($scorePlayer2)) {
    $scorePLayer2 = isset($_SESSION['scorePlayer2']) ? $_SESSION['scorePlayer2'] : 0;
}
?>

<div class="result-container" style="text-align: center; margin-top: 50px;">
    <h2>Quiz Concluído!</h2>
    <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($scorePlayer2, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
</div>