<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Digitar Código</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="controle.css">
</head>
<body>

<div class="container">
    <h1>Digite o código exibido na sua tela</h1>

    <form action="conectar.php" method="POST" class="form-conexao">

        <input
            type="text"
            id="codigo_input"
            name="codigo"
            placeholder="------"
            maxlength="6"
            required
        >

        <button type="submit" class="btn-conectar">Conectar</button>
    </form>
    <?php

    ?>
</div>

</body>
</html>