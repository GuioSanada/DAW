<?php

    require 'base_de_datos.php';

    $stmt = $dbh->prepare("SELECT * FROM productos");
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $stmt -> execute();

    echo "<table>";
        echo "<tr>";
            echo "<td>Nombre Libro</td>";
            echo "<td>Precio</td>";
        echo "</tr>";

        while($row = $stmt -> fetch()){
            echo "<tr>";
                echo "<td> {$row["nombre"]} </td>";
                echo "<td> {$row["precio"]} </td>";
            echo "</tr>";
        }
    echo "</table>";
?>
