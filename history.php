<?php
$participants_history = [
    ['Aistė', 'Aidas', 'Mindė', 'Mindaugas', 'Dainius', 'F**k'],
    ['Bullshit', 'Ass', 'Suck', 'Boobs', 'Shit', 'Anus'],
];
$rand_numb_name = rand(0, 5);
$rand_numb_lastname = rand(0, 5);
};
?>
<html>
<head>
    <title>Kortelės</title>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <ul>
        <?php for ($i = 0; $i < 6; $i++): ?>
            <li>
                <?php print $year = (int)date('Y', strtotime("-$i year"))   ; ?>
                <? foreach ($participants_history as $participant) {
    $rand_numb_name = rand(0, 5);
    $rand_numb_lastname = rand(0, 5);
   print $text = "$participant[$rand_numb_name]";
            </li>
        <?php endfor; ?>
    </ul>
</div>
<ul>
</body>
</html>