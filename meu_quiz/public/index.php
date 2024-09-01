<?php
require_once 'C:\xampp\htdocs\meu_quiz\controllers\QuizController.php';



$controller = new QuizController();

$action = isset($_GET['action']) ? $_GET['action'] : 'showQuestionSelection';

if (method_exists($controller, $action)) {
    if ($action == 'validateAnswer') {
        // Verifique se os dados necessários estão presentes antes de usá-los
        $questionId = isset($_POST['questionId']) ? $_POST['questionId'] : null;
        $answer = isset($_POST['answer']) ? $_POST['answer'] : null;

        if ($questionId !== null && $answer !== null) {
            $controller->$action($questionId, $answer);
        } else {
            // Se faltarem dados, redirecione para a próxima pergunta ou reinicie o quiz
            $controller->nextQuestion();
        }
    } else {
        $controller->$action();
    }
} else {
    echo "Ação inválida!";
}
?>
