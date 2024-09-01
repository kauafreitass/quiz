<?php include 'C:\xampp\htdocs\meu_quiz\views\header.php'; ?>

<div class="quiz-container" style="text-align: center; margin-top: 50px;">
    <h2>Selecione a Quantidade de Perguntas</h2>
    <form action="index.php?action=start" method="post">
        <label for="question_count">Quantidade de Perguntas:</label>
        <select name="question_count" id="question_count" required>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        <br><br>
        <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">Iniciar Quiz</button>
    </form>
</div>

<?php include 'C:\xampp\htdocs\meu_quiz\views\footer.php'; ?>