<?php

$str = 'うらにわにはにわ';

$pos = mb_strpos($str, 'うら');

if ($pos !== false) {
    echo 'FOUND' . PHP_EOL;
} else {
    echo 'NOT FOUND' . PHP_EOL;
}
