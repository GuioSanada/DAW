<!DOCTYPE html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    </head>
    <body>
    <?php
        require 'database.php';
        session_start();
        if(isset($_SESSION["nick"])){
            echo "<h1>Bienvenido ".$_SESSION["nick"]."</h1>";
            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["tipoSubmit"])){
                session_destroy();
                header("Location: index.php");
            }
            ?>
            <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
                <input type="hidden" value="cerrarSession" name="tipoSubmit"/>
                <input type="submit" value="Cerrar sesión"/>
            </form>
            <?php
        }else{
            header("Location: index.php");
        }
        
        
    ?>
    
        <div class="container">
            <h2>Listado de películas</h2>
            <table class="tabla">
                <tr class="cabeceraTabla">   
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de estreno</th>
                    <th></th>

                </tr>
                <?php
                    if($_SERVER['REQUEST_METHOD']=='POST' && !isset($_POST["tipoSubmit"])){
                        
                        $id =$_POST['id'];
                        $stmt = $dbh ->prepare("DELETE FROM peliculas WHERE id=:id");
                        $stmt -> execute(array(':id'=>$id));

                    }

                    $peliculas = [];
                    /* 
                        Sentencia para realizar la consulta de todas las películas
                        de la base de datos. 
                    */
                    //  FETCH_ASSOC
                    $stmt = $dbh->prepare("SELECT * FROM peliculas");
                    //  Especificamos el fetch mode antes de llamar a fetch()
                    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
                    //  Ejecutamos
                    $stmt -> execute();
                    //  Guardamos las películas obtenidas de la BD en un array multidimensional
                    while ($row = $stmt -> fetch()){
                        $pelicula = [$row['id'], $row["nombre"], $row["fecha_estreno"]];
                        array_push($peliculas, $pelicula);
                    }
                    //  Mostramos el contenido del array donde hemos guardado las películas
                    foreach ($peliculas as $pelicula) {
                        list($id, $nombre, $fecha_estreno) = $pelicula;
                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$nombre</td>";
                        echo "<td>$fecha_estreno</td>";
                        ?>
                        <td>
                            <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
                                <input type="submit" class="submit" value="Borrar">
                                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                            </form>
                            <form method="post"  action="modificar.php">
                                <input type="submit" class="submit" value="Modificar">
                                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
                                <input type="hidden" name="fecha_estreno" value="<?php echo $fecha_estreno ?>"/>
                            </form>
                            </td>
                        <?php echo "</tr>";
                        
                    }
                ?>
            </table>
                </div>
        
    </body>
</html>
