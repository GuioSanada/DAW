<?php
    $nombre = $consola = $precio = null;
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
            $consola = $_POST['consola'];
        }

        if(empty($_POST['precio'])){
            $error_precio = "Debe insertar un precio";
        }else{
            $precio = depurar($_POST['precio']);
            $precio = floatval($precio);
            if(!validarPrecio($precio)){
                $error_precio = "El formato del precio introducido no es correcto. Verifiquelo.";
            }
        }
    }
?>