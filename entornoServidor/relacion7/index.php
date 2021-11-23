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
    
</body>
</html>