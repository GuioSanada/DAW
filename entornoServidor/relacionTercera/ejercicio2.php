<html>
    <head>

    </head>
    <body>
        <?php
            $total=0;
            $productos= array(
                array("Lavadora", 500, 6),
                array("Nevera", 700, 4),
                array("Vitro", 350, 2),
                array("Calentador", 200, 3),
            );

            ksort($productos);
            

            echo "<table>";
            echo "<tr>";
            echo "<td>Producto</td>";
            echo "<td>Precio</td>";
            echo "<td>Cantidad Comprada</td>";
            echo "</tr>";

            foreach($productos as $producto ){
                list($nombre, $precio, $cantidad)=$producto;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$precio</td>";
                echo "<td>$cantidad</td>";
                echo "</tr>";
                $total += ($precio*$cantidad);

            }
            echo "</table>";

            echo "<br><br>";

            echo "Hay una cantidad total de: ".count($productos).".<br>";
            echo "El total de todos los articulos es: $total.<br>";
        ?>
    </body>
</html>