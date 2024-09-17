<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_1-9</title>
</head>
<body>
    <?php
        //E1-Create an array called names that contains several names.
        echo ('E1 - Create an array called names that contains several names.<br>');
        $names = array('David','Alex','Roberto','Fatu');
        echo ('Array created<br><br>');


        //E2-Show the number of elements in the array (count function).
        echo ('E2 - Show the number of elements in the array (count function).<br>');
        echo count($names).'<br>';

        echo ('<br>');


        //E3-Create a string that contains the names of the students in the array, separated by a space, and display it (string function implode).
        echo ('E3 - Create a string that contains the names of the students in the array, separated by a space, and display it (string function implode).<br>');
        echo implode(" ",$names).'<br>';
        echo ('<br>');


        //E4-Display the array sorted alphabetically (function asort).
        echo ('E4 - Display the array sorted alphabetically (function asort).<br>');
        $order = $names;
        asort($order);
        echo implode(" ",$order).'<br>';
        echo ('<br>');


        //E5-Display the array in the reverse order from which it was created (function array_reverse).
        echo ('E5 - Display the array in the reverse order from which it was created (function array_reverse).<br>');
        echo implode(" ",array_reverse($names)).'<br>';
        echo ('<br>');


        //E6-Show the position of your name in the array (function array_search).
        echo ('E6 - Show the position of your name in the array (function array_search).<br>');
        echo array_search('David',$names)+1;
        echo ('<br><br>');


        //E7-Create an array of students where each element is another array containing the student's ID, name, and age.
        echo ('E7 - Create an array of students where each element is another array containing the student\'s ID, name, and age.<br>');
        $students = array(
            array('id' => 1,'name' => 'David', 'age' => 30),
            array('id' => 2,'name' => 'Alex', 'age' => 25),
            array('id' => 3,'name' => 'Roberto', 'age' => 35),
            array('id' => 4,'name' => 'Fatu', 'age' => 28)
        );
        echo ('Array created');
        echo ('<br><br>');


        //E8-Create an HTML table that displays all the data of the students.
        echo ('E8 - Create an HTML table that displays all the data of the students.<br>');
        echo ('<table border="1"><thead><tr><th>ID</th><th>NOMBRE</th><th>EDAD</th></tr></thead>');
        foreach ($students as $val) {
            
            echo('<tr>
                <td>'.$val['id'].'</td>
                <td>'.$val['name'].'</td>
                <td>'.$val['age'].'</td>
            </tr>');

        }
        echo('</table><br><br>');


        //E9-Use the array_column function to get an indexed array containing only the names of the students and display it on the screen.
        echo ('E9 - Use the array_column function to get an indexed array containing only the names of the students and display it on the screen.<br>');
        $students2 = array_column($students, 'name');
        echo implode(" ",$names);
        echo('<br><br>');


        //Create an array with 10 numbers and use the array_sum function to get the sum of the 10 numbers.
        echo ('E10 - Create an array with 10 numbers and use the array_sum function to get the sum of the 10 numbers.<br>');
        $numbers = array(1,2,3,4,5,6,7,8,9,0);
        echo('Expected result -> 45<br>');
        echo('Result -> '.array_sum($numbers));

        ?>
    
</body>
</html>