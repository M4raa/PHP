<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-1</title>
</head>
<body>
    <?php
        //E1-Crea un array llamado nombres que contenga varios nombres
        echo ('E1 - Crea un array llamado nombres que contenga varios nombres<br>');
        $nombres = array('David','Alex','Roberto','Fatu');
        echo ('Array creado<br><br>');


        //E2-Muestra el número de elementos que tiene el array (función count)
        echo ('E2 - Muestra el número de elementos que tiene el array (función count)<br>');
        echo count($nombres).'<br>';

        echo ('<br>');


        //E3-Crea una cadena que contenga los nombres de los alumnos existentes 
        //en el array separados por un espacio y muéstrala (función de strings implode)
        echo ('E3 - Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode)<br>');
        echo implode(" ",$nombres).'<br>';
        echo ('<br>');


        //E4-Muestra el array ordenado alfabéticamente (función asort)
        echo ('E4 - Muestra el array ordenado alfabéticamente (función asort)<br>');
        $orden = $nombres;
        asort($orden);
        echo implode(" ",$orden).'<br>';
        echo ('<br>');


        //E5-Muestra el array en el orden inverso al que se creó (función array_reverse)
        echo ('E5 - Muestra el array en el orden inverso al que se creó (función array_reverse)<br>');
        echo implode(" ",array_reverse($nombres)).'<br>';
        echo ('<br>');


        //E6-Muestra la posición que tiene tu nombre en el array (función array_search)
        echo ('E6 - Muestra la posición que tiene tu nombre en el array (función array_search)<br>');
        echo array_search('David',$nombres)+1;
        echo ('<br><br>');


        //E7-Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
        echo ('E7 - Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.<br>');
        $alumnos = array(
            array('id' => 1,'nombre' => 'David', 'edad' => 30),
            array('id' => 2,'nombre' => 'Alex', 'edad' => 25),
            array('id' => 3,'nombre' => 'Roberto', 'edad' => 35),
            array('id' => 4,'nombre' => 'Fatu', 'edad' => 28)
        );
        echo ('Array creado');
        echo ('<br><br>');


        //E8-Crea una tabla html en la que se muestren todos los datos de los alumnos.
        echo ('E8 - Crea una tabla html en la que se muestren todos los datos de los alumnos.<br>');
        echo ('<table border="1"><thead><tr><th>ID</th><th>NOMBRE</th><th>EDAD</th></tr></thead>');
        foreach ($alumnos as $val) {
            
            echo('<tr>
                <td>'.$val['id'].'</td>
                <td>'.$val['nombre'].'</td>
                <td>'.$val['edad'].'</td>
            </tr>');

        }
        echo('</table><br><br>');


        //E9-Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla.
        echo ('E9 - Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla.<br>');
        $nombres2 = array_column($alumnos, 'nombre');
        echo implode(" ",$nombres);
        echo('<br><br>');


        //Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.
        echo ('E10 - Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.<br>');
        $numeros = array(1,2,3,4,5,6,7,8,9,0);
        echo('Resultado esperado -> 45<br>');
        echo('Resultado -> '.array_sum($numeros));

        ?>
    
</body>
</html>