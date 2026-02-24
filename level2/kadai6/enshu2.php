<?php
declare(strict_types=1);

function divideOrNull(int $a, int $b): ?float {
    if ($b === 0) {
        return null;
    }
    return $a / $b;
}

$a = 10;
$b = 0;

$result = divideOrNull($a, $b);

if ($result === null) {
    print "0で割れません\n";
} else {
    print "結果は {$result} です。\n";
}

$b = 2;
$result = divideOrNull($a, $b);

if ($result === null) {
    print "0で割れません\n";
} else {
    print "結果は {$result} です。\n";
}