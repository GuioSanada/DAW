<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'usuarios';

    try {
        $dsn = "mysql:host=$server;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo "Conexion fallida" . $e->getMessage();
    }
?>
