<html>
    <head>

    </head>

    <body>
        <?php
            $total=0;
            $productos= array(
                "Lavadora" => 500,
                "Nevera" => 700,
                "Vitro" => 350,
                "Calentador" => 200,
            );

            ksort($productos);
            

            echo "<table>";
            echo "<tr>";
            echo "<td>Producto</td>";
            echo "<td>Precio</td>";
            echo "</tr>";

            foreach($productos as $producto => $precio){
                echo "<tr>";
                echo "<td>$producto</td>";
                echo "<td>$precio</td>";
                echo "</tr>";
                $total += $precio;

            }
            echo "</table>";

            echo "<br><br>";

            echo "Hay una cantidad total de: ".count($productos).".<br>";
            echo "El total de todos los articulos es: $total.<br>";

        ?>
    </body>
</html>