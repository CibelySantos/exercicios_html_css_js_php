<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/cadastro.css">
        <title>Exercício 1</title>
    </head>
    <body>
        <div class="form-container">
            <h2>Formulário de Contato</h2>
            <form action="./exerc_PHP/processar_cadastro.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                <label for="phone">Telefone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Digite seu telefone" required pattern="\d{10,11}" title="Digite um número de telefone válido com 10 ou 11 dígitos">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>