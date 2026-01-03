<?php
$x = true;
$y = false;

$r1 = $x || $y && false;

$r2 = ($x || $y) && false;

$r3 = $x or $y;

$r4 = ($x || $y);

var_dump($r1);
var_dump($r2);
var_dump($r3);
var_dump($r4);
