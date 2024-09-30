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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
</head>
<body>
    
    <h1>
        PHP Hotel
    </h1>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">Description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($hotels as $ind => $hotel) {
                <tr>
                    <td>
                        NAME: <?php echo $hotels[$i]['name']; ?>
                    </td>
                    <td>
                        Description: <?php echo $hotels[$i]['description']; ?>
                    </td>
                    <td>
                        parking: <?php echo $hotels[$i]['parking'] == true ? 'Si' : 'No'; ?>
                    </td>
                    <td>
                        Vote: <?php echo $hotels[$i]['vote']; ?>
                    </td>
                    <td>
                        distance to center: <?php echo $hotels[$i]['distance_to_center']; ?>
                    </td>
                </tr>

                <hr>
            }
        ?>
            </tbody>
        </table>
    </div>

</body>
</html>