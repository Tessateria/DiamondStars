<?php

$height = $length = $argv[1];
$breakSpace = 0;
$startStar = 1;
$validateInt = filter_var($height, FILTER_VALIDATE_INT);

if (!$validateInt){
    echo "Введите число цифрами " . PHP_EOL;

}elseif ($height<=0 || (!($height % 2))) {
    echo "Введите непарное число больше 0" . PHP_EOL;

}else {
    $middleHeight = $middle = intval($argv[1] / 2);

    for ($i = 0; $i < $middleHeight; $i++) {
        $spaces = str_repeat('   ', $middle);
        $stars = str_repeat(' * ', $startStar);
        $middle -= 1;
        $startStar += 2;
        echo $spaces . $stars . PHP_EOL;
    };

    for ($i = $middleHeight; $i < $length; $i++) {
        $spaces = str_repeat('   ', $breakSpace);
        $stars = str_repeat(' * ', $height);
        $breakSpace += 1;
        $height -= 2;
        echo $spaces . $stars . PHP_EOL;
    };
}