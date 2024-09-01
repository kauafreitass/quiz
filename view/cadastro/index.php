<?php


require_once 'C:\aluno2\xampp\htdocs\quiz\config.php';
require_once 'C:\aluno2\xampp\htdocs\quiz\controller\QuizController.php';

$registerQuestionsController = new QuizController($pdo);

// $registerQuestionsController->ChangeTotalQuestions();

if (isset($_POST["tipo"]) && isset($_POST["texto_pergunta"]) && isset($_POST["correta"]) && isset($_POST["incorreta1"]) && isset($_POST["incorreta2"]) && isset($_POST["incorreta3"])) {
    $registerQuestionsController->registerQuestions($_POST["tipo"], $_POST["texto_pergunta"], $_POST["correta"], $_POST["incorreta1"], $_POST["incorreta2"], $_POST["incorreta3"]);
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
                <h1>Cadastre uma pergunta</h1>
                <p>
                    Bem-vindo à página de cadastro de perguntas para o nosso quiz! Aqui você pode contribuir com novas
                    questões para tornar o jogo mais interessante e desafiador. Para cadastrar uma pergunta, siga estas
                    etapas simples:
                </p>
                <ol>
                    <li>Digite o texto da sua pergunta no primeiro campo</li>
                    <li>Insira a resposta correta no segundo campo</li>
                    <li>Adicione três alternativas incorretas nos campos restantes</li>
                </ol>
                <p>
                    Após preencher todos os campos, clique no botão "Cadastrar" para adicionar sua pergunta ao banco de
                    dados. Suas contribuições serão utilizadas no jogo, enriquecendo a experiência para todos os
                    jogadores.
                </p>
                <p>
                    Lembre-se: crie perguntas claras e objetivas, com uma única resposta correta bem definida. Isso
                    garantirá uma experiência de jogo justa e agradável para todos os participantes.
                </p>
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