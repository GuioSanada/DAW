<html>
    <body>
        <?php
            /*$dia = "Jueves";
            $num1 = 2;
            $float = 1.1;
            $boleando = true;
            */

           /* 
            
            print "$num1<b>";
            echo "hola mundo!<br>";
            print "Hola mundo2!<br>";
            
            */

           /*var_dump($dia);
           echo "<br>";
           var_dump($num1);
           echo "<br>";
           var_dump($float);
           echo "<br>";
           var_dump($boleando);
              "<br>";*/

              //echo date("j\/F\/Y");
          /*  $dia = date("D");
             
            //echo $dia."<br><br>";
            if($dia == "Tue" || $dia == "Thu"){
                echo "Caballeros hoy tenemos clase de entorno servidor.";
            }else{
                echo "Lo sentimos, pero hoy no tenemos clase de entorno servidor </3";
            }*/

            //$numero = rand(0,3);
            //echo $numero."<br>";
           /* if($numero<50){
                echo "El numero es menor que 50 <br>";
            }elseif($numero == 50){
                echo "El numero es igual que 50<br>";
            }else{
                echo "El numero es mayor que 50<br>";
            }*/

            /*switch($numero){
                case 0:
                    echo "$numero es 0";
                    break;
                
                case 1:
                    echo "$numero es 1";
                    break;
                case 2:
                    echo "$numero es 2";
                    break;
                case 3:
                    echo "$numero es 3";
                    break;
            }
            */

            $dia = date("D");
            echo "$dia<br>";
            switch($dia){
                case "Mon":
                    $dia = "Lunes";
                    break;
                case "Tue":
                    $dia = "Martes";
                    break;
                case "Wed":
                    $dia = "Miercoles";
                    break;
                case "Thu":
                    $dia = "Jueves";
                    break;
                case "Fri":
                    $dia = "Viernes";
                    break;
                case "Sat":
                    $dia = "Sabado";
                    break;
                case "Sun":
                    $dia = "Domingo";
                    break;

            }
            echo "$dia<br>";


        ?>
    </body>

</html>