<html>

    <head>

    </head>

    <body>
        <?php
            //Declaracion de variables

            $numerosPrimos = []; //Array contenedor de los numeros primos
            $primo = true; // Variable para controlar si es primo o no. 


            // Añadimos el primer numero primo. El 1.
            $numerosPrimos[] = 1;


            // Procreso de recorrido 2-50. Comprobando si es divisible por otro nunero ademas de si mismo.
            for($i=2; $i<=50; $i++){
                for($j=2; $j <= $i; $j++){
                    if(($i != $j) && ($i % $j == 0))
                        $primo=false;
                }
                if($primo == true)
                    $numerosPrimos[] = $i;
                $primo = true;
            }

            print_r($numerosPrimos);

        ?>

    </body>
</html>