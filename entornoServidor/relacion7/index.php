<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>

    <?php
        require 'database.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
                    <input type="text" name="nick" placeholder="Fulanito De Tal"/>
                </div>
                
                <div>
                    <label for="pass">Password: </label>
                    <input type="password" name="pass"/>
                </div>
                
                <div>
                    <input type="submit" value="Entrar"/>
                </div>
                
            </form>
            <a href="registro.php">Registrate</a>
        </section>
    </main>
    <?php
    }
    ?>
    
</body>
</html>