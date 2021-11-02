<html>
    <head>

    </head>

    <body>
        <?php
            $nombre;
            $consola;
            $precio;

            $error_nombre = $error_consola = $error_precio = null;

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

            function validarPrecio($num){

                $pattern = '^[0-9]+$^';
                if(!preg_match($pattern, $num))
                    return false;
                else
                    return true;
            }

            function validarConsola($con){
                if($con == "")
                    return false;
                else
                    return true;
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                if(empty($_POST['nombre'])){
                    $error_nombre = "Debe insertar un nombre compuesto por caracteres y/o numeros";
                }else{
                    $nombre = depurar($_POST['nombre']);
                    if(validarNombre($nombre) == true){
                        $nombre = depurar($_POST['nombre']);
                    }
                    else{
                        $error_nombre = "El formato del nombre introducido no es correcto. Verifiquelo.";
                    }
                }

                if(empty($_POST['consola'])){
                    $error_consola = "Seleccione una consola";
                }else{
                    $consola = depurar($_POST['consola']);
                    /*if(validarConsola($consola) == false)
                        $error_consola = "Seleccione una opcion. No marque la opcion en blanca";*/
                }

                if(empty($_POST['precio'])){
                    $error_precio = "Debe insertar un precio";
                }else{
                    $precio = depurar($_POST['precio']);
                    if(!validarPrecio($precio)){
                        $error_precio = "El formato del precio introducido no es correcto. Verifiquelo.";
                    }
                }
                if($error_consola == null && $error_nombre == null && $error_precio == null){
                    echo "Los datos introducidos son: <br>";
                    echo "Juego: $nombre <br>";
                    echo "Consola: $consola <br>";
                    echo "Precio: $precio <br>";
                }
                

            
            }
        ?>
                <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post">
                    <p>Inserte nombre: <input type="text" name="nombre"  title="Debe insertar un nombre compuesto por caracteres y/o numeros" required/> <span class="error">* <?php echo $error_nombre;?></span> </p>
                    <p>Inserte consola: 
                    <select name="consola" required>
                        <!-- <option value=""></option> -->
                        <option value="PS5">PS 5</option>
                        <option value="XBOXSX">XBOX SERIES X</option>
                        <option value="SWITCH">SWITCH</option>
                    </select><span class="error">* <?php echo $error_consola;?></span>
                    </p>
                    <p>Inserte precio: <input type="number" name="precio" required/>  <span class="error">* <?php echo $error_precio;?></span></p>
                    <p><input type="submit" value="Validar"/></p>
                </form>
            
    </body>
</html>