<html>
    <body>

        <?php
            $hora = date("H");

            if ($hora < 12):
                echo "Hola buenos dias";
            elseif ($hora < 20):
                echo "Hola buenas tardes";
            else:
                echo "Hola buenas noches";
            endif
        ?>



    </body>
</html>