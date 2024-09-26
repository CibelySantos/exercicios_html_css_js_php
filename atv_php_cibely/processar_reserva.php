<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/exerc3.css">
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
                $nome_solicitante = htmlspecialchars($_POST["nome_solicitante"]);
                $data_reuniao = htmlspecialchars($_POST["data_reuniao"]);
                $horario_reuniao = htmlspecialchars($_POST["horario_reuniao"]);
            }
        ?>
        <div class="container">
            <h2>Reserva Confirmada</h2>
            <p><strong>Nome do Solicitante:</strong> <?php echo $nome_solicitante; ?></p>
            <p><strong>Data da Reunião:</strong> <?php echo $data_reuniao; ?></p>
            <p><strong>Horário da Reunião:</strong> <?php echo $horario_reuniao; ?></p>
            <div class="thank-you">
                <p>Sua reserva foi feita com sucesso! Obrigado por utilizar o nosso sistema de reservas.</p>
            </div>
        </div>
    </body>
</html>