<html>
    <head>

    </head>

    <body>
        <?php
        $nombre;
        $apellido1;
        $apellido2;
        $dni;
        $edad;
        $mail;

        $error_nombre = $error_apellido1 = $error_apellido2 = $error_dni = $error_edad = $error_mail = null;

        
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['nombre'])){
                    $error_nombre = "Debe rellenar el campo.";
                }else{

                }
            }
        ?>
        
        <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="POST">

                    <p>DNI: <input type="text" name="DNI" required/></p>
                    <p>Nombre: <input type="text" name="nombre" required/></p>
                    <p>Primer apellido: <input type="text" name="apellido1" required/></p>
                    <p>Segundo apellido: <input type="text" name="apellido2" required/></p>
                    <p>Edad: <input type="date" name="edad" required/></p>
                    <p>Email: <input type="text" name="email" required/></p>
                    <p> <input type="submit" value="Validar" required/></p>  
        </form>
    </body>
</html>