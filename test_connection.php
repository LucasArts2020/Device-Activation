<?php

require_once 'config/database.php';



if (isset($pdo) && $pdo instanceof PDO) {
    echo "<h1>Conexão PDO ativa</h1>";
    echo "<p>A variável <code>\$pdo</code> foi iniciada com sucesso.</p>";
} else {
    die("<h1> Erro Crítico: A variável \$pdo não foi encontrada ou não é um objeto PDO válido.</h1><p>Verifique se o arquivo de conexão foi incluído corretamente e se a conexão foi bem-sucedida.</p>");
}
