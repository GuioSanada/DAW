<?php
    // REQUERIMOS el archivo de validacion para poder trabajar con el formulario
    require 'validacion.php';

    // Declaramos variables a usar en la aplicacion
    $nombre = $autor = $fecha = $paginas = null;
    $eNombre = $eAutor = $eFecha = $ePaginas = null;

    // Cuando enviemos mediante el metodo POST datos al servidor que ejecute lo siguiente
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['nombre'])){
            $eNombre = "Debe rellenar el campo de nombre.";
        }else{
            $nombre = depurar($_POST['nombre']);
            if(!validarNombre($nombre))
                $eNombre = "El nombre no se ajusta al modelo. Compruebe que solo tiene caracteres.";
        }

        if(empty($_POST['autor'])){
            $eAutor = "Debe rellenar el campo de autor.";
        }else{
            $autor = depurar($_POST['autor']);
            if(!validarNombre($autor)){
                $eAutor = "El autor no se ajusta al modelo. Compruebe que solo tiene caracteres.";
            }
        }

        if(empty($_POST['paginas'])){
            $ePaginas = "Debe rellenar el campo de paginas.";
        }else{
            $paginas = (int)depurar($_POST['paginas']);
            if(!validarPaginas($paginas)){
                $ePaginas = "Debe introducir un numero de paginas mayor que 0. Asegurese de que ha introducido un numero.";
            }
        }
        if(empty($_POST['fecha_publicacion'])){
            $eFecha = "Debe rellenar el campo de fecha publicacion.";
        }else{
            $fecha = $_POST['fecha_publicacion'];
        }
        

        if(($eNombre) || ($eAutor) || ($eFecha) || $ePaginas){
            echo "Existen errores: <br>";
            echo $eNombre."<br>";
            echo $eAutor."<br>";
            echo $ePaginas."<br>";
            echo $eFecha."<br>";
        }else{
            echo "Los datos son introducidos son correctos: <br>";
            echo "Nombre: $nombre<br>";
            echo "Autor: $autor<br>";
            echo "Paginas: $paginas<br>";
            echo "Fecha de publicacion: $fecha<br>";
            echo "<br>------------------------  <br><br>";
        }
        

    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Nombre: <input type="text" name="nombre">
    <br><br>
    Autor/a: <input type="text" name="autor">
    <br><br>
    Páginas: <input type="text" name="paginas">
    <br><br>
    Fecha de publicación: <input type="date" max="2021-12-02" name="fecha_publicacion" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>