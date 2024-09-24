<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/exerc2.css">
        <title>Exercício 2</title>
    </head>
    <nav class="navbar navbar-default"> 
        <div class="container-fluid"> 
            <div class="navbar-header"> 
                <a class="navbar-brand" href="../index.php">Home</a>
            </div> 
            <ul class="nav navbar-nav"> 
                <li><a href="processar_cadastro.php">Exercício 1</a></li>
                <li><a href="feedback.php">Exercício 2</a></li>
                <li><a href="reserva.php">Exercício 3</a></li>
            </ul> 
        </div>
    </nav>
    <body>
        <div class="container">
        <h2>Deixe seu Feedback</h2>
        <form action="processar_feedback.php" method="POST">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" id="nome_produto" name="nome_produto" required placeholder="Digite o nome do produto">

            <label for="nota">Nota (1 a 5):</label>
            <select id="nota" name="nota" required>
                <option value="">Selecione uma nota</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <label for="comentario">Comentário:</label>
            <textarea id="comentario" name="comentario" required placeholder="Digite seu comentário"></textarea>

            <button type="submit" class="botao">Enviar Feedback</button>
        </form>
    </div>
    </body>
</html>