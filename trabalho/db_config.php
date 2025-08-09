<?php
$host = 'server-trabalho.database.windows.net';
$dbname = 'dbTrabalho';
$username = 'adm';
$password = '#Dv12345678';

try {
    $conn = new PDO("sqlsrv:server=$host;Database=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
