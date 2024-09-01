<?php include 'C:\xampp\htdocs\meu_quiz\views\header.php'; ?>
<?php if (isset($currentQuestion)): ?>
    <div class="quiz-container" style="text-align: center; margin-top: 50px;">
        <h2>Questão <?php echo $_SESSION['current_question']; ?> de <?php echo $_SESSION['total_questions']; ?></h2>
        <form action="index.php?action=validateAnswer" method="post">
            <input type="hidden" name="questionId" value="<?php echo $currentQuestion['id']; ?>">
            <p><?php echo $currentQuestion['question']; ?></p>
            <div>
                <input type="radio" id="option1" name="answer" value="<?php echo $currentQuestion['option_a']; ?>" required>
                <label for="option1"><?php echo $currentQuestion['option_a']; ?></label>
            </div>
            <div>
                <input type="radio" id="option2" name="answer" value="<?php echo $currentQuestion['option_b']; ?>">
                <label for="option2"><?php echo $currentQuestion['option_b']; ?></label>
            </div>
            <div>
                <input type="radio" id="option3" name="answer" value="<?php echo $currentQuestion['option_c']; ?>">
                <label for="option3"><?php echo $currentQuestion['option_c']; ?></label>
            </div>
            <div>
                <input type="radio" id="option4" name="answer" value="<?php echo $currentQuestion['option_d']; ?>">
                <label for="option4"><?php echo $currentQuestion['option_d']; ?></label>
            </div>
            <br>
            <button type="submit"
                style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">Enviar
                Resposta</button>
        </form>
    </div>
<?php else: ?>
    <p>Não há mais perguntas disponíveis.</p>
<?php endif; ?>

<?php include 'C:\xampp\htdocs\meu_quiz\views\footer.php';
?>