<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Document</title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['nick'])){
                header("Location: listadoPeliculas.php");
            }
            require 'database.php';
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
               
                $nom = $_POST['nick'];
                $pass = $_POST['pass'];
                $pass = password_hash($pass, PASSWORD_DEFAULT);

                $stmt = $dbh -> prepare("INSERT INTO usuarios (nick, pass) VALUES (:nick, :pass)");
                try {
                    if($stmt -> execute(array(':nick'=>$nom, ':pass'=>$pass))){
                        header("Location: index.php");
                    }
                } catch (Exception  $e) {
                    header("Location: registro.php");
                    
                }


            }else{ 
        ?>

        <main>
            
            <section>
                <h1>Ejercicio sesiones</h1>
                <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
                    <div>
                        <label for="nick">Nombre: </label>
                        <input type="text" name="nick" placeholder="Fulanito De Tal" required/>
                    </div>
                    
                    <div>
                        <label for="pass">Password: </label>
                        <input type="password" name="pass" required/>
                    </div>
                    
                    <div>
                        <input type="submit" value="Registrar"/>
                    </div>
                    
                </form>
                <a href="recordar.php">Recordar contraseña</a>
            </section>
        </main>

        <?php
        }
        ?>
    </body>
</html>