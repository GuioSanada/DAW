<?php
    require 'base_de_datos.php';

    // FETCH_ASSOC
    $stmt = $dbh->prepare("SELECT * FROM personas");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();
    // Mostramos los resultados
    while ($row = $stmt->fetch()){
        echo "Nombre: {$row["NOMBRE"]} <br>";
        echo "Email: {$row["MAIL"]} <br><br>";
    }
?>