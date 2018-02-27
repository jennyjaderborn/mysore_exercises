

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        width: 400px;
    }

    th, td {
        border: 1px solid black;
        text-align: center;
    }

    #container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>
<div id='container'>
<?php

//Skriv en funktion som gör om en tvådimensionell array till en HTML-tabell.

$min_array = array('Anna' => 13, 'Tove' => 3, 'Ludwig' => 10, 'Emma' => 7, 'Karin' => 24, 'Klara' => 2);
echo "<table>";
echo "<th>Firstname</th><th>Age</th>";

foreach($min_array as $person => $age)
{   
    echo "<tr>";
    echo "<td>" . $person . "</td>";
    echo "<td>" . $age . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
</div>
</body>
</html>


