<?php
declare(strict_types=1);

require_once __DIR__ . '/enshu3_lib.php';

$top = 6;
$bottom = 10;
$height = 4;

$area = getTrapezoidArea($top, $bottom, $height);

print "台形の面積は {$area} です。\n";
