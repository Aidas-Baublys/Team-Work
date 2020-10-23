
Aistė Rutkauskaitė  12:43 PM
<?php
$gifs = [
    [
        'gif' => 'https://media.giphy.com/media/l3vQX6TU3EtPlzWNy/giphy.gif'
    ],
    [
        'gif' => 'https://media.giphy.com/media/l3vQZgTJRNN0fGyS4/giphy.gif'
    ],
    [
        'gif' => 'https://media.giphy.com/media/3oz8xr0pXlMrFMCpxK/giphy.gif'
    ],
    [
        'gif' => 'https://media.giphy.com/media/d3pX5wp28lDevHkQ/giphy.gif'
    ],
    [
        'gif' => 'https://media.giphy.com/media/3oz8xU1PlerHhK6sfu/giphy.gif'
    ],
    [
        'gif' => 'https://media.giphy.com/media/26ybv4PX60puZkNY4/giphy.gif'
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloopers</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Architects Daughter', cursive;
    }
    .bloopers-body {
        margin: 0 auto;
        text-align: center;
        background-image: url("https://i.pinimg.com/originals/95/b3/c7/95b3c7550512c67df4e2a4bc1a8cb5a0.png");
        background-size: 100%;
    }
    .bloopers-container {
        margin: 0 auto;
        width: 60%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-column-gap: 20px;
        grid-row-gap: 20px;
    }
    .bloopers-img {
        height: 200px;
    }
    .blooper-text {
        font-size: 50px;
    }
</style>
<body class="bloopers-body">
<nav class="nav">
    <ul class="nav-ul">
        <li class="nav-li"><a class="nav-li-link" href="index.php">Home</a></li>
        <li class="nav-li"><a class="nav-li-link" href="tour-de-pzdc.php">Tour-De-PzDc</a></li>
        <li class="nav-li"><a class="nav-li-link" href="history.php">History</a></li>
        <li class="nav-li"><a class="nav-li-link" href="bloopers.php">Bloopers</a></li>
    </ul>
</nav>
<h1 class="blooper-text">Bloopers</h1>
<section class="bloopers-container">
    <?php foreach ($gifs as $key => $gif): ?>
        <div>
            <img class="bloopers-img" src="<?php print $gif['gif']; ?>">
        </div>
    <?php endforeach; ?>
</section>
</body>
</html>