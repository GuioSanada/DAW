<html>
    <head>

    </head>

    <body>
        <?php
            $numeros=[];
            for($i=1; $i<=10; $i++){
                $numeros[]=rand(1,100);
            }
            
            print_r($numeros);
            echo "<br><br>";

            asort($numeros);
            print_r($numeros);

            echo "<br><br>";

            arsort($numeros);
            print_r($numeros);

            echo "<br><br>";
        
        ?>
    </body>
</html>