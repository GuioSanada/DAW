<?php
    /*
    En la carpeta del ejercicio 2 hay dos ficheros: formulario.php y validacion.php. El fichero
    formulario.php contiene un formulario para la creación de libros con los siguientes campos:
    nombre, autor, paginas y fecha_publicacion. Modifica el fichero validacion.php (este fichero
    está vacío inicialmente) para que realice la validación del formulario.
    Parte 1 (1 punto): Valida mediante PHP el nombre y el autor para que solo admitan
    caracteres.
    Parte 2 (1 punto): Valida mediante PHP el número de páginas para que sólo admita
    números mayores que cero
    Parte 3 (1 punto): Valida mediante HTML o PHP la fecha de publicación para que sólo
    admita fechas.
    */
    
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
    // Funcion para validar que el numero de paginas sea mayor que 0.
    function validarPaginas($num){
        $num = (int)$num;
        if($num<=0)
            return false;
        else   
            return true;
    }


?>