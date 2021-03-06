<link rel="stylesheet" href="styles.css"> 

<?php
    /*  Este método llama al fichero validar_usuario.php y lo incluye 
        para que podamos emplear todas las variables y métodos que 
        hayamos programado
    */  
    require 'validar_usuario.php';

    /*  Este método llama al fichero base_de_datos.php y lo incluye 
        para que podamos utilizar la conexión a la base de datos
    */  
    require 'base_de_datos.php';

    //  Si el nombre y el apellido son correctos, los mostramos por pantalla y creamos el 
    //  usuario en la base de datos
    if ($nombre != "" && $email != "") {
        echo "<br>";
        echo "<h2>El nombre es $nombre</h2>";
        echo "<h2>El email es $email</h2>";
        echo "<br>";

        //  SENTENCIA PARA INSERTAR EL USUARIO INTRODUCIDO EN LA BASE DE DATOS
        //  Prepare
        $stmt = $dbh -> prepare("INSERT INTO personas (NOMBRE, MAIL) VALUES (:NOMBRE, :MAIL)");
        //  Bind y execute
        if($stmt -> execute(array(':NOMBRE'=>$nombre, ':MAIL'=>$email))) {
            echo "Se ha creado un nuevo registro";
        }

        $dbh = null;

    }
    
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" accept-charset="utf-8">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?php echo $err_nombre;?></span>
    <br><br>
    Email: <input type="text" name="email">
    <span class="error">* <?php echo $err_email;?></span>
    <br><br>
    <input type="submit" value="Enviar">
</form>