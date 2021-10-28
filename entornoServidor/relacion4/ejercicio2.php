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
        $error=null;

        function depurar($a){
            $a = trim($a);
            $a = stripslashes($a);
            $a = htmlspecialchars($a);
            return $a;
        }

        function validarNombre($name){
            $pattern = '^[a-zA-Z0-9]+$^';
            if(!preg_match($pattern, $name))
                return false;
            else
                return true;
        }

        function validarEdad($num){
            $pattern = '^[0-9]{1,2}$^';
            if(!preg_match($pattern, $num) || $num < 0 || $num > 120)
                return false;
            else
                return true;
            
        }

        function validarMail($cadena){
            $pattern = '/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/';
            if(!preg_match($pattern, $cadena) && !strpos($cadena, "cabron") && !strpos($cadena, "puta") && !strpos($cadena, "marica")){
                return false;
            }else  
                return true;
        }

        function validarDNI($cadena){
            $pattern = '/[0-9]{7,8}[A-Z]/';
            if(!preg_match($pattern, $cadena))
                return false;
            else  
                return true;
        }
        
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['dni'])){
                    $error_dni = "Debe rellenar el campo.";
                }
                    
                else{
                    $dni = depurar($dni);
                    if(!validarDNI($dni)){
                        $error_dni = "El DNI es incorrecto. Compruebe el formato.";
                    }
                        
                }

                if(empty($_POST['nombre'])){
                    $error_nombre  = "Debe rellenar el campo.";
                }
                    
                else{
                    $nombre = depurar($_POST['nombre']);
                    if(validarNombre($nombre)){
                        $nombre = ucfirst($nombre); 
                    }else{
                        $error_nombre =  "El nombre es incorrecto. Compruebe que no tiene caracteres extraños.";
                    }
                               
                }

                if(empty($_POST['apellido1'])){
                    $error_apellido1 = "Debe rellenar el campo.";
                }else{
                    $apellido1 = depurar($_POST['apellido1']);
                    if(validarNombre($apellido1)){
                        $apellido1 = ucfirst($apellido1);
                    }else{
                        $error_apellido1 = "El apellido introducido es incorrecto. Compruebe que no tiene caraceteres extraños.";
                    }
                    
                }

                if(empty($_POST['apellido2'])){
                    $error_apellido2  = "Debe rellenar el campo.";
                }else{
                    $apellido2 = depurar($_POST['apellido2']);
                    if(validarNombre($apellido2)){
                        $apellido2 = ucfirst($apellido2);
                    }else{
                        $error_apellido2 = "El apellido introducido es incorrecto. Compruebe que no tiene caracteres extraños.";
                    }
                }

                if(empty($_POST['edad'])){
                    $error_nombre  = "Debe rellenar el campo.";
                }else{
                    $edad = depurar($_POST['edad']);
                    $edad = (int) $edad;
                    if(!validarEdad($edad)){
                        $error_edad = "La edad introducida es incorrecta.";
                    }
                    if(validarEdad($edad) && $edad < 18)
                        $error_edad = "El usuario es menor de edad.";
                }

                if(empty($_POST['mail'])){
                    $error_mail  = "Debe rellenar el campo.";
                }else{
                    $mail = depurar($mail);
                    if(!validarMail($mail))
                        $error_mail = "El mail introducido tiene un formato incorrecto.";
                }

                if($error_apellido1 == null && $error_apellido2 == null && $error_dni == null && $error_edad == null && $error_mail == null && $error_nombre == null){
                    echo "Los datos introducidos son:<br>";
                    echo "Nombre $nombre<br>";
                    echo "Nombre $apellido1<br>";
                    echo "Nombre $apellido2<br>";
                    echo "Nombre $dni<br>";
                    echo "Nombre $edad<br>";
                    echo "Nombre $mail<br>";
                    echo "----------------------";

                }
            }
        ?>
        
        <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="POST">

                    <p>DNI: <input type="text" name="DNI" required/><span class="error">* <?php echo $error_dni;?></p>
                    <p>Nombre: <input type="text" name="nombre" required/><span class="error">* <?php echo $error_nombre;?></p>
                    <p>Primer apellido: <input type="text" name="apellido1" required/><span class="error">* <?php echo $error_apellido1;?></p>
                    <p>Segundo apellido: <input type="text" name="apellido2" required/><span class="error">* <?php echo $error_apellido2;?></p>
                    <p>Edad: <input type="date" name="edad" required/><span class="error">* <?php echo $error_edad;?></p>
                    <p>Email: <input type="text" name="email" required/><span class="error">* <?php echo $error_mail;?></p>
                    <p> <input type="submit" value="Validar" required/></p>  
        </form>
    </body>
</html>