<html>
    <head>

    </head>

    <body>
        <table>
            <tr>
                <td>Pais</td>
                <td>Capital</td>
            </tr>
            <?php

            $paises = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
            "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
            "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>
            "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
            "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
            "Sweden"=>"Stockholm", "United Kingdom" =>"London", "Cyprus"=>"Nicosia",
            "Lithuania"=>"Vilnius", "Czech Republic" =>"Prague", "Estonia"=>"Tallin",
            "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
            "Vienna", "Poland"=>"Warsaw") ;
            
            ksort($paises);

            foreach($paises as $pais => $capital){
                echo "<tr>";
                echo "<td>$pais</td>";
                echo "<td>$capital</td>";
                echo "</tr>";
            }

            


        ?>

        </table>
        
    </body>
</html>