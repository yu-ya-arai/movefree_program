<?php
$x = 0.123456;
$y = 0.123455;

define('EPSILON', 0.00001);

var_dump(abs($x - $y) < EPSILON);
