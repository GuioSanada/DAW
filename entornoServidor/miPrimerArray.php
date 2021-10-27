<html>
    <head>

    </head>

    <body>


        <?php
            $array = array("76428911A" => "Antonio", "12345678A" => "Manolo", "87654321A" => "Daniel");

            print_r($array);

            echo '<br>';
            echo $array["76428911A"];

            $array["12312312A"] = "Jose Luis";
            
            unset($array["87654321A"]);

            print_r($array);
        ?>



    </body>
</html>