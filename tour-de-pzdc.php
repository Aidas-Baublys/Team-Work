<?php
$riders = [
    [
        'Tomas Ablomas',
        'Geras dviratis',
    ],
    [
        'Sima Vagina',
        'Šiaip sau dviratis',
    ],
    [
        'Karlas Šarlas',
        'Blogas dviratis',
    ],
    [
        'Ingrida Ingrida',
        'Dviratis kaip dviratis',
    ],
    [
        'Tadas Chujadas',
        'Koks tavo reikalas?',
    ],
    [
        'Olga Chujolga',
        'O šiaip yra skirtumas?',
    ],
];

$biggest_distance = [];

foreach ($riders as $rider_index => $rider) {
    $distance_rand = rand(1, 100);
    $riders[$rider_index][] = $distance_rand;
    $biggest_distance[] = $distance_rand;
}

$leader = max($biggest_distance);
$current_leader = '';

foreach ($riders as $rider_index => $rider) {
    if ($rider[2] === $leader) {
        $current_leader = $rider[0];
    }
}

$h2 = "Current leader $current_leader";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tour-De-Pzdc</title>
    <style>
        .tour-de-pzdc-div {
            height: 500px;
            width: 100%;
            background-image: url("https://images.unsplash.com/photo-1474546652694-a33dd8161d66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1062&q=80");
            position: relative;
        }

        .tour-de-pzdc-article {
            position: absolute;
        }

    </style>
</head>
<body>
<main>
    <h1>Tour-De-Pzdc</h1>
    <h2><?php print $h2; ?></h2>
    <div class="tour-de-pzdc-div">
        <article class="tour-de-pzdc-article"></article>
    </div>
</main>
</body>
</html>vd