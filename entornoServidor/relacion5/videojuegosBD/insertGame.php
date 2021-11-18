<html>
    <head>

    </head>

    <body>
        <?php
            require 'database.php';
            require 'validarFormulario.php';
            if($error_nombre == null && $error_consola == null && $error_precio == null && $_SERVER['REQUEST_METHOD']=='POST'){
                echo "<br>";
                echo "<h2>El videojuego es $nombre</h2>";
                echo "<h2>La consola es $consola</h2>";
                echo "<h2>El precio es $precio</h2>";
                echo "<br>";

                //  SENTENCIA PARA INSERTAR EL VIDEOJUEGO EN LA BASE DE DATOS
                //  Prepare
                $stmt = $dbh -> prepare("INSERT INTO videojuegos (NOMBRE, CONSOLA, PRECIO) VALUES (:NOMBRE, :CONSOLA, :PRECIO)");
                //  Bind y execute
                if($stmt -> execute(array(':NOMBRE'=>$nombre, ':CONSOLA'=>$consola, ':PRECIO'=>$precio))) {
                    echo "Se ha creado un nuevo registro";
                }
            }
        ?>
                <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post">
                    <p>Inserte nombre: <input type="text" name="nombre"  title="Debe insertar un nombre compuesto por caracteres y/o numeros" required/> <span class="error">* <?php echo $error_nombre;?></span> </p>
                    <p>Inserte consola: 
                    <select name="consola" required>
                        <option value="" selected disabled >Seleccione una consola...</option>
                        <option value="PS5">PS 5</option>
                        <option value="XBOXSX">XBOX SERIES X</option>
                        <option value="SWITCH">SWITCH</option>
                    </select><span class="error">* <?php echo $error_consola;?></span>
                    </p>
                    <p>Inserte precio: <input type="number" name="precio" required/>  <span class="error">* <?php echo $error_precio;?></span></p>
                    <p><input type="submit" value="Insertar"/></p>
                </form>
            
    </body>
</html>