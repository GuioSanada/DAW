<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <?php

    /*Parte 1 (0,5 puntos): Crea un array multidimensional que guarde información relativa a
    libros. En concreto, queremos almacenar en el array: el nombre, el autor o autora, el
    número de páginas y la fecha en que se publicó. Crea el array con al menos 3 libros
    iniciales.*/    
     $libros = array(
        array('El nombre del viento', 'Patrick Routhfous', 450, '02/05/2009'),
        array('El Archivo de las tormentas', 'Brandon Sandersons', 800, '01/10/2015'),
        array('Amanecer rojo', 'Pierce Brown', 560, '01/01/1969')
    );
    echo "<h2>Mostramos el contenido de nuestro array</h2>";
    foreach($libros as $libro){
        list($nombre, $autor, $paginas, $fecha) = $libro;
        echo "Nombre: $nombre<br>";
        echo "Autor: $autor<br>";
        echo "Numero paginas: $paginas<br>";
        echo "Fecha: $fecha<br>";
        echo "-----------------<br>";
    }
    /*Parte 2 (0,5 puntos): Añade un libro más al array mediante el método PHP correspondiente
    y elimina también un libro. */ 
    $nuevoLibro = array('Harry Potter y el prisionero de Azkaban', 'J.K. Rowlling', 600, '03/03/2000');
    array_push($libros, $nuevoLibro);

    echo "<h2>Hemos añadadi un libro de harry potter</h2>";
    foreach($libros as $libro){
        list($nombre, $autor, $paginas, $fecha) = $libro;
        echo "Nombre: $nombre<br>";
        echo "Autor: $autor<br>";
        echo "Numero paginas: $paginas<br>";
        echo "Fecha: $fecha<br>";
        echo "-----------------<br>";
    }
    unset($libros[3]);

    echo "<h2>¡OJO SPOILER! El libro de Harry Potter ha muerto como Sirius Black. Maldita Bellatrix!!!!</h2>";
    foreach($libros as $libro){
        list($nombre, $autor, $paginas, $fecha) = $libro;
        echo "Nombre: $nombre<br>";
        echo "Autor: $autor<br>";
        echo "Numero paginas: $paginas<br>";
        echo "Fecha: $fecha<br>";
        echo "-----------------<br>";
    }

    /*Parte 3 (1 punto): Muestra todos los libros en una tabla de las tres siguientes formas: en el
    orden en el que se insertaron, ordenados por su nombre (por orden alfabético) y ordenados
    por su autor (por orden alfabético inverso).*/
    echo "<h2>Mostramos el contenido de nuestro array tal cual se introdujo</h2>";
    foreach($libros as $libro){
        list($nombre, $autor, $paginas, $fecha) = $libro;
        echo "Nombre: $nombre<br>";
        echo "Autor: $autor<br>";
        echo "Numero paginas: $paginas<br>";
        echo "Fecha: $fecha<br>";
        echo "-----------------<br>";
    }
    $nombre = array_column($libros, 0);
    
   

    array_multisort($nombre, SORT_ASC, $libros);
    echo "<h2>Mostramos el contenido de nuestro array ordenado por titulo alfabeticamente</h2>";
    foreach($libros as $libro){
        list($nombre, $autor, $paginas, $fecha) = $libro;
        echo "Nombre: $nombre<br>";
        echo "Autor: $autor<br>";
        echo "Numero paginas: $paginas<br>";
        echo "Fecha: $fecha<br>";
        echo "-----------------<br>";
    }
    $autor = array_column($libros,1);
    array_multisort($autor, SORT_DESC, $libros);
    echo "<h2>Mostramos el contenido de nuestro array ordenado por autor alfabeticamente de forma descendiente</h2>";
    foreach($libros as $libro){
        list($nombre, $autor, $paginas, $fecha) = $libro;
        echo "Nombre: $nombre<br>";
        echo "Autor: $autor<br>";
        echo "Numero paginas: $paginas<br>";
        echo "Fecha: $fecha<br>";
        echo "-----------------<br>";
    }
    
    

    ?>
</body>
</html>