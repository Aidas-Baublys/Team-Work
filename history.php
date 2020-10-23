<?php
$participants_history = [
    ['Aistė', 'Aidas', 'Mindė', 'Mindaugas', 'Dainius', 'Petras'],
    ['Bullshit', 'Ass', 'Suck', 'Boobs', 'Shit', 'Anus'],
];
$rand_numb_name = rand(0, 5);
?>
<html>
<head>
    <title>Kortelės</title>
    <meta charset="UTF-8">
</head>
<body class="body-history ">
<div>
    <nav class="nav">
        <ul class="nav-ul">
            <li class="nav-li"><a class="nav-li-link" href="index.php">Home</a></li>
            <li class="nav-li"><a class="nav-li-link" href="">Tour-De-PzDc</a></li>
            <li class="nav-li"><a class="nav-li-link" href="">History</a></li>
            <li class="nav-li"><a class="nav-li-link" href="">Bloopers</a></li>
        </ul>
    </nav>
    <h1 class="history-text">History</h1>
    <ul>
        <?php for ($i = 0; $i < 6; $i++): ?>
            <li class="history-text history-li">
                <?php print $year = (int)date('Y', strtotime("-$i year")) . ':'; ?>
                <?php foreach ($participants_history as $participant) :
                    $rand_numb_name = rand(0, 5);
                    $rand_numb_lastname = rand(0, 5);
                    print $text = "$participant[$rand_numb_name]"; ?>
                <?php endforeach; ?>
            </li>
        <?php endfor; ?>
    </ul>
</div>
<ul>
</body>
</html>
