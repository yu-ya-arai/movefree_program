<?php
declare(strict_types=1);

function getDiamondArea(float $diagonal1, float $diagonal2): float {
    return $diagonal1 * $diagonal2 / 2;
}

$diagonal1 = 10;
$diagonal2 = 6;

$area = getDiamondArea($diagonal1, $diagonal2);

print "三角形の面積は {$area} です。";