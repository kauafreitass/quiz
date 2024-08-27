<?php


require_once 'C:\xampp\htdocs\quiz\config.php';
require_once 'C:\xampp\htdocs\quiz\controller\RegisterQuestionsController.php';

$registerQuestionsController = new RegisterQuestionsController($pdo);

// $registerQuestionsController->ChangeTotalQuestions();

if (isset($_POST["tipo"]) && isset($_POST["texto_pergunta"]) && isset($_POST["correta"]) && isset($_POST["incorreta1"]) && isset($_POST["incorreta2"]) && isset($_POST["incorreta3"])) {
    $registerQuestionsController->registerQuestions($_POST["tipo"], $_POST["texto_pergunta"], $_POST["correta"], $_POST["incorreta1"], $_POST["incorreta2"], $_POST["incorreta3"]);
    header("Location: ../quiz/index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>

<body>

    <main>
        <section class="section-cadastro">
            <div class="card">
                <h1>Cadastrar perguntas</h1>
                <div class="cadastro">
                    <form method="POST" class="formulario-cadastro">
                        <input type="text" placeholder="Digite sua pergunta aqui" name="texto_pergunta">
                        <input type="text" placeholder="Digite a resposta correta" name="correta">
                        <input type="text" placeholder="Digite uma outra resposta" name="incorreta1">
                        <input type="text" placeholder="Digite uma outra resposta" name="incorreta2">
                        <input type="text" placeholder="Digite uma outra resposta" name="incorreta3">

                        <input type="hidden" name="tipo" value="pergunta">
                        <button type="submit" class="btn-cadastrar">Cadastrar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

</body>

</html>