<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <?php
            require 'database.php';
            require 'validarFormulario.php';

            if($error_apellido1 == null && $error_apellido2 == null && $error_dni == null && $error_edad == null && $error_mail == null && $error_nombre == null && $_SERVER['REQUEST_METHOD']=='POST'){
                echo "Los datos introducidos son:<br>";
                echo "DNI $dni<br>";
                echo "Nombre $nombre<br>";
                echo "Primer apellido: $apellido1<br>";
                echo "Segundo apellido: $apellido2<br>";
                echo "Nombre $edad<br>";
                echo "Nombre $mail<br>";
                echo "----------------------";
                //  SENTENCIA PARA INSERTAR EL VIDEOJUEGO EN LA BASE DE DATOS
                //  Prepare
                $stmt = $dbh -> prepare("INSERT INTO usuarios (dni, nombre, apellido1, apellido2, edad, mail) VALUES (:dni, :nombre, :apellido1, :apellido2, :edad, :mail)");
                //  Bind y execute
                if($stmt -> execute(array(':dni'=>$dni, ':nombre'=>$nombre, ':apellido1'=>$apellido1, ':apellido2'=>$apellido2, ':edad'=>$edad, ':mail'=>$mail))) {
                    echo "Se ha creado un nuevo registro";
                }

            }
            
        ?>
        <div id="formulario" name>
            <h1>&bull; Inserte un usuario &bull;</h1>
            <div class="underline"></div>   
            <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="POST">
                
                <div class="dni">
                    <label for="dni"></label>
                    <input type="text" placeholder="Ejemplo: 12345678A" name="dni" required/><span class="error">* <?php echo $error_dni;?>
                </div>

                <div class="nombre">
                    <label for="nombre"></label>
                    <input type="text" placeholder="Paco" name="nombre" required/><span class="error">* <?php echo $error_nombre;?>
                </div>
                
                <div class="apellido1">
                    <label for="apellido1"></label>
                    <input type="text" placeholder="Perez" name="apellido1" required/><span class="error">* <?php echo $error_apellido1;?>
                </div>

                <div class="apellido2">
                    <label for="apellido2"></label>
                    <input type="text" placeholder="Blanco" name="apellido2" required/><span class="error">* <?php echo $error_apellido2;?>
                </div>

                <div class="edad">
                    <label for="edad"></label>
                    <input type="date" value="1986/05/02" name="edad" required/><span class="error">* <?php echo $error_edad;?>
                </div>

                <div class="mail">
                    <label for="mail"></label>
                    <input type="email" placeholder="PacoPerez@Blanco.com" name="mail" required/><span class="error">* <?php echo $error_mail;?>
                </div>
                
                <div class="submit">
                    <input type="submit" value="Registrar" id="form_button" />
                </div>
                <input type="hidden" value="insertarUsuario" name="tipoFormulario"/>

            </form>
        </div>
        

    </body>
</html>