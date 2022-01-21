<h1>Listado de animes</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Platform</th>
        <th>Date</th>
    </tr>
    <tr>
        <?php
            foreach($animes as $anime){
                echo "<tr>";
                    echo "<td>$anime->name</td>";
                    echo "<td>$anime->platform</td>";
                    echo "<td>$anime->date</td>";
                echo "</tr>";
            }
        ?>
    </tr>
</table>