<?php 
    include 'base_de_datos.php';
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Editorial</th>
        <th>Fecha de estreno</th>
    </tr>

    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id = $_POST['id'];
            $stmt = $dbh -> prepare("DELETE FROM comics WHERE id=:id");
            if ($stmt -> execute(array(':id'=>$id))) {
                echo "Se ha eliminado el registro<br>";
                echo "<br>-------------<br><br>";
            }
        }
        $animes = [];

        $stmt = $dbh->prepare("SELECT * FROM comics");
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $stmt -> execute();

        while ($row = $stmt -> fetch()){
            $anime = [$row["id"], $row["nombre"], 
                        $row["editorial"], $row["fecha_estreno"]];
            array_push($animes, $anime);
        }

        foreach ($animes as $anime) {
            list($id, $nombre, $fecha_estreno, $productora) = $anime;
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nombre</td>";
            echo "<td>$fecha_estreno</td>";
            echo "<td>$productora</td>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='id' value=$id>";
            echo "<input type='hidden' name='accion' value='borrar'>";
            echo "<td><input type='submit' name='borrar' value='Borrar'></td>";
            echo "</form>";
            echo "</tr>";
        }
        
    ?>

    </table>