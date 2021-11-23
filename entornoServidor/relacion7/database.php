<?php 
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'relacion7';

    try {
        $dsn = "mysql:host=$server;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>