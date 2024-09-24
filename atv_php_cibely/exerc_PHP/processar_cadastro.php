<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/exerc1.css">
        <title>Exercício 1</title>
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
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $phone = htmlspecialchars($_POST['phone']);
            }
        ?>
        <div class="info">
            <h2>Cliente cadastrado com sucesso!</h2>
            <ul>
                <li><strong>Nome: </strong><?php echo $name ?></li>
                <li><strong>E-mail: </strong><?php echo $email ?></li>
                <li><strong>Telefone: </strong><?php echo $phone ?></li>
            </ul>
        </div>
    </body>
</html>