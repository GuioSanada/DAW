<!DOCTYPE html>

    <head>
        <title>Document</title>
        <link rel="stylesheet" href="./css/styleModificar.css">
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
            }
            if(isset($_POST['modificar'])){
                if($_SERVER['REQUEST_METHOD']=='POST' && !isset($_POST["tipoSubmit"])){
                    $id = $_POST['id'];
                    $nombre = $_POST['nombre'];
                    $fecha_estreno = $_POST['fecha_estreno'];
                    $stmt = $dbh -> prepare("UPDATE peliculas SET nombre=:nombre, fecha_estreno=:fecha_estreno where id=:id");
                    if($stmt -> execute(array(':id'=>$id, ':nombre'=>$nombre, ':fecha_estreno' => $fecha_estreno))){
                        echo "Se ha modificado correctamente.";
                    }
                }
            }
            
        ?>
        <div class="container">
            <h1>Modificar registro</h1>
            <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"])?>" method="POST">
                <div class="containerTable"> 
                    <label for="nombre" id="nombre">Nombre: </label>
                    <input type="text" placeholder="<?php echo $_POST['nombre']?>" name="nombre"/>
                    <label for="fecha_estreno" id="fecha_estreno">Fecha de estreno: </label>
                    <input type="text" placeholder="<?php echo $_POST['fecha_estreno']?>" name="fecha_estreno"/>
                    <input type="submit" value="Modificar">
                    <input type="hidden" name = "modificar" value="modificar"/>
                    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>
                </div>
                
            </form>
        </div>
        
    </body>

</html>