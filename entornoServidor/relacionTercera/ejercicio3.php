<html>
    <head>

    </head>

    <body>
        <?php

            $numeros=[];

            for($i = 1; $i <= 50; $i++){
                $numeros[] = $i;
            }

            for($i =1; $i <= 50; $i++){
                if($i % 3 == 0)
                    unset($numeros[$i-1]);
            }

            foreach($numeros as $num){
                echo "$num<br>";
            }


        ?>
    </body>
</html>