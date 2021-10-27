<html>
    <body>
        <?php
            $num1 = (int)$_POST['num1'];
            $num2 = (int)$_POST['num2'];
            $resultado = 1;
            echo '<p>El numero '.$num1.' elevado a '.$num2.' es: '.pow($num1,$num2).'.</p>';
            for($i=1; $i<=$num2; $i++){
                $resultado *= $num1;
            }
            echo '<p>El numero '.$num1.' elevado a '.$num2.' es: '.$resultado.'.</p>';
            echo "el resultado de elevar $num1 a $num2 es $resultado <br>";
        ?>
    </body>
</html>