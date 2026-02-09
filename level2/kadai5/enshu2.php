<?php

$str = 'PHPエンジニア!!';

echo mb_substr($str, 5, 2) . PHP_EOL;
echo mb_substr($str, 5) . PHP_EOL;
echo mb_substr($str, 5, -4) . PHP_EOL;
echo mb_substr($str, -6, 2) . PHP_EOL;
