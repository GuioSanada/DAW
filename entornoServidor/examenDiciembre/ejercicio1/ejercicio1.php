<?php
    // EJERCICIO1
    $series = array(
        array('Dragon Ball Z', '100', '01-01-1999'),
        array('Sailor Moon', '200', '01-01-1980'),
        array('Sakura Card Captor', '150', '01-01-2000')
    );
    // EJERCICIO2
    array_push($series, array('Kimetsu No Yaiba', '40', '01-01-2021'));
    
    // EJERCICIO 3
    echo "<h2>Mostramos el contenido de nuestro Array tal cual se insertó</h2>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Serie</th>";
    echo "<th>Num Capitulos</th>";
    echo "<th>Fecha Estreno</th>";
    echo "</tr>";

    foreach($series as $serie){
        list($nombre, $capitulos, $fecha) = $serie;
        echo "<tr>";
        echo "<td>$nombre</th>";
        echo "<td>$capitulos</td>";
        echo "<td>$fecha</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "-------------------------<br><br>";

    echo "<h2>Mostramos el contenido de nuestro Array en orden alfabetico.</h2>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Serie</th>";
    echo "<th>Num Capitulos</th>";
    echo "<th>Fecha Estreno</th>";
    echo "</tr>";

    $nombre = array_column($series,0);
    array_multisort($nombre, SORT_ASC, $series);

    foreach($series as $serie){
        list($nombre, $capitulos, $fecha) = $serie;
        echo "<tr>";
        echo "<td>$nombre</th>";
        echo "<td>$capitulos</td>";
        echo "<td>$fecha</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "-------------------------<br><br>";
?>
