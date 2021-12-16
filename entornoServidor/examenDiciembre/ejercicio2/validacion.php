<?php

    //Funcion para depurar el string introducido. Quitamos espacios y cosas raras que pueda introducir el usuario
    function depurar($a){
        $a = trim($a);
        $a = stripslashes($a);
        $a = htmlspecialchars($a);
        return $a;
    }

    //Funcion para validar nombre y autor
    function validarNombre($name){
        $pattern = '^[a-zA-Z0-9]+$^';
        if(!preg_match($pattern, $name))
            return false;
        else
            return true;
    }

    function validarCapitulos($cap){
        if(is_numeric($cap)){
            if($cap<1){
                return false;
            }else{
                return true;
            }

        }else
            return false;
        
        
        
        
    }

    

?>