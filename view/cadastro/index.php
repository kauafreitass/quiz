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
                        <input type="text" placeholder="Digite sua pergunta aqui" name="pergunta">
                        <input type="text" placeholder="Digite a resposta correta" name="correta">
                        <input type="text" placeholder="Digite uma outra resposta" name="incorreta1">
                        <input type="text" placeholder="Digite uma outra resposta" name="incorreta2">
                        <input type="text" placeholder="Digite uma outra resposta" name="incorreta3">
                        <button type="submit" class="btn-cadastrar">Cadastrar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

</body>

</html>