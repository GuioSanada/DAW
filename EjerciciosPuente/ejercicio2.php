<html>
    <head>

    </head>

    <body>
        <?php
            $dia = date("D");
            $mes = date("M");
            $anyo = date("Y");
            $numeroDia = date("d");



            switch($dia){
                case 'Mon':
                    $dia = 'Lunes';
                    break;
                case 'Tue':
                    $dia = 'Martes';
                    break;
                case 'Wed':
                    $dia = 'Miercoles';
                    break;
                case 'Thu':
                    $dia = 'Jueves';
                    break;
                case 'Fri':
                    $dia = 'Viernes';
                    break;
                case 'Sat':
                    $dia = 'Sabado';
                    break;
                case 'Sun':
                    $dia = 'Domingo';
                    break;

            }
                
            switch($mes){
                case 'Jan':
                    $mes = 'Enero';
                    break;
                case 'Feb':
                    $mes = 'Febrero';
                    break;
                case 'Mar':
                    $mes = 'Marzo';
                    break;
                case 'Apr':
                    $mes = 'Abril';
                    break;
                case 'May':
                    $mes = 'Mayor';
                    break;
                case 'Jun':
                    $mes = 'Junio';
                    break;
                case 'Jul':
                    $mes = 'Julio';
                    break;
                case 'Aug':
                    $mes = 'Agosto';
                    break;
                case 'Sep':
                    $mes = 'Septiembre';
                    break;
                case 'Oct':
                    $mes = 'Octubre';
                    break;
                case 'Nov':
                    $mes = 'Noviembre';
                    break;
                case 'Dec':
                    $mes = 'Diciembre';
                    break;
            }

            echo '<p style=font-style:italic>' . $dia . ' ' . $numeroDia . ' de ' . $mes . ' de ' . $anyo . '.</p>';
        ?>


    </body>

</html>