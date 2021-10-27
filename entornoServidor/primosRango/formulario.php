<html>
    <head>

    </head>

    <body>

        <?php

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $primo = 1;
            
            if($num1 > $num2){
                echo "El numero 1 ($num1) debe ser menor que el numero 2 ($num2).<br>";

            }else{
                echo "El primer numero primo que se encuentra entre $num1 y $num2 es :<br>";
                    if($num1 == 1){
                        echo "$num1<br>";
                    }else{
                        for($i = $num1; $i<=$num2; $i++){
                            for($j = 2; $j <= $i; $j++){
                                if(($i != $j) && ($i % $j == 0))    
                                    $primo = 0;    
                            }
                            
                            if($primo == 1){
                                echo "$i<br>";
                                break;
                            }
                            $primo = 1;
    
                        }
                    }
                    
            }

            

        ?>



    </body>
</html>