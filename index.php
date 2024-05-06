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


    // for($i = 0; $i < count($hotels); $i++) {

    //     // $hotel_name['name'];
    //     // $hotel_description['description'];
    //     // $hotel_parking['parking'];
    //     // $hotel_vote['vote'];
    //     // $hotel_distance_to_center['distance_to_center'];
    //     // var_dump($hotels);

    // }

    foreach($hotels as $hotel) {
        //prendo ogni key e la salvo
        $name = $hotel['name'];
        $description = $hotel['description'];
        $parking = $hotel['parking'];
        $vote = $hotel['vote'];
        $distance_to_center = $hotel['distance_to_center'];
        // var_dump($name);
        ?>

        <!-- print nel dom -->
        <div class="hotel row align-items-center border">
            <div class="col-4">
                <h1> <?php echo $name?> </h1>
                <h3><?php echo $description ?></h3>
            </div>
            <div class="col-4">
                <p><?php echo $parking ?></p>
            </div>
            <div class="col-4">
                <?php echo $vote ?>
                <?php echo $distance_to_center?>
            </div>
        </div>

        <?php
    }

    ?>

<!-- per bootstrap -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    </html>
