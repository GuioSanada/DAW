<html>
    <head>
        <link rel="stylesheet" href="tablasMultiplicar.css">
    </head>

    <body>
        <?php
            echo '<div class="flex-container">';
            for($i=1; $i<=10; $i++){
                echo '<div>';
                echo '<table>';
                echo '<caption>Tabla del '.$i.'</caption>';
                for($j=1; $j<=10; $j++){
                    echo '<tr>';
                    echo '<td>'.$i.'</td>';
                    echo '<td> X </td>';
                    echo '<td>'.$j.'</td>';
                    echo '<td> = </td>';
                    echo '<td>'.$i*$j.'</td>';
                    echo '</tr>';
                }
                echo '</table>';
                echo '</div>';

            }
            echo '</div>';
        ?>
    </body>

</html>