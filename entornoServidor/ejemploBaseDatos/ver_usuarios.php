<link rel="stylesheet" href="styles.css"> 

<?php
    require 'base_de_datos.php';
?>

<table id="tabla">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
    </tr>
    <?php
        /* 
            Sentencia para realizar la consulta de todos los usuarios
            de la base de datos. 
        */
        //  FETCH_ASSOC
        $stmt = $dbh->prepare("SELECT * FROM personas");
        //  Especificamos el fetch mode antes de llamar a fetch()
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        //  Ejecutamos
        $stmt -> execute();
        //  Mostramos los resultados
        while ($row = $stmt -> fetch()){
            echo "<tr>";
            echo "<td>{$row["NOMBRE"]}</td>";
            echo "<td>{$row["MAIL"]}</td>";
            echo "</tr>";
        }
    ?>
</tabla>