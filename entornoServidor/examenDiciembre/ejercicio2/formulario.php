<?php
    // REQUERIMOS EL ARCHIVO DE VALIDACION PARA PODER TRABAJAR CON EL FORMULARIO
    require 'validacion.php';
    $nombre = $capitulos = $fecha = null;
    $eNombre = $eCapitulos = $eFecha = null;

    //Cuando enviemos el formulario mediante POST realizamos las validaciones pertinentes

    if($_SERVER['REQUEST_METHOD']=='POST'){

        if(empty($_POST['nombre'])){
            $eNombre = "Debe rellenar el campo de nombre";
        }else{
            $nombre = depurar($_POST['nombre']);
            if(!validarNombre($nombre))
                $eNombre ="El nombre no tiene el formato correcto. Solo admite letras y numeros.";
        }

        if(empty($_POST['capitulos'])){
            $eCapitulos = "Debe rellenar el campo capitulos";
        }else{
            $capitulos = depurar($_POST['capitulos']);
            if(!validarCapitulos($capitulos))
                $eCapitulos = "Los capitulos no tienen el formato correcto. Deben ser un numero.";
        }

        if(empty($_POST['fecha'])){
            $eFecha = "Debe rellenar el campo fecha.";
        }else{
            $fecha = $_POST['fecha'];
        }

        if(($eNombre) || ($eCapitulos) || ($eFecha)){
            echo "Existen errores; <br>";
            echo $eNombre."<br>";
            echo $eCapitulos."<br>";
            echo $eFecha."<br>";
            echo "<br>----------------------------<br>";
        }else{
            echo "Los datos introducidos son: <br><br>";
            echo "Serie: $nombre<br>";
            echo "Num Capitulos: $capitulos<br>";
            echo "Fecha estreno: $fecha<br>";
            echo "<br>----------------------------<br>";
        }
    }
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Título: <input type="text" name="nombre">
    <br><br>
    Capítulos: <input type="text" name="capitulos">
    <br><br>
    Fecha de estreno: <input type="date" max="2021-12-31"name="fecha" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>