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
        'description' => 'Hotel Futuro Descrizione',
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
/*
foreach ($hotels as $hotel) {
    echo $hotel['name'] . '<br>' . $hotel['description'] . '<br>' . $hotel['vote'] . '<br>' . $hotel['distance_to_center'] . '<hr>';
}
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>


    <div class="container text-center">
        <div class="row">

            <?php foreach ($hotels as $hotel) : ?>

                <div class="col-4">
                    <div class="card p-3 mt-3">

                        <div>
                            <strong>Nome:</strong>
                            <span> <?= $hotel['name'] ?> </span>
                        </div>

                        <div>
                            <strong>Descrizione:</strong>
                            <span> <?= $hotel['description'] ?> </span>
                        </div>

                        <div>
                            <strong>Voto:</strong>
                            <span> <?= $hotel['vote'] ?> su 5 </span>
                        </div>

                        <div>
                            <strong>Distanza dal centro:</strong>
                            <span> <?= $hotel['distance_to_center'] ?>km </span>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>


</body>

</html>