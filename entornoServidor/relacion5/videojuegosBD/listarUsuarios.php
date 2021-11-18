<html>
    <head>

    </head>

    <body>

        <table id="tablaUsuarios">
            <tr>
                <td>Videojuego</td>
                <td>Consola</td>
                <td>Precio</td>
            </tr>

            <?php
            require 'database.php';

            $stmt = $dbh->prepare("SELECT * FROM videojuegos");

            $stmt -> setFetchMode(PDO::FETCH_ASSOC);

            $stmt -> execute();

            while($row = $stmt -> fetch()){
                echo "<tr>";
                echo "<td> {$row["NOMBRE"]} </td>";
                echo "<td> {$row["CONSOLA"]} </td>";
                echo "<td> {$row["PRECIO"]} </td>";
                echo "</tr>";
            }
            ?>
        </table>

    </body>

</html>