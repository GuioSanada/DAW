<html>
    <body>
        Hola <?php echo htmlspecialchars($_POST['nombre']) ?><br>
        Tienes: <?php echo (int)($_POST['edad']) ?> años.<br>

    </body>
</html>