<div class="game-start <?php if (isset($_GET['action'])) {
    $_SESSION['total_questions'] = $_GET['total_perguntas'];
    ?>
            <script>
                start();
        </script>
        <?php
        return "hidden";
}
; ?>" id="box">;
    <div class="start-box">
        <h3>Deseja começar o jogo?</h3>
        <form id="start-form" method="get" action="index.php?action=start">
            <input type="hidden" name="action" value="start">
            <label for="nome_jogador1">Insira o nome do jogador 1:</label>
            <label for="total_perguntas">Escolha o número de perguntas (máximo 40):</label>
            <input type="number" id="total_perguntas" name="total_perguntas" min="1" max="40" value="10">
            <button type="submit" onClick="start(), createSession()" id="start-button">Começar</button>
        </form>
    </div>
</div>