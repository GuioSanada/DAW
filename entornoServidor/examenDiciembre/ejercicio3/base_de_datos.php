<?php 
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'helados';

    try {
        $dsn = "mysql:host=$server;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>