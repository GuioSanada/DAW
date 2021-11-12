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

        function conseguirEdad($cadenaFecha){
            $cadenaFecha = substr($cadenaFecha, 0, 4);
            $fecha = date("Y");
            $cadenaFecha = $fecha - $cadenaFecha;
            if($cadenaFecha <18)
                $error_edad = "El usuario es menor de edad.";
            return $cadenaFecha;
            
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
        function comprobarLetraDNI($cadena){
            $letra = substr($cadena, -1);
            $numero = substr($cadena, 0, -1);
            if(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numero%23, 1) == $letra)
                return true;
            else
                return false;
        }

        function comprobarMalsonantesMail($cadena){
            $malSonante1 = "puta";
            $malSonante2 = "cabron";
            $malSonante3 = "gilipollas";

            if(strpos($cadena, $malSonante1) || strpos($cadena, $malSonante2) || strpos($cadena, $malSonante3))
                return false;
            else
                return true;
        }
        
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                //FORMULARIO DE MOSTRAR USUARIOS
                if($_POST['tipoFormulario'] == "mostrarUsuarios"){
                    if(!empty($_POST['mail'])){
                        $mail = $_POST['mail'];
                        $stmt = $dbh->prepare("SELECT * FROM usuarios WHERE mail = $mail");
    
                        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
            
                        $stmt -> execute();
                    }
                }

                // FORMULARIO DE INSERTAR USUARIOS
                if($_POST['tipoFormulario'] == "insertarUsuarios"){
                    if(empty($_POST['dni'])){
                        $error_dni = "Debe rellenar el campo.";
                    }
                        
                    else{
                        $dni = depurar($_POST['dni']);
                        if(!validarDNI($dni)){
                            $error_dni = "El DNI es incorrecto. Compruebe el formato.";
                        }
                        if(!comprobarLetraDNI($dni))
                            $error_dni = "Comprueba el dni introducido. La letra no es correcta";
                            
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
    
                        $edad = conseguirEdad($edad);
                    }
    
                    if(empty($_POST['mail'])){
                        $error_mail  = "Debe rellenar el campo.";
                    }else{
                        $mail = depurar($_POST['mail']);
                        if(!validarMail($mail))
                            $error_mail = "El mail introducido tiene un formato incorrecto.";
                        if(!comprobarMalsonantesMail($mail))
                            $error_mail = "El mail contiene palabras no permitidas gamberrete.";
                    }
                }


                
            }
?>