<?php
$names = [
    'Mindaugas',
    'Aidas',
    'Sigis',
    'Aiste',
    'Minde',
    'Liudas'
];
$surnames = [
    'Grauzikas',
    'Kotas',
    'Hekolte',
    'Skrajutas',
    'Medis',
    'Peleda'
];
$photos = [
    'https://i.ytimg.com/vi/-NA4PpCzP9g/maxresdefault.jpg',
    'https://images.rove.me/w_1920,q_85/s52maenzv3stml4dk8ph/san-francisco-bring-your-own-big-wheel.jpg',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTi_can2OuT2L_KUV67xnotvqXmleRrm7SZvg&usqp=CAU',
    'https://www.positivetracks.org/wp-content/uploads/2015/07/big-wheels.jpg',
    'https://www.wired.com/wp-content/uploads/images_blogs/geekdad/images/2008/03/24/race.jpg',
    'https://cdn.funcheap.com/wp-content/uploads/2015/03/byobw-easter-563x372.jpg'
];
$participated = [8, 7, 9, 11, 15, 13];
$wins = [1, 3, 5, 4, 2, 6];

for ($a = 1; $a <= 3; $a++) {
    $names_random = rand(0, count($names) - 1);
    $surnames_random = rand(0, count($surnames) - 1);
    $photos_random = rand(0, count($photos) - 1);
    $participated_random = rand(0, count($participated) - 1);
    $wins_random = rand(0, count($wins) - 1);

    $players[$a] = [
        'img' => $photos[$photos_random],
        'name' => $names[$names_random],
        'surname' => $surnames[$surnames_random],
        'games' => $participated[$participated_random],
        'wins' => $wins[$wins_random],
        'loses' => $participated[$participated_random] - $wins[$wins_random],
        'proc_w_l' => number_format(($wins[$wins_random] * 100) / $participated[$participated_random], 2)
    ];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body class="index-body">
<nav class="nav">
    <ul class="nav-ul">
        <li class="nav-li"><a class="nav-li-link" href="index.php">Home</a></li>
        <li class="nav-li"><a class="nav-li-link" href="">Tour-De-PzDc</a></li>
        <li class="nav-li"><a class="nav-li-link" href="">History</a></li>
        <li class="nav-li"><a class="nav-li-link" href="Bloopers.php">Bloopers</a></li>
    </ul>
</nav>
<section class="index-container">
    <?php foreach ($players as $user): ?>
        <div class="index-cards">
            <img class="index-player-photo" src="<?php print $user['img']; ?>">
            <h2 class="index-player-name"><?php print $user['name'] . ' ' . $user['surname']; ?></h2>
            <h3 class="index-player-score">W <?php print $user['games'];?> / L <?php print $user['loses']; ?></h3>
            <h3 class="index-player-score"> Win Ratio: <?php print $user['proc_w_l'];?> %</h3>
        </div>
    <?php endforeach; ?>
</section>
</body>
</html>
