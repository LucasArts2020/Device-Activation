<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Codigo de ativacao</h1>
    <p>Para ativar a tv, use o codigo abaixo:</p>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once '../config/database.php';

    $codigo = rand(100, 1000);

    $sql = "INSERT INTO device_codes (code) VALUES (?)";

    $stmt = $pdo -> prepare($sql);
    $stmt ->execute([$codigo]);
    echo $codigo;


?>
</div>

</body>
</html>