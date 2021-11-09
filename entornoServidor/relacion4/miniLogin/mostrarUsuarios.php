<html>
    <head>

    </head>

    <body>

        <table id="usuarios">
            <tr>
                <td>DNI: </td>
                <td>Nombre: </td>
                <td>Primer apellido: </td>
                <td>Segundo apellido: </td>
                <td>Edad: </td>
                <td>Mail: </td>
            </tr>
            <?php
                require 'database.php';

                $stmt = $dbh->prepare("SELECT * FROM usuarios");
    
                $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    
                $stmt -> execute();
    
                while($row = $stmt -> fetch()){
                    echo "<tr>";
                    echo "<td> {$row["dni"]} </td>";
                    echo "<td> {$row["nombre"]} </td>";
                    echo "<td> {$row["apellido1"]} </td>";
                    echo "<td> {$row["apellido2"]} </td>";
                    echo "<td> {$row["edad"]} </td>";
                    echo "<td> {$row["mail"]} </td>";
                    echo "</tr>";
                }
            ?>
        </table>

    </body>


</html>