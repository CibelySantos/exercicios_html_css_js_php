<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/exerc2.css">
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-default"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="../index.html">Home</a>
                </div> 
                <ul class="nav navbar-nav"> 
                    <li><a href="cadastro.php">Exercício 1</a></li>
                    <li><a href="feedback.php">Exercício 2</a></li>
                    <li><a href="reserva.php">Exercício 3</a></li>
                </ul> 
            </div>
        </nav>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome_produto = htmlspecialchars($_POST["nome_produto"]);
                $nota = htmlspecialchars($_POST["nota"]);
                $comentario = htmlspecialchars($_POST["comentario"]);
            }
        ?>
        <div class="container">
            <h2>Feedback Recebido</h2>
            <div class="feedback-item">
                <strong>Nome do Produto:</strong> <?php echo $nome_produto; ?>
            </div>
            <div class="feedback-item">
                <strong>Nota:</strong> <?php echo $nota; ?>
            </div>
            <div class="feedback-item">
                <strong>Comentário:</strong> <?php echo nl2br($comentario); ?>
            </div>
            <div class="thank-you">
                Obrigado por seu feedback!
            </div>
        </div>
    </body>
</html>