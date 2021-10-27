<html>
    <head>

    </head>

    <body>

        <?php

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            
            if($num3 > $num2){
                echo "El numero 3 ($num3) debe ser menor que el numero 2 ($num2).<br>";

            }
            elseif($num1 > $num2){
                echo "El numero 1 ($num1) debe ser menor que el numero 2 ($num2) para poder crear un rango correctamente.<br>";

            }else{
                echo "Estos son los multiplos de $num3 que se encuentran entre el rango $num1 y $num2: <br>";
                    for($i = $num1; $i<=$num2; $i++){
                        if($i % $num3 == 0)
                            echo "$i<br>";
                    }
            }

            

        ?>



    </body>
</html>