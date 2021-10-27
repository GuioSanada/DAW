<html>
    <head>

    </head>

    <body>
        
        <?php

            $videoyogos = array(
                array("Solei", "MegaDrive", 60),
                array("Terranigma", "Super Nintendo", 120),
                array("Final Fantasy VII", "PSX", 70),
                array("Kindgom Hearts", "PS2", 80),
                array("Uncharted2", "PS3", 70),
                array("Gears of War 2", "Xbox360", 20)
            );


            echo "<table>";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Consola</td>";
            echo "<td>Precio</td>";
            echo "</tr>";
            
            foreach($videoyogos as $juego){
                list($nombre, $consola, $precio) = $juego;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$consola</td>";
                echo "<td>$precio</td>";
                echo "</tr>";
            }
            echo "</table><br><br>";

            echo "<table>";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Consola</td>";
            echo "<td>Precio</td>";
            echo "</tr>";


            $consola = array_column($videoyogos, 1);


            array_multisort($consola, SORT_ASC, $videoyogos);

            foreach($videoyogos as $juego){
                list($nombre, $consola, $precio) = $juego;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$consola</td>";
                echo "<td>$precio</td>";
                echo "</tr>";
            }

            echo "</table><br><br>";


            echo "<table>";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Consola</td>";
            echo "<td>Precio</td>";
            echo "</tr>";

  
            $precio = array_column($videoyogos, 2);

            array_multisort($precio, SORT_ASC, $videoyogos);

            foreach($videoyogos as $juego){
                list($nombre, $consola, $precio) = $juego;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$consola</td>";
                echo "<td>$precio</td>";
                echo "</tr>";
            }

            echo "</table><br><br>";


        ?>

    </body>
</html>