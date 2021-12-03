<?php
        require 'base_de_datos.php';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $stmt = $dbh -> prepare("INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)");
            if($stmt -> execute(array(':nombre'=>$nombre, ':precio'=>$precio))) {
                echo "Se ha creado un nuevo registro:<br><br>";
                echo "Nombre: $nombre <br>";
                echo "Precio: $precio <br>";
                echo "<br>---------------------<br><br>";
            }else{
                echo "Se ha producido un error. No se ha introducido el usuario.<br>";
            }
        }


?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Nombre: <input type="text" name="nombre" required>
    <br><br>
    Precio: <input type="text" name="precio" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>