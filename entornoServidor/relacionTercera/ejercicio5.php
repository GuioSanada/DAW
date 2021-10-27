<html>
    <head>

    </head>

    <body>
        <?php

            function validateDni($cadena){
                if(strlen($cadena) ==9)
                    return "Correcto";
                else
                    return "Formato Incorrecto";
            }
            $personas = array(
                "76428911A" => "Antonio",
                "12345678A" => "Juan",
                "87654321A" => "Francisco",
                "111111A" => "Manolo",
            );

            echo "<table>";
            echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>Nombre</td>";
            echo "<td>¿DNI correcto?</td>";
            echo "</tr>";

            foreach($personas as $dni => $nombre){
                echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "<td>".validateDni($dni)."</td>";
                echo "</tr>";
            }

        ?>
    </body>
</html>