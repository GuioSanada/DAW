<html>
    <head>

    </head>

    <body>
        <?php

            function esMayorDeEdad($num){
                if($num > 65)
                    return "Jubilado";
                if($num >=0 && $num < 18)
                    return "Menor de edad";
                else
                    return "Mayor de edad";
            }
            $personas = array(
                array("Edu", "Lopez", rand(0,100)),
                array("Juan Carlos", "Chupapija", rand(0,100)),
                array("Juan", "Valero", rand(0,100)),
                array("Antonio", "Fernandez", rand(0,100)),
                array("Ilidan", "Tempestira", rand(0,100))
            );

            echo "<table>";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Apellidos</td>";
            echo "<td>Edad</td>";
            echo "<td>Rango de Edad</td>";
            echo "</tr>";

            foreach($personas as $persona){
                list($nombre, $apellido, $edad)=$persona;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$apellido</td>";
                echo "<td>$edad</td>";
                echo "<td>".esMayorDeEdad($edad)."</td>";
                echo "</tr>";
            }

        ?>
    </body>
</html>