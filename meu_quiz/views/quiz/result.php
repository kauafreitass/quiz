<?php 
include 'C:\xampp\htdocs\meu_quiz\views\header.php'; 

if (!isset($score)) {
    session_start(); // Iniciar a sessão
    $score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;
}
?>

<div class="result-container" style="text-align: center; margin-top: 50px;">
    <h2>Quiz Concluído!</h2>
    <p>Sua pontuação final é: <strong><?php echo htmlspecialchars($score, ENT_QUOTES, 'UTF-8'); ?></strong> ponto(s).</p>
    <a href="index.php?action=start"
        style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Jogar
        Novamente</a>
</div>

<?php 
include 'C:\xampp\htdocs\meu_quiz\views\footer.php'; 
session_destroy(); 
?>