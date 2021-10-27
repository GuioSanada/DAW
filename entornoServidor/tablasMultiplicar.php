<html>
    <body>
        
        
        
        <?php
            $tabla = 5;

            echo '<table>';
            echo '<caption>Tabla del '.$tabla.'</caption>';
            for($i=1; $i<=10; $i++){
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td> X </td>';
                echo '<td>'.$tabla.'</td>';
                echo '<td> = </td>';
                echo '<td>'.$i*$tabla.'</td>';
                echo '</tr>';
            }

            echo '</table>';

        ?>





    </body>
</html>