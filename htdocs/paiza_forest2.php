<?php

$n = trim(fgets(STDIN));
$sg = [];

for ($i = 0; $i < $n; $i++) {
    [$g, $s] = explode(' ', trim(fgets(STDIN)));
    $sg[] = [$s, $g];
}

rsort($sg);

for ($i = 0; $i < $n; $i++) {
    echo $sg[$i][1] . ' ' . $sg[$i][0] . "\n";
}
