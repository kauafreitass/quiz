<?php include 'C:\xampp\htdocs\meu_quiz\views\header.php'; ?>

<div class="quiz-container">
    <?php foreach ($questions as $question): ?>
        <div class="question">
            <h2><?php echo $question['question']; ?></h2>
            <form action="index.php?action=validateAnswer" method="post">
                <input type="hidden" name="questionId" value="<?php echo $question['id']; ?>">
                <input type="radio" name="answer" value="A"> <?php echo $question['option_a']; ?><br>
                <input type="radio" name="answer" value="B"> <?php echo $question['option_b']; ?><br>
                <input type="radio" name="answer" value="C"> <?php echo $question['option_c']; ?><br>
                <input type="radio" name="answer" value="D"> <?php echo $question['option_d']; ?><br>
                <button type="submit">Enviar Resposta</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'C:\xampp\htdocs\meu_quiz\views\footer.php'; ?>
