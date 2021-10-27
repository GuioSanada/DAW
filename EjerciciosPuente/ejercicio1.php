<html>
    <head>

    </head>

    <body>

        <?php

        //DECLARACION E INICIALIZACION DE VARIABLES
        $contador = 1;
        $listaMultiplos = [];


        // PROCESO
            echo '[';
            while($contador <= 50){ //recorremos numeros del 1 al 50
                if($contador % 3 == 0 && $contador != 3){ // comprobamos si es el primer numero o el segundo con este if. Para que el formato sea correcto.
                    echo ", $contador";
                }
                elseif($contador % 3 == 0 && $contador = 3)
                    echo "$contador";
                $contador++;
            }
            echo ']<br>';


        //DECLARACION E INICIALIZACION DE VARIABLES
            $contador = 0;
            $listaMultiplos = [];
        
        // PROCESOS
            echo '[';
            for($i=1; $i<=50; $i++){    //recorremos numeros del 1 al 50
                if($i % 3 == 0 && $i != 3){ // comprobamos si es el primer numero o el segundo con este if. Para que el formato sea correcto.
                    echo ", $i";
                }
                elseif($i % 3 == 0 && $i = 3)
                    echo "$i"; 
            }
            echo "]<br>";
        

        ?>

    </body>
</html>