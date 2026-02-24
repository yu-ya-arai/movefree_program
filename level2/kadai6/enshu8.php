<?php


function maxMin(float ...$args): array {
    return [max($args), min($args)];
}


$values = [10, 2, -5, 3, 78];

[$max, $min] = maxMin(...$values);

print "max={$max},min={$min}\n";


function factorial(int $num): int {
    if ($num !== 0) {
        return $num * factorial($num - 1);
    }
    return 1;
}

$n = 5;
$fact = factorial($n);

print "{$n}!={$fact}\n";