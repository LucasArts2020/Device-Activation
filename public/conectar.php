<?php

require_once '../config/database.php';

$codigo_digitado = $_POST['codigo'];


$sql = "SELECT * FROM device_codes WHERE code = ? AND status = 'pending'";
$stmt = $pdo->prepare($sql);
$stmt->execute([$codigo_digitado]);
$device = $stmt->fetch();


if ($device) {
    $updateSql = "UPDATE device_codes SET status = 'connected' WHERE id = ?";
    $pdo->prepare($updateSql)->execute([$device['id']]);

    header('Location: sucesso.php');
    exit();

} else {
    header('Location: erro.php');
    exit();
}