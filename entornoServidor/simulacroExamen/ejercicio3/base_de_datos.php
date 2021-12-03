<?php 
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'productos';

    try {
        $dsn = "mysql:host=$server;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>