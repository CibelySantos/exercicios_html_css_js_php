<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/exerc3.css">
        <title>Exercício 3</title>
    </head>
    <body>
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
        <div class="container">
            <h2>Formulário de Reserva</h2>
            <form action="processar_reserva.php" method="POST">
                <label for="nome_solicitante">Nome do Solicitante:</label>
                <input type="text" id="nome_solicitante" name="nome_solicitante" required placeholder="Digite seu nome">

                <label for="data_reuniao">Data da Reunião:</label>
                <input type="date" id="data_reuniao" name="data_reuniao" required>

                <label for="horario_reuniao">Horário da Reunião:</label>
                <input type="time" id="horario_reuniao" name="horario_reuniao" required>

                <button type="submit" class="botao">Fazer Reserva</button>
            </form>
        </div>
    </body>
</html>