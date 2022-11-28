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




if (isset($_GET['parking']) && !empty($_GET['parking'])) {


    foreach ($hotels as $hotel) {
        if ($hotel['parking'] && $_GET['parking'] == 'parking') {

            $filterArr[] = $hotel;

        } else if (!$hotel['parking'] && $_GET['parking'] == 'no-parking') {
            $filterArr[] = $hotel;
        } else if ($_GET['parking'] == 'Scegli') {
            $filterArr[] = $hotel;

        }
    }
    $hotels = $filterArr;
}


// filtro per voto hotel

if (isset($_GET['vote']) && !empty($_GET['vote'])) {
    $vote = $_GET['vote'];
    $hotels = array_filter($hotels, fn($value) => $value['vote'] >= $vote);
}





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


    <div class="wrapper position-absolute">
        <div class="title-wrap mb-5">
            <h1 style="--clr:#FABC3C" href="#" data-text="&nbsp;HOTELS&nbsp;">&nbsp;hotels&nbsp;</h1>
        </div>
        <div>
            <form action="index.php" method="GET" name="formFilter" class="m-auto col-5">
                <select name="parking" id="parking" class="form-select col-6" aria-label="Default select example">
                    <option value="Scegli" selected>Scegli</option>
                    <option value="parking">parking</option>
                    <option value="no-parking">no-parking</option>
                </select>
                <select name="vote" id="vote" class="form-select col-4" aria-label="Default select example">
                    <option value="" selected>Scegli</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" class="btn btn-warning text-center mt-3 col-6 ">Search</button> <button
                    type="submit" class="btn btn-danger text-center mt-3 col-4 ">Reset</button>
            </form>
        </div>

        <table class="px-4 mt-5 table table-dark table-hover">
            <thead>
                <tr class="  text-uppercase title">
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th class="text-center" scope="col">parking</th>
                    <th class="text-center" scope="col">vote</th>
                    <th class="text-center" scope="col">distance from center</th>
                </tr>
            </thead>


            <?php foreach ($hotels as $hotel) {
                $parcheggio = $hotel['parking'] ? 'si' : 'no';
            ?>

            <tbody class="  descr">
                <tr>
                    <td>
                        <?php echo $hotel['name'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['description'] ?>
                    </td>
                    <td class=" text-uppercase text-center">
                        <?php echo $parcheggio ?>
                    </td>
                    <td class=" text-center">
                        <?php echo $hotel['vote'] ?>
                    </td>
                    <td class="  text-center">
                        <?php echo $hotel['distance_to_center'] ?> Km
                    </td>
                </tr>
            </tbody>

            <?php } ?>


    </div>




    </table>
</body>

</html>