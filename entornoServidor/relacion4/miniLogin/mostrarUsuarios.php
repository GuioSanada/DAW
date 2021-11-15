<html>
    <head>
    <link rel="stylesheet" href="./css/styleMostrar.css" >
    </head>

    <body>
        <div class="container">
        <h1>Listado de usuarios</h1>
        <table class="table" id="usuarios">
            <tr class="table-header">
                <td>DNI: </td>
                <td>Nombre: </td>
                <td>Primer apellido: </td>
                <td>Segundo apellido: </td>
                <td>Edad: </td>
                <td>Mail: </td>
            </tr>
            <?php
                require 'database.php';
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(!empty($_POST['mail'])){
                        $mail = $_POST['mail'];
                        $stmt = $dbh->prepare("SELECT * FROM usuarios where mail = '$mail'");
                    }
                        
                }else{
                    $stmt = $dbh->prepare("SELECT * FROM usuarios");

                }

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
        <div class="filtro">
            <form method="POST" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
                <label for="mail" name="mail">Buscar por mail:</label>
                <input type="mail" id="mail" name="mail"/>
                <input type="submit" value="Buscar">
                <input type="hidden" value="mostrarUsuarios" name="tipoFormulario"/>
            </form>

        </div>
        
        </div>
        

    </body>


</html>