<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Hotel PHP</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>


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

    ?>
</head>

<body class="bg-dark text-white">
    <div class="container p-3 pt-5">
        <table class="table table-dark table-hover text-center">
            <tr>
                <th class="table-dark">Nome</th>
                <th class="table-dark">Descrizione</th>
                <th class="table-dark">Parcheggio</th>
                <th class="table-dark">Valutazione</th>
                <th class="table-dark">Distanza dal centro</th>
            </tr>
            <?php
            foreach ($hotels as $hotel) {
                echo '<tr>';
                
                echo '<td class="table-dark">' . $hotel['name'] . '</td>';
                echo '<td class="table-dark">' . $hotel['description'] . '</td>';
                echo $hotel['parking'] ? '<td class="table-dark">Sì</td>' : '<td class="table-dark">No</td>';
                echo '<td class="table-dark">' . $hotel['vote'] . '</td>';
                echo '<td class="table-dark">' . $hotel['distance_to_center'] . ' km</td>';

                echo '</tr>';
            }
            ?>
        </table>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
</body>

</html>