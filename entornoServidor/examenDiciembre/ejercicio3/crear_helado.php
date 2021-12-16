<?php
    require 'base_de_datos.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombre = $_POST['nombre'];
        $ingredientes = $_POST['ingredientes'];
        $precio = $_POST['precio'];

        $stmt = $dbh -> prepare("INSERT INTO helados (nombre, ingredientes, precio) VALUES (:nombre, :ingredientes, :precio)");

        if($stmt -> execute(array(':nombre' => $nombre, ':ingredientes' => $ingredientes, ':precio' => $precio))){
            echo "Se ha creado un nuevo registro de helado:<br><br>";
            echo "Nombre: $nombre<br>";
            echo "Ingredientes: $ingredientes<br>";
            echo "Precio: $precio<br>";
            echo "<br>-----------------------------<br>";
        }else{
            echo "Se ha producido un error. No se ha insertado el helado.<br><br>";
            
        }
    }


?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Nombre: <input type="text" name="nombre">
    <br><br>
    Ingredientes: <input type="text" name="ingredientes">
    <br><br>
    Precio: <input type="text" name="precio">
    <br><br>
    <input type="submit" value="Enviar">
</form>