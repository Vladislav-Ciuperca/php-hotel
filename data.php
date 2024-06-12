<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuri Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <h1>contenuto array</h1>

    <ul>

        <?php
        foreach ($hotels as $hotel) {
            echo "<li>" . $hotel["name"] . " " . $hotel["vote"] . "</li>";
        }

        ?>

    </ul>

    <table class="w3-table w3-striped">

        <tr>
            <?php
            foreach ($hotels as $hotel) {
                echo "<th>" . $hotel["name"] . "</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($hotels as $hotel) {
                echo "<td>" . $hotel["description"] . "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($hotels as $hotel) {
                echo "<td>" . $hotel["vote"] . "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($hotels as $hotel) {
                echo "<td>" . $hotel["distance_to_center"] . "</td>";
            }
            ?>
        </tr>

    </table>



    <h2></h2>

</body>

</html>