<h1>Listado de videojuegos</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Console</th>
    </tr>
    <?php

        foreach($videogames as $videogame){
            echo "<tr>";
            echo "<td>$videogame->name</td>";
            echo "<td>$videogame->price</td>";
            echo "<td>$videogame->console</td>";
            echo "</tr>";
        }
    ?>
</table>