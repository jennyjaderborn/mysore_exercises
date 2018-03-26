

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

$min_array = array('200' => 13, '400' => 3, '500' => 10, '100' => 7, '400' => 24, '150' => 2);
echo "<table>";
echo "<th>Veckopeng</th><th>Age</th>";
$sum = 0;
$sum2 = 0;

foreach($min_array as $veckopeng => $age)
{   
    echo "<tr>";
    echo "<td>" . $veckopeng . "</td>";
    echo "<td>" . $age . "</td>";
    echo "</tr>";
    $sum+=$veckopeng;
    $sum2+=$age;

}

echo "<tr>";
echo "<td>" . $sum . "</td>";
echo "<td>" . $sum2 . "</td>";
echo "</tr>";

echo "</table>";

?>
</div>
</body>
</html>

