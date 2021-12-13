<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleIndex.css"/>
</head>
<body>

    <?php
        session_start();
        require 'database.php';
        if(isset($_SESSION['nick'])){
            header("Location: listadoPeliculas.php");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if($_POST['tipoSubmit'] == "cerrarSession"){
                session_destroy();
                header("Location: index.php");
            }else{

                $nom = $_POST['nick'];
                $pass =$_POST['pass'];

                //  FETCH_ASSOC
                $stmt = $dbh -> prepare("SELECT nick, pass FROM usuarios WHERE nick=:nick");
                //  Especificamos el fetch mode antes de llamar a fetch()
                $stmt -> setFetchMode(PDO::FETCH_ASSOC);
                //  Ejecutamos
                $stmt -> execute(array(':nick' => $nom));
                $stmt -> execute();

                $row = $stmt -> fetch();

                $pelicula = [$row['nick'], $row["pass"]];

                if(password_verify($pass, $pelicula[1])){
                    session_start();
                    $_SESSION["nick"] = $pelicula[0];
                    header("Location: listadoPeliculas.php");
                }else{
                    header("Location: registro.php");
                }
            }   



                


        }else{ 
    ?>

    <main>

        <section>
            <h1>Ejercicio sesiones</h1>
            <?php 
                if(isset($_SESSION["nick"])){
                    echo "<h2>Bienvenido ".$_SESSION["nick"]."</h2>"; 
            ?>
                    <form method="post" action="">
                        <div>
                            <input type="hidden" name="tipoSubmit" value="cerrarSession"/>
                            <input type="submit" value="Cerrar Sesion"/>
                        </div>
                    </form>
            <?php
                }else{

                
            ?>
            <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
                <div>
                    <label for="nick">Nombre: </label>
                    <input type="text" name="nick" placeholder="Fulanito De Tal"/>
                </div>
                
                <div>
                    <label for="pass">Password: </label>
                    <input type="password" name="pass"/>
                </div>
                
                <div>
                    <input type="submit" value="Entrar"/>
                </div>
                <input type="hidden" value="registro" name="tipoSubmit"/>
            </form>
            <a href="registro.php">Registrate</a>
        </section>
    </main>
    <?php
            }
        }

    ?>
    
</body>
</html>