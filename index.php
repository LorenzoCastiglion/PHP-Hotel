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

$filterArr = [];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <title>HotelSelect</title>
</head>

<body>

    <div class="col-6 m-auto">
        <select name="type" id="type" class="form-select" aria-label="Default select example">
            <option selected>Scegli</option>
            <option value="parking">parking</option>
            <option value="vote">vote</option>
        </select>
        <button type="submit" class="btn btn-warning text-center mt-3 col-12 ">Search</button>
    </div>

    <table class=" mt-5 table table-dark table-hover">
        <thead>
            <tr class=" text-center text-uppercase">
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance from center</th>
            </tr>
        </thead>


        <?php foreach ($hotels as $hotel) {
            $parcheggio = $hotel['parking'] ? 'si' : 'no';
        ?>

        <tbody class=" text-center">
            <tr>
                <td>
                    <?php echo $hotel['name'] ?>
                </td>
                <td>
                    <?php echo $hotel['description'] ?>
                </td>
                <td class=" text-uppercase ">
                    <?php echo $parcheggio ?>
                </td>
                <td>
                    <?php echo $hotel['vote'] ?>
                </td>
                <td>
                    <?php echo $hotel['distance_to_center'] ?> Km
                </td>
            </tr>
        </tbody>

        <?php } ?>






    </table>
</body>

</html>