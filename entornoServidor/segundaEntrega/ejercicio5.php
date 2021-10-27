<html>
    <head>
        
    </head>

    <body>
        <?php
            function calificacion($num){
                switch ($num){
                    case 0:
                        case 1:
                        case 2:
                        case 3:
                        case 4:
                            return "Suspenso";
                            break;
                        case 5:
                            return "Suficiente";
                            break;
                        case 6:
                            return "Bien";
                            break;
                        case 7:
                        case 8:
                            return "Notable";
                            break;
                        case 9:
                        case 10:
                            return "Sobresaliente";
                            break;
                }
                    

            }
            $estudiantes= array(
                "juanito"=>rand(0,10),
                "jorgito"=>rand(0,10),
                "jaimito"=>rand(0,10),
                "joselito"=>rand(0,10),
                "Antoñito"=>rand(0,10),
                "Javi"=>rand(0,10),
                "Pedro"=>rand(0,10),
                "Manuel"=>rand(0,10),
                "Diego"=>rand(0,10),
                "Adrian"=>rand(0,10)

            );

            echo "<table>";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Nota</td>";
            echo "<td>Calificacion</td>";
            echo "</tr>";

            foreach($estudiantes as $nombre => $nota){
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$nota</td>";
                echo "<td>".calificacion($nota)."</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    
        
    </body>
</html>